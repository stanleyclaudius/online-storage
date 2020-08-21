<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {
    	$this->validate($request, [
    		'avatar' => 'mimes:jpg,png,jpeg',
    	]);

    	$user = User::find(auth()->user()->id);
    	$user->update([
    		'name' => $request->name,
    	]);

    	if ($request->hasFile('avatar')) {
    		$request->file('avatar')->move('avatar/', $request->file('avatar')->getClientOriginalName());
    		$user->avatar = $request->file('avatar')->getClientOriginalName();
    		$user->save();
    	} else {
    		$user->avatar = $user->avatar;
    		$user->save();
    	}

    	return redirect('/drive')->with('drive', 'user updated');
    }
}
