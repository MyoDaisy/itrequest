<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Users;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Show logn view
    public function login(){
        return view('login');
    }


    //Submit login

    public function requestLogin(Request $request){
        
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
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $username = $request->input('username');
            $password = md5($request->input('password'));

            $data=[
                'username'=>$username,
                'password '=>$password
            ];

            dd(Auth::attempt($data));
            //     return redirect()->intended('/ticket');
            // }
            // else{
            //     $errors = new MessageBag(['errorlogin' => 'Username or password is incorrect']);
            //     return redirect()->back()->withInput()->withErrors($errors);
            // }
        }
        

        // $user = Users::where('username',$username)->where('password',$password)->first();
        // if(!isset($user)){
        //     $errors = new MessageBag(['errorlogin' => 'Username or password is incorrect']);
        //     return redirect()->back()->withInput()->withErrors($errors);
        // }
        // else{
        //     $request->session()->put('login', true);
        //     session(['user123', [
        //         'userId' => $user->user_id,
        //         'firstName' => $user->first_name,
        //         'lastName' => $user->last_name,
        //         'username' => $user->username,
        //         'password' => $user->password,
        //         'profilePiture' => $user->profile_picture,
        //         'teamId' => $user->team_id,
        //         'authority' => $user->authority
        //     ]]);
        //     print_r(session()->get('login')); die();
        //     return redirect()->intended('/ticket');
        // }
    }
}
