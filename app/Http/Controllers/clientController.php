<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\smsApiController;
use App\Models\ApplicationServiceModel;
use App\Models\Car;
use App\Models\Garage;
use App\Models\Mechanics;
use App\Models\PaymentHistory;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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



    public function requestService(Request $request, $garage)
    {

        $rules = [
            'carselect' => 'required|string',
            'street' => 'required|string',
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
                $req       = $clientApi->get("https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=" . env("GOOGLE_GEOCODE_API") . "");
                $res       = json_decode($req->getBody());
                $apiAddress = $res->results[0]->formatted_address;
                $apiLatitude = $res->results[0]->geometry->location->lat;
                $apiLongitude = $res->results[0]->geometry->location->lng;
                if ($res->status === 'OK') {
                    // get garage data
                    $getGarage = DB::select("SELECT garg_id,garg_address,garg_name FROM garage WHERE garg_id='$garage'");
                    foreach ($getGarage as $garageRow) {
                       $garageAddress = $garageRow->garg_address;
                       $garageName = $garageRow->garg_name;
                    }
                    $loggedIn = Auth::user()->cli_id;
                    $seviceApply  =  new ApplicationServiceModel();
                    $callUtilities =  new UtilitiesController();
                    $generateCode = $callUtilities->codeGenerator('APID');
                    $seviceApply->appserv_code = $generateCode;
                    $seviceApply->appserv_address = $apiAddress;
                    $seviceApply->appserv_latitude = $apiLatitude;
                    $seviceApply->appserv_longitude = $apiLongitude;
                    $seviceApply->appserv_feedback = 'initial feedback';
                    $seviceApply->cli_id = $loggedIn;
                    $seviceApply->cr_id = $clientFormData['carselect'];
                    $seviceApply->garg_id = $garage;
                    $seviceApply->save();

                    $getUtilities = new UtilitiesController();
                    $getDistance  = $getUtilities->getDistance($apiAddress,$garageAddress,'K');
                    
                    $getTime = $getUtilities->getTimeInDistance($apiAddress,$garageAddress);
                    // set payment sesion
                    Session::put('paydata',collect([
                        'clientaddress'=>$apiAddress,
                        'garageaddress'=>$garageAddress,
                        'garagename'=>$garageName,
                        'serviceCode' =>$generateCode,
                        'distancekms'=>$getDistance,
                        'time'=>$getTime
                    ]));
                    return redirect('pay');
                }
            } catch (Exception $e) {
                //echo$e;
                return redirect(url()->current())->with('failed', "operation failed");
            }
        }
    }

    public function clientRequests()
    {
        $loggedIn = Auth::user()->cli_id;
        $findRequests = DB::select("select * from applicationservice,client,car,garage where applicationservice.cli_id=client.cli_id and applicationservice.garg_id=garage.garg_id and car.cr_id=applicationservice.cr_id and car.cli_id=client.cli_id and applicationservice.cli_id ='$loggedIn' ");
        return view('client/requested', ['requests' => $findRequests]);
    }

    public function paymentsHistory()
    {
        $payments = DB::select("select * from service_payments");
        return view('administrator/payments', ['payments' => $payments]);
    }

    public function clientsRequests()
    {
        $findRequests = DB::select("select * from applicationservice,client,car,garage where applicationservice.cli_id=client.cli_id and applicationservice.garg_id=garage.garg_id and car.cr_id=applicationservice.cr_id and car.cli_id=client.cli_id ");
        return view('administrator/requests', ['requests' => $findRequests]);
    }

    public function garageServiceRequests()
    {
        $managerId    = Auth::user()->mana_id;
        $findRequests = DB::select("select * from applicationservice,client,car,garage,garagemanager where garage.mana_id=garagemanager.mana_id and garagemanager.mana_id='$managerId' and applicationservice.cli_id=client.cli_id and applicationservice.garg_id=garage.garg_id and car.cr_id=applicationservice.cr_id and car.cli_id=client.cli_id ");
        $getMechanics = DB::select("SELECT * FROM mechanician,garagemanager,garage WHERE mechanician.garg_id=garage.garg_id and garagemanager.mana_id=garage.mana_id and garagemanager.mana_id='$managerId'");


        return view('manager/myservices', ['requests' => $findRequests, 'mechanics' => $getMechanics]);
    }

    public function garageServiceRequests1()
    {
        $managerId    = Auth::user()->mana_id;
        $findRequests = DB::select("select * from applicationservice,client,car,garage,garagemanager where garage.mana_id=garagemanager.mana_id and garagemanager.mana_id='$managerId' and applicationservice.cli_id=client.cli_id and applicationservice.garg_id=garage.garg_id and car.cr_id=applicationservice.cr_id and car.cli_id=client.cli_id ");

        $responseJson = json_encode($findRequests);
        $original_data = json_decode($responseJson, true);
        $features = array();
        foreach ($original_data as $key => $value) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array('Name' => $value['cli_fullnames'], 'Image' => $value['cr_picture'], 'Address' => $value['appserv_address'],'carname'=>$value['cr_name'],'carplate'=>$value['cr_plateNo'], 'Status' => 'Operational'),
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array(
                        $value['appserv_longitude'],
                        $value['appserv_latitude'],
                        1
                    ),
                ),
            );
        }
        $final_data = json_encode($features);
        return view('manager/myservices-map', ['requests' => $final_data]);
    }

    public function analytics()
    {
        $clientId    = Auth::user()->cli_id;
        $clientEmail    = Auth::user()->email;
        $countCars = Car::where('cli_id', $clientId)->count();
        $countRequests = ApplicationServiceModel::where('cli_id', $clientId)->count();
        $countFees = PaymentHistory::where('cli_email', $clientEmail)->sum('pay_amount');
        $countPendingRequests = ApplicationServiceModel::where('cli_id', $clientId)->where('appserv_status', '=', 0)->count();
        $countassignedRequests = ApplicationServiceModel::where('cli_id', $clientId)->where('appserv_status', '=', 1)->count();
        $countsuccessRequests = ApplicationServiceModel::where('cli_id', $clientId)->where('appserv_status', '=', 2)->count();
        return view('client/dashboard', ['cars' => $countCars, 'requests' => $countRequests, 'pending' => $countPendingRequests, 'assigned' => $countassignedRequests, 'success' => $countsuccessRequests, 'fees' => $countFees]);
    }

    public function AdminAnalytics()
    {
        $countCars = Car::all()->count();
        $countMechs = Mechanics::all()->count();
        $countGarage = Garage::all()->count();
        $countClients = Client::all()->count();
        $countPayments = PaymentHistory::all()->count();
        $countRequests = ApplicationServiceModel::all()->count();

        $countFees = PaymentHistory::all()->sum('pay_amount');
        $countPendingRequests = ApplicationServiceModel::all()->where('appserv_status', '=', 0)->count();
        $countassignedRequests = ApplicationServiceModel::all()->where('appserv_status', '=', 1)->count();
        $countsuccessRequests = ApplicationServiceModel::all()->where('appserv_status', '=', 2)->count();
        return view('administrator/home', ['mechs' => $countMechs, 'garages' => $countGarage, 'clients' => $countClients, 'payments' => $countPayments, 'cars' => $countCars, 'requests' => $countRequests, 'pending' => $countPendingRequests, 'assigned' => $countassignedRequests, 'success' => $countsuccessRequests, 'fees' => $countFees]);
    }
}
