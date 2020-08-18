<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drive;

class DriveController extends Controller
{
    public function index()
    {
    	return view('drive/index');
    }

    public function uploadFile(Request $request)
    {
    	$this->validate($request, [
    		'uploadfile' => 'mimes:jpg,jpeg,png,gif,JPG,doc,docx,xls,xlsx,ppt,pptx,pdf'
    	]);

    	$fileSize = number_format($request->file('uploadfile')->getSize()/1048576, 2);

    	Drive::create([
    		'user_id' => auth()->user()->id,
    		'file_name' => $request->file('uploadfile')->getClientOriginalName(),
    		'file_type' => $request->file('uploadfile')->extension(),
    		'file_size' => $fileSize,
    		'is_star' => 0,
    		'is_trash' => 0,
    	]);

    	$request->file('uploadfile')->move('user_drive/' . auth()->user()->id . '_' . auth()->user()->username, $request->file('uploadfile')->getClientOriginalName());

    	return redirect()->back()->with('drive', 'file upload successful');
    }
}
