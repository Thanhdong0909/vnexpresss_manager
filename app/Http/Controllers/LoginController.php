<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
    	$data = $request->all();   	
    	if(Auth::attempt(['email'=>$data['username'], 'password'=>$data['password']]))
    	{
    		return redirect()->route('categories.index');
    	} else {
   			return redirect()->back();
    	}
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
