<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Drive;

class TrashController extends Controller
{
    public function index()
    {
    	$drives = Drive::where('user_id', auth()->user()->id)->where('is_trash', 1)->orderBy('id', 'DESC')->get();
    	$dates = [];
        foreach ($drives as $drive) {
            array_push($dates, $drive->created_at->format('d M Y'));
        }
        $dates = array_unique($dates);
    	return view('trash/index', compact(['dates', 'drives']));
    }

    public function restoreFile($id)
    {
        $drive = Drive::find($id);
        $drive->update(['is_trash' => 0]);
        return redirect('/trash')->with('drive', 'restore file');
    }

    public function deleteFile($id)
    {
        $drive = Drive::find($id);
        File::delete(public_path() . '/user_drive/' . auth()->user()->id . '_' . auth()->user()->username . '/' . $drive->file_name);
        $drive->delete();
        return redirect('/trash')->with('drive', 'file deleted');
    }
}
