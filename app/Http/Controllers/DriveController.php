<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index()
    {
    	return view('drive/index');
    }
}
