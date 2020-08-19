<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drive;

class StarController extends Controller
{
    public function index()
    {
    	$drives = Drive::where('user_id', auth()->user()->id)->where('is_trash', 0)->where('is_star', 1)->orderBy('id', 'DESC')->get();
    	$dates = [];
        foreach ($drives as $drive) {
            array_push($dates, $drive->created_at->format('d M Y'));
        }
        $dates = array_unique($dates);
    	return view('starred/index', compact(['drives', 'dates']));
    }
}
