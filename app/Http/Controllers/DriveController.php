<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Drive;

class DriveController extends Controller
{
    public function index()
    {
        $drives = Drive::where('user_id', auth()->user()->id)->where('is_trash', 0)->orderBy('id', 'DESC')->get();
        $dates = [];
        foreach ($drives as $drive) {
            array_push($dates, $drive->created_at->format('d M Y'));
        }
        $dates = array_unique($dates);
    	return view('drive/index', compact(['drives', 'dates']));
    }

    public function uploadFile(Request $request)
    {
    	$this->validate($request, [
    		'uploadfile' => 'mimes:jpg,jpeg,png,gif,JPG,doc,docx,xls,xlsx,ppt,pptx,pdf,txt,zip'
    	]);

    	$fileSize = number_format($request->file('uploadfile')->getSize()/1048576, 2);

        $fileName = $request->file('uploadfile')->getClientOriginalName();
        $checkDrive = Drive::where('user_id', auth()->user()->id)->where('file_name', $fileName)->get()->first();

        if ($checkDrive != null) {
            return redirect('/drive')->with('drive', 'file exists');
        } else {
            Drive::create([
                'user_id' => auth()->user()->id,
                'file_name' => $request->file('uploadfile')->getClientOriginalName(),
                'file_type' => $request->file('uploadfile')->extension(),
                'file_size' => $fileSize,
                'is_star' => 0,
                'is_trash' => 0,
            ]);

            $request->file('uploadfile')->move('user_drive/' . auth()->user()->id . '_' . auth()->user()->username, $request->file('uploadfile')->getClientOriginalName());

            return redirect('/drive')->with('drive', 'file upload successful');
        }
    }

    public function starredDrive($id)
    {
        $drive = Drive::find($id);
        if ($drive->is_star == 1) {
            $drive->update(['is_star' => 0]);
            echo json_encode('unstarred');
        } else {
            $drive->update(['is_star' => 1]);
            echo json_encode('starred');
        }
    }

    public function trashFile($id)
    {
    	$drive = Drive::find($id);
    	$drive->update(['is_trash' => 1, 'is_star' => 0]);
    }
}
