<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\smsApiController;
use App\Models\ApplicationServiceModel;
use Illuminate\Support\Facades\Auth;

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
            $count = Client::where('email', '=', $clientFormData['email'])->count();
            if ($count > 0) {
                return redirect('signup')->with('error', "Email is already registered");
            } else {
                try {
                    $client =  new Client();
                    
                    $client->cli_fullnames  = $clientFormData['names'];
                    $client->email  = $clientFormData['email'];
                    $client->cli_phone  = $clientFormData['mobilee'];
                    $client->password  = bcrypt($clientFormData['password']);
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

    public function getClients()
    {
      $getClients = Client::all();
      return view('administrator/client', ['clients' => $getClients]);
    }



    public function requestService(Request $request,$garage){

        $rules = [
            'carselect' => 'required|string',
            'street' => 'required|string',
            'servicedescription' => 'string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $clientFormData = $request->input();
            $address = $clientFormData['street'];
            
                try {
                    // CALL TO GOOGLE GEOCODE API TO GET CLIENT ADDRESS
                    $clientApi = new \GuzzleHttp\Client();
                    $req       = $clientApi->get("https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&key=".env("GOOGLE_GEOCODE_API")."");
                    $res       = json_decode($req->getBody());
                    $apiAddress= $res->results[0]->formatted_address;
                    $apiLatitude= $res->results[0]->geometry->location->lat;
                     $apiLongitude= $res->results[0]->geometry->location->lng;
                    if ($res->status === 'OK') {
                        $loggedIn = Auth::user()->cli_id;
                        $seviceApply  =  new ApplicationServiceModel();
                        $callUtilities=  new UtilitiesController();
                        $generateCode= $callUtilities->codeGenerator('APID');
                        $seviceApply->appserv_code=$generateCode;
                        $seviceApply->appserv_address=$apiAddress;
                        $seviceApply->appserv_latitude=$apiLatitude;
                        $seviceApply->appserv_longitude=$apiLongitude;
                        $seviceApply->cli_id= $loggedIn;
                        $seviceApply->cr_id=$clientFormData['carselect'];
                        $seviceApply->garg_id=$garage;
                        $seviceApply->appServ_description=$clientFormData['servicedescription'];
                        $seviceApply->save();
                        toastr()->success("Application service is received ,progress with payments");
                        return redirect('pay')->with('serviceCode',$generateCode);    
                    }
                    
                } catch (Exception $e) {
                    //echo$e;
                    return redirect(url()->current())->with('failed', "operation failed");
                }
            
        }


    }
}
