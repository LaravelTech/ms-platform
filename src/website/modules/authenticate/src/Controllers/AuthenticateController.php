<?php

namespace Devlancer\Authenticate\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Devlancer\Authenticate\Requests\LoginRequest;
use Carbon\Carbon;
use Auth;

class AuthenticateController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('authenticate::login');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('hr.dashboard');;
        }
        return back()->with('error', 'Your email or password are incorrect')->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('hr.auth.login');
    }
}
