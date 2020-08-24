<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/drive');
        }

    	return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|alpha_dash',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/drive');
        }

        return redirect('/login')->with('auth', 'no credentials');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/drive');
        }

    	return view('auth/register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users|alpha_dash',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(10),
        ]);

        $path = public_path().'/user_drive/' . $user->id . '_' . $user->username;
        File::makeDirectory($path, $mode = 0777, true, true);

        return redirect('/login')->with('auth', 'account created');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('auth', 'logout');
    }
}