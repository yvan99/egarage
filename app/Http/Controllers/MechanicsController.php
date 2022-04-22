<?php

namespace App\Http\Controllers;

use App\Models\Mechanics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class MechanicsController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'string|email',
            'phone' => 'string|required|max:11',
            'manager'=>'numeric|required'
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
                    $message = 'Hello ' . $mechanicsFormData['firstname'] .' '. $mechanicsFormData['lastname'] . ' Your garage account at ' .$gargName.' as mechanician has been successfuly created ';
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

    public function getMechnanics(){
        $getMechanics = Mechanics::all();
        return view('manager/mechanics', ['mechanics' => $getMechanics]);
    }
}
