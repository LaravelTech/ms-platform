<?php

namespace Devlancer\Authenticate\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthenticateController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('authenticate::login');
    }
}
