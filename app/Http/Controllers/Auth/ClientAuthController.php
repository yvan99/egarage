<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('client')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(url('/authdashboard'));
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(["error" => "Invalid Credentials , Try again"]);
        }
    }

    public function logout()
    {
        Auth::guard('client')->logout();

        return redirect('/signin');
    }
}
