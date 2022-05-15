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
            'servicerefid' => 'required|string',
            'agree' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $clientFormData = $request->input();
            //This generates a payment reference
            $tx_ref = Flutterwave::generateReference();
            $order_id = Flutterwave::generateReference('momo');
            // Enter the details of the payment
            $data = [
                'amount' => 100,
                'fullname' => Auth::user()->cli_fullnames,
                'email' => Auth::user()->email,
                'redirect_url' => route('callback'),
                'phone_number' => $clientFormData['phone'],
                'tx_ref' => $tx_ref,
                'order_id' => $order_id,
                "customizations" => [
                    "title" => 'Egarage service fee payment',
                    "description" => "Pay your garage service fee using MTN MOMO"
                ]
            ];

            $charge = Flutterwave::payments()->momoRW($data);
            if ($charge['status'] === 'success') {
                // Redirect to the charge url
                return redirect($charge['data']['redirect']);
            }

        }
    }


    public function callback()
    {
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);
        $transId = $data['data']['flw_ref'];
        $amount  = $data['data']['amount'];
        $currency= $data['data']['currency'];
        $gateway = $data['data']['payment_type'];
        $customer= $data['data']['customer']['name'];
        $phone   = $data['data']['customer']['phone_number'];
        $email   = $data['data']['customer']['email'];
        $datePay=$data['data']['customer']['created_at'];

        // save payment details to db

        if ($data['data']['status']==='successful') {
        $paymentHistoryModel = new PaymentHistory();
        $paymentHistoryModel->pay_flutterid=$transId;
        $paymentHistoryModel->pay_amount=$currency.$amount;
        $paymentHistoryModel->cli_fullnames=$customer;
        $paymentHistoryModel->cli_email=$email;
        $paymentHistoryModel->pay_date=$datePay;
        $paymentHistoryModel->pay_status=1;
        $paymentHistoryModel->cli_phone=$phone;
        $paymentHistoryModel->pay_gateway=$gateway;

        $paymentHistoryModel->save();
        return redirect('/authdashboard')->with('status', "Service request is successfully processed");
        }
        elseif ($data['data']['status']==='cancelled') {
            return redirect('/authdashboard')->with('error', "Service request is canceled on payment process");
            
        } 

    }
}
