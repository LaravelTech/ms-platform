<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthenticateController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('pages.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('hr.dashboard');;
        }
        return back()->with('error', 'Invalid Username or Password!')->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('hr.auth.login');
    }
}
