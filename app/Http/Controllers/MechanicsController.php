<?php

namespace App\Http\Controllers;

use App\Models\ApplicationServiceModel;
use App\Models\Mechanics;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class MechanicsController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'string|email',
            'phone' => 'string|required|max:11',
            'manager' => 'numeric|required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $mechanicsFormData = $request->input();
            $count = Mechanics::where('mech_email', '=', $mechanicsFormData['email'])->count();
            if ($count > 0) {
                return redirect('mechanics')->with('error', "Email or telephone is already registered");
            } else {
                try {
                    $mechanics =  new Mechanics();
                    $mechanics->mech_firstName  = $mechanicsFormData['firstname'];
                    $mechanics->mech_lastName  = $mechanicsFormData['lastname'];
                    $mechanics->mech_email  = $mechanicsFormData['email'];
                    $mechanics->mech_phone = $mechanicsFormData['phone'];
                    $mechanics->mech_password  = bcrypt('123');
                    $manager = $mechanicsFormData['manager'];
                    # find manager
                    $findManager = DB::select("select garg_id,garg_name from garage where mana_id='$manager'");

                    foreach ($findManager as $gargManager) {
                        $garaId   = $gargManager->garg_id;
                        $gargName = $gargManager->garg_name;
                    }
                    $mechanics->garg_id = $garaId;
                    $mechanics->save();
                    $message = 'Hello ' . $mechanicsFormData['firstname'] . ' ' . $mechanicsFormData['lastname'] . ' Your garage account at ' . $gargName . ' as mechanician has been successfuly created ';
                    $callSms = new smsApiController;
                    $callSms->sendSms($mechanicsFormData['phone'], $message);
                    return redirect('mechanics')->with('status', "Mechanician Account has been registered");
                } catch (Exception $e) {
                    //echo$e;
                    return redirect('mechanics')->with('failed', "operation failed");
                }
            }
        }
    }

    public function getMechnanics()
    {
        $getMechanics = Mechanics::all();
        return view('manager/mechanics', ['mechanics' => $getMechanics]);
    }

    public function AssignMechanics(Request $request)
    {
        $rules = [
            'cid' => 'required|string',
            'mechs' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $managerId    = Auth::user()->mana_id;
            $assignFormData = $request->input();
            $serviceId = $assignFormData['cid'];
            $mechanique = $assignFormData['mechs'];
            $selectService  = DB::select("SELECT * FROM applicationservice,client,car,garage,garagemanager,mechanician where mechanician.garg_id=garage.garg_id and mechanician.mech_id='$mechanique' and applicationservice.cli_id=client.cli_id and applicationservice.cr_id=car.cr_id and car.cli_id=client.cli_id and garage.garg_id=applicationservice.garg_id and garage.mana_id=garagemanager.mana_id and garagemanager.mana_id='$managerId' and applicationservice.appserv_id='$serviceId'");
            foreach ($selectService as $key) {
                # client info
                $clientNames = $key->cli_fullnames;
                $clientPhone = $key->cli_phone;

                #service address
                $address = $key->appserv_address;

                # car details

                $carName = $key->cr_name;
                $carPlate = $key->cr_plateNo;
                //$carBrand = $key->cr_brand;
                $carEngine = $key->cr_enginetype;
                $carGear = $key->cr_type;
                $carColor = $key->cr_color;
                $carYear = $key->cr_year_manufact;

                # mechanician details

                $mechFirstNames = $key->mech_firstName;
                $mechlastNames = $key->mech_lastName;
                $mechPhone = $key->mech_phone;
                $mechNames = $mechFirstNames . ' ' . $mechlastNames;

                # service request

                $serviceCode = $key->appserv_code;
            }

            $message = 'Hello ' . $mechNames . ' You have been assigned a work to client ' . $clientNames . ' with telephone number ' . $clientPhone . ' located at ' . $address . ' The car information : ' . $carName . ' plate number : ' . $carPlate . ' engine type : ' . $carEngine . ' ' . ' Gear type : ' . $carGear . ' color : ' . $carColor . ' manufactured in : ' . $carYear;
            $messageToCustomer = 'Hello ' . $clientNames . ' your service request N0: ' . $serviceCode . ' Has been assigned to the mechanician . Please confirm the service completion in your account portal';
            $callSms = new smsApiController;
            $callSms->sendSms($mechPhone, $message);
            $callSms->sendSms($clientPhone, $messageToCustomer);

            #update mechanic
            $serviceModel = ApplicationServiceModel::find($serviceId);
            $serviceModel->mech_id = $mechanique;
            $serviceModel->appserv_status = 1;
            $serviceModel->update();

            return redirect()->back()->with('status', 'Service assigned Successfully');
        }
    }

    public function confirmService(Request $request){
        $rules = [
            'cid' => 'required|string',
            'rating' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } 
        else{
            $assignFormData = $request->input();
            $serviceId = $assignFormData['cid'];
            $rating=$assignFormData['rating'];
            #update mechanic
            $serviceModel = ApplicationServiceModel::find($serviceId);
            $serviceModel->appserv_status = 2;
            $serviceModel->appserv_feedback = $rating;
            $serviceModel->update();
            return redirect()->back()->with('status', 'Thank you for the feedback , service successfully delivered');
        }
    }
}
