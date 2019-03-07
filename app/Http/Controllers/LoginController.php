<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function postLogin(LoginRequest $request)
    {
    	$data = $request->all();   	
    	if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']]))
    	{
    		return redirect()->route('categories.index');
    	} else {
            $errors = new MessageBag(['ErrorLogin'=>'Email hoặc mật khẩu không đúng']);  
   			return redirect()->back()->withInput()->withErrors($errors);
    	}
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
