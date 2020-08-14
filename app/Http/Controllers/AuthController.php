<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth/login');
    }

    public function postLogin(Request $request)
    {

    }

    public function register()
    {
    	return view('auth/register');
    }

    public function postRegister(Request $request)
    {

    }

    public function forget()
    {
    	return view('auth/forget');
    }

    public function postForget(Request $request)
    {

    }

    public function reset()
    {
        return view('auth/reset');
    }

    public function postReset(Request $request)
    {

    }
}
