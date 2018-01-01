<?php

namespace App\Http\Controllers\Auth;

use App\Users;
use App\Http\Controllers\Controller;

use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;

class SignupController extends Controller
{
    //Show signup view
    public function register(){
        return view('register');
    }
    
    // Submit signup    
    public function requestRegister(Request $request){
            
    // Validator form
        $rule = [
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'password'=>'required'
        ];

        $message = [
            'firstname.required'=>"Enter your first name",
            'lastname.required'=>"Enter your last name",
            'username.required'=>"Enter your username",
            'password.required'=>"Enter your password"
        ];

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $username=$request->input('username');
        $password=$request->input('password');

        $user = Users::where('username',$username)->first();

        // Check username available

        if(isset($user)){
            $errors = new MessageBag(['errorusername' => 'Username is available']);
            return redirect()->back()->withInput()->withErrors($errors);
        }

        // Creat acount
        $newUser = new Users();
            $newUser->first_name = $firstname;
            $newUser->last_name = $lastname;
            $newUser->username = $username;
            $newUser->password = bcrypt($password);
            $newUser->profile_picture='public/image/profile.jpg';
            $newUser->team_id = '0';
            $newUser->authority = '0';
            $newUser->remember_token = '0';
        $newUser->save();
        return redirect()->intended('/');

    }


    public function update(){
        //update
            $user = Users::where('user_id',2)->first();
                $user->first_name = 'Horus';
            $user->save();
    }
}
