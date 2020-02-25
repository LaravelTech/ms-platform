<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function postLogin(Request $request)
    {
        return redirect()->route('hr.dashboard');;
    }

    public function logout(Request $request)
    {
        return redirect()->route('hr.auth.login');
    }
}
