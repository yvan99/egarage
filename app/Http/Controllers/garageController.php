<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Garage;
use App\Models\GarageManager;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class garageController extends Controller
{
  public function getServices()
  {
    $districts = Districts::all();
    $services = Services::all();
    return view('home', ['services' => $services, 'districts' => $districts]);
  }

  public function getService($service)
  {
    $request     = Services::findOrFail($service);
    $findGarages = DB::select("select * from garage,service,districts where garage.serv_id=service.serv_id and service.serv_id='$service' and garage.districtcode=districts.districtcode");
    $fetchGarages = DB::select("select * from garage,service where garage.garg_status='1' and garage.serv_id=service.serv_id and service.serv_id='$service'");
    $responseJson=json_encode($fetchGarages);
    return view('client/single-service', ['amagarages' => $responseJson]);
  }

  public function getDistrict($district)
  {

    $request     = Districts::findOrFail($district);
    $findGarages = DB::select("select * from garage,service,districts where garage.serv_id=service.serv_id and garage.districtcode=districts.districtcode and districts.districtcode='$district'");
    return view('client/singledistrict', ['garages' => $findGarages]);
  }


  public function garageSignupInfo()
  {
    $districts = Districts::all();
    $services = Services::all();
    return view('applygarage', ['services' => $services, 'districts' => $districts]);
  }
  public function createGarage(Request $request)
  {
    $rules = [
      'names' => 'required|string',
      'mobilee' => 'required|string|max:10',
      'email' => 'string|email',
      'password' => 'string|required',
      'ganame' => 'string|required',
      'gatin' => 'string|required',
      'gaservice' => 'string|required',
      'secfile' => 'required|file|mimes:jpg,png,jpeg,png,pdf',
      'rdbfile' => 'required|file|mimes:jpg,png,jpeg,png,pdf',
      'garagefile' => 'required|file|mimes:jpg,png,jpeg,png,pdf',
      'distrgara' => 'string|required',
      'rgalocale' => 'string|required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else {
      ## find duplicates
      $formData = $request->input();

      $countGarage = Garage::where('garg_name', '=', $formData['ganame'])->count();
      $countOwner = GarageManager::where('mana_fullnames', '=', $formData['names'])->count();
      if ($countGarage > 0 || $countOwner > 0) {
        return redirect('garage-apply')->with('error', "Email or Garage name is taken");
      } else {
        try {
          $clientApi = new \GuzzleHttp\Client();
          $req       = $clientApi->get("https://maps.googleapis.com/maps/api/geocode/json?address=" . $formData['rgalocale'] . "&key=" . env("GOOGLE_GEOCODE_API") . "");
          $res       = json_decode($req->getBody());
          $apiAddress = $res->results[0]->formatted_address;
          $apiLatitude = $res->results[0]->geometry->location->lat;
          $apiLongitude = $res->results[0]->geometry->location->lng;
          if ($res->status === 'OK') {
            $getDistrictFile = $request->file('secfile')->getClientOriginalName();
            $getRdbFile      = $request->file('rdbfile')->getClientOriginalName();
            $getGarageFile   = $request->file('garagefile')->getClientOriginalName();
            $manager =  new GarageManager();
            $garage  =  new Garage();
            $manager->mana_fullnames  = $formData['names'];
            $manager->mana_email  = $formData['email'];
            $manager->mana_phone  = $formData['mobilee'];
            $manager->mana_password  = bcrypt($formData['password']);
            #garage
            $garage->garg_name      = $formData['ganame'];
            $garage->garg_tinNumber = $formData['gatin'];
            $garage->serv_id        = $formData['gaservice'];
            $garage->garg_sectorReg = $getDistrictFile;
            $garage->garg_rdbReg    = $getRdbFile;
            $garage->districtcode   = $formData['distrgara'];
            $garage->garg_address   = $apiAddress;
            $garage->garg_latt   = $apiLatitude;
            $garage->garg_longi  = $apiLongitude;
            $garage->mana_id        = $formData['email'];
            $garage->garg_picture   = $getGarageFile;

            #store files
            $request->file('secfile')->move(public_path('districtfiles'), $getDistrictFile);
            $request->file('rdbfile')->move(public_path('rdbfiles'), $getRdbFile);
            $request->file('garagefile')->move(public_path('garagephoto'), $getGarageFile);
            #save data
            $manager->save();
            $garage->save();
            # send confirmation
            $message = 'Hello ' . $formData['names'] . ' Thank you for registering your garage to E-garage smart ranking ,your garage account has been successfully registered , wait for approval ASAP';
            $callSms = new smsApiController;
            $callSms->sendSms($formData['mobilee'], $message);
            return redirect('garage-apply')->with('status', "Your Account has been registered");
          }
        } catch (Exception $e) {
          //echo$e;
          return redirect('garage-apply')->with('failed', "operation failed");
        }
      }
    }
  }

  public function getGarages()
  {
    $fetchPendingGarages = DB::select("select * from garage,garagemanager,service,districts where garage.mana_id=garagemanager.mana_email and garage.garg_status='0' and garage.serv_id=service.serv_id and garage.districtcode=districts.districtcode ");
    return view('administrator/garageapplies', ['pendings' => $fetchPendingGarages]);
  }

 

  public function getApprovedGarages()
  {
    $fetchApprovedGarages = DB::select("select * from garage,garagemanager,service,districts where garage.mana_id=garagemanager.mana_id and garage.garg_status='1' and garage.serv_id=service.serv_id and garage.districtcode=districts.districtcode ");
    return view('administrator/garages', ['approved' => $fetchApprovedGarages]);
  }

  public function downloadSector($file)
  {
    return response()->download(public_path("districtfiles/{$file}"));
  }
  public function downloadRdb($file)
  {
    return response()->download(public_path("rdbfiles/{$file}"));
  }
  public function confirmGarage($garage)
  {
    $request = Garage::findOrFail($garage);
    $findManager = DB::select("select * from garage,garagemanager where garage.mana_id=garagemanager.mana_email and garage.garg_id='$garage' limit 1");
    foreach ($findManager as $manager) {
      $getId = $manager->mana_id;
      $getPhone = $manager->mana_phone;
      $getNames = $manager->mana_fullnames;
      $getGarage = $manager->garg_name;
    }
    $request->garg_status = 1; //Approved
    $request->mana_id = $getId;
    $message = 'Hello ' . $getNames . ' Thank you for using our service,your garage ' . $getGarage . ' has been successfully approved , you can now login to access your account';
    $callSms = new smsApiController;
    $callSms->sendSms($getPhone, $message);
    $request->save();
    return redirect('applications')->with('status', "Garage application approved successfully");
  }

  public function rejectGarage($garage)
  {
    $findManager = DB::select("select * from garage,garagemanager where garage.mana_id=garagemanager.mana_email and garage.garg_id='$garage' limit 1");
    foreach ($findManager as $manager) {
      $getId = $manager->mana_id;
      $getPhone = $manager->mana_phone;
      $getNames = $manager->mana_fullnames;
      $getGarage = $manager->garg_name;
    }
    $message = 'Hello ' . $getNames . ' your application for garage ' . $getGarage . ' is not complete , please review your application and try again';
    $callSms = new smsApiController;
    $callSms->sendSms($getPhone, $message);

    # remove data
    GarageManager::where('mana_id', $getId)->delete();
    Garage::where('garg_id', $garage)->delete();
    return redirect('applications')->with('status', "Garage application has been rejected");
  }
}
