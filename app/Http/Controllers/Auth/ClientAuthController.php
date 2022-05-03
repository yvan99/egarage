<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{

    public function showLoginForm()
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('client.home');
        } else {
            //logout($request);
            return view('clientsignin');
            //return "logged out";
        }
    }

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
            $user = auth()->user();
            return redirect()->intended(url('/authdashboard'));
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(["error" => "Invalid Credentials , Try again"]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/signin');
    }
}
