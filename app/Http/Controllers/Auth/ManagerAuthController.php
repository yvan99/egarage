<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ManagerAuthController extends Controller
{
    
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('manager')-> attempt ( [ 'mana_email' => $request->email , 'password' => $request->password] )) {
            return redirect()->intended(url('/manager'));
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(["error" => "Invalid Credentials , Try again"]);
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/auth/manager');
    }
}
