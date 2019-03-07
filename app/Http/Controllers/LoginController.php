<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function postLogin(LoginRequest $request)
    {
    	$data = $request->all();   	
    	if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']]))
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
