<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username)
    {
    	$user = User::whereUsername($username)->first();
    	if (isset ($user ))
    		return view('user.profile', compact('user'));
    	else
    		return null;
    }
}
