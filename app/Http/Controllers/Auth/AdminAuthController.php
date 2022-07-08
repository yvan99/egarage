<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(url('admin/'));
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(["error" => "Invalid Credentials , Try again"]);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/auth/admin');
    }
}
