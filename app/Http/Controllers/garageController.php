<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Garage;
use App\Models\GarageManager;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class garageController extends Controller
{
  public function getServices()
  {
    $districts = Districts::all();
    $services = Services::all();
    return view('home', ['services' => $services, 'districts' => $districts]);
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
      'distrgara' => 'string|required',
      'rgalocale' => 'string|required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else {
      ## find duplicates
      $formData = $request->input();

      $countGarage= Garage::where('garg_name', '=', $formData['ganame'])->count();
      $countOwner = GarageManager::where('mana_fullnames', '=', $formData['names'])->count();
      if ($countGarage > 0 || $countOwner > 0) {
        return redirect('garage-apply')->with('error', "Email or Garage name is taken");
      } else {
        try {
          $getDistrictFile = $request->file('secfile')->getClientOriginalName();
          $getRdbFile      = $request->file('rdbfile')->getClientOriginalName();
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
          $garage->garg_address   = $formData['rgalocale'];
         
          #store files
          $request->file('secfile')->move(public_path('districtfiles'), $getDistrictFile);
          $request->file('rdbfile')->move(public_path('rdbfiles'), $getDistrictFile);;
           #save data
           $manager->save();
           $garage->save();
          # send confirmation
          $message = 'Hello ' . $formData['names'] . ' Thank you for registering your garage to E-garage smart ranking ,your garage account has been successfully registered , wait for approval ASAP';
          $callSms = new smsApiController;
          $callSms->sendSms($formData['mobilee'], $message);
          return redirect('garage-apply')->with('status', "Your Account has been registered");
        } catch (Exception $e) {
          //echo$e;
          return redirect('garage-apply')->with('failed', "operation failed");
        }
      }
    }
  }
}
