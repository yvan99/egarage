<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('manager')-> attempt ( [ 'mana_email' => $request->email , 'password' => $request->password] )) {
            $user = auth()->user();
            return redirect()->intended(url('/manager'));
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(["error" => "Invalid Credentials , Try again"]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('manager')->logout();
        return redirect('/auth/manager');
    }
}
