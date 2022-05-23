<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class CarController extends Controller
{
    //
    public function store(Request $request)
    {
        $rules = [
            'carname' => 'required|string',
            'plate' => 'required|string',
            'model' => 'string|required',
            'enginetype' => 'string|required',
            'cartype' => 'string|required',
            'color' => 'string|required',
            'carphoto' => 'required|file|mimes:jpg,png,jpeg,png',
            'client' => 'required|string',
            'year'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            $formData = $request->input();
            try {
                $getCarFile = $request->file('carphoto')->getClientOriginalName();
                $carModel   = new Car();
                $carModel->cli_id         = $formData['client'];
                $carModel->cr_name        = $formData['carname'];
                $carModel->cr_plateNo     = $formData['plate'];
                $carModel->cr_brand       = $formData['model'];
                $carModel->cr_enginetype  = $formData['enginetype'];
                $carModel->cr_enginemodel = $formData['engmodel'];
                $carModel->cr_type        = $formData['cartype'];
                $carModel->cr_color       = $formData['color'];
                $carModel->cr_details     = $formData['details'];
                $carModel->cr_year_manufact= $formData['year'];

                $carModel->cr_picture     = $getCarFile;
                # code generator
                $callUtilities = new UtilitiesController();
                $carModel->cr_code = $callUtilities->codeGenerator('CR');
                #store files
                $request->file('carphoto')->move(public_path('carphotos'), $getCarFile);
                $carModel->save();
                return redirect('mycars')->with('status', "Your car has been registered");
            } catch (Exception $e) {
                //throw $th;
                return redirect('mycars')->with('failed', "operation failed");
            }
        }
    }

    public function getCarsByClient(){
        $client = Auth::user()->cli_id;
        $fetchCarsByClient = DB::select("select * from client,car where client.cli_id=car.cli_id and client.cli_id='$client'");
        return view('client/cars', ['cars' => $fetchCarsByClient]);
    }

    public function getCarsByClient1(){
        $client = Auth::user()->cli_id;
        $fetchCarsByClient = DB::select("select * from client,car where client.cli_id=car.cli_id and client.cli_id='$client'");
        return view('client/request-serv', ['cars' => $fetchCarsByClient]);
    }

    public function getCars(){
        $fetchCars = DB::select("select * from client,car where client.cli_id=car.cli_id");
        return view('administrator/carse', ['cars' => $fetchCars]);
    }


}
