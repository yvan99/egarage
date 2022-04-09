<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\smsApiController;

class clientController extends Controller
{
    public function createClient(Request $request)
    {
        $rules = [
            'names' => 'required|string',
            'mobilee' => 'required|string|max:10',
            'email' => 'string|email',
            'password' => 'string|required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $clientFormData = $request->input();
            $count = Client::where('cli_email', '=', $clientFormData['email'])->count();
            if ($count > 0) {
                return redirect('signup')->with('error', "Email is already registered");
            } else {
                try {
                    $client =  new Client();
                    $client->cli_fullnames  = $clientFormData['names'];
                    $client->cli_email  = $clientFormData['email'];
                    $client->cli_phone  = $clientFormData['mobilee'];
                    $client->cli_password  = bcrypt($clientFormData['password']);
                    $client->save();
                    $message = 'Hello ' . $clientFormData['names'] . ' Thank you for registering to E-garage smart ranking ,your account has been successfully registered';
                    $callSms = new smsApiController;
                    $callSms->sendSms($clientFormData['mobilee'], $message);
                    return redirect('signup')->with('status', "Your Account has been registered");
                } catch (Exception $e) {
                    //echo$e;
                    return redirect('signup')->with('failed', "operation failed");
                }
            }
        }
    }
}
