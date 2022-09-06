<?php

namespace App\Http\Controllers;

use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FlutterwaveControler extends Controller
{
    public function initialize(Request $request)
    {

        $rules = [
            'phone' => 'required|string',
            'agree' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            //This generates a payment reference
            $reference = Flutterwave::generateReference();
            $data = [
                'payment_options' => 'card,banktransfer',
                'amount' => 100,
                'email' => Auth::user()->email,
                'tx_ref' => $reference,
                'currency' => "RWF",
                'redirect_url' => route('callback'),
                'customer' => [
                    'email' => Auth::user()->email,
                    "phone_number" => Auth::user()->phone,
                    "name" => Auth::user()->cli_fullnames,
                ],

                "customizations" => [
                    "title" => 'E-garage service payment',
                    "description" => "Pay your garage fees"
                ],

                // ADD additional PARAMS
                "meta"=>[
                    'managerPhone'=>session()->get('paydata')['managerPhone'],
                    'managerNames'=>session()->get('paydata')['managerNames']
                ]
            ];

            $payment = Flutterwave::initializePayment($data);


            if ($payment['status'] !== 'success') {
                return back()->with('error', 'Payment failed to proceed');
            }
            return redirect($payment['data']['link']);
        }
    }


    public function callback()
    {
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);
        $transId = $data['data']['flw_ref'];
        $amount  = $data['data']['amount'];
        $currency = $data['data']['currency'];
        $gateway = $data['data']['payment_type'];
        $customer = $data['data']['customer']['name'];
        $phone   = $data['data']['customer']['phone_number'];
        $email   = $data['data']['customer']['email'];
        $datePay = $data['data']['customer']['created_at'];
       

        // save payment details to db

        if ($data['data']['status'] === 'successful') {
            $paymentHistoryModel = new PaymentHistory();
            $paymentHistoryModel->pay_flutterid = $transId;
            $paymentHistoryModel->pay_amount = $amount;
            $paymentHistoryModel->cli_fullnames = $customer;
            $paymentHistoryModel->cli_email = $email;
            $paymentHistoryModel->pay_date = $datePay;
            $paymentHistoryModel->pay_status = 1;
            $paymentHistoryModel->cli_phone = $phone;
            $paymentHistoryModel->pay_gateway = $gateway;

            $paymentHistoryModel->save();

            // SEND SMS TO GARAGE MANAGER

            $managerNames =$data['data']['meta']['managerNames'];
            $managerPhone = $data['data']['meta']['managerPhone'] ;

            $getSmsClass = new smsApiController();
            $message = 'Hello Mr/Ms '.$managerNames . ' Your garage has been assigned a service request from client '.$customer . ' with tel no: '.$phone;
            $getSmsClass->sendSms($managerPhone,$message);
            
            return redirect('/authdashboard')->with('status', "Service request is successfully processed , Please Wait for the mechanician");
        } elseif ($data['data']['status'] === 'cancelled') {
            return redirect('/authdashboard')->with('error', "Service request is canceled on payment process");
        }
    }
}
