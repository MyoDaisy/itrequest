<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use DB;
use Auth;

class LoginController extends Controller
{
    public function show(){
    	return view('login');
    }

    public function request(Request $request){
    		
    		dd(DB::table('tickets')->get());

    		$rule = [
    			'username'=>'required',
    			'password'=>'required'
    		];

    		$message = [
    			'username.required'=>"Enter your username",
    			'password.required'=>"Enter your password"
    		];

    		$validator = Validator::make($request->all(), $rule, $message);

    		if ($validator->fails()) {
	            return redirect('login')
	                        ->withErrors($validator)
	                        ->withInput();
        	}

        	$username=$request->input('username');
    		$password=$request->input('password');

    		$value = $request->session('key','default');
    		session(['test'=>'abc']);
    }
}
