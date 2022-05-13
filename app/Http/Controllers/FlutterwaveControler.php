<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class FlutterwaveControler extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
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
                'email' => Auth::user()->email,
                'redirect_url' => route('callback'),
                'phone_number' => $clientFormData['phone'],
                'tx_ref' => $tx_ref,
                'order_id' => $order_id
            ];

            $charge = Flutterwave::payments()->momoRW($data);

            if ($charge['status'] === 'success') {
                # code...
                // Redirect to the charge url
                return redirect($charge['data']['redirect']);
            }

            //return redirect($payment['data']['link']);
        }
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {

        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            dd($data);
        } elseif ($status ==  'cancelled') {
            //Put desired action/code after transaction has been cancelled here
        } else {
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
