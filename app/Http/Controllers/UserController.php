<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // register user
    function register(Request $request){
        $userCheck = User::where('user_email',$request->user_email)->first();

        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required|email',
            'user_password'=>'required'
        ]);
       if($userCheck === null){
        $user = new User;
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_password = Hash::make($request->user_password);
        $user->save();
        alert()->success('Success','User registered successfully');
        return redirect('/');
  
       }else{

             
        alert()->error('Registration failed','email already registered');
        return redirect('/');
       
        
      

        
       
    }
}


    // login user
    function login(Request $request){
        $user = User::where(['user_email'=> $request->user_email])->first();
        if(!$user || !Hash::check($request->user_password, $user->user_password))
        {
            alert()->error('Login failed','email and passwords not matched');
            return redirect('/');
        }
        else{
            
            // $data = $request->input('user_name');
            $request->session()->put('user',$user);
            alert()->success('Login succefully','You logged in');

            return redirect('/');
        }
    }

    function ifUserLogin(){
        if(session()->has('user'))
    {
        alert()->info('Info','You already logged in');
        return redirect('/');
    }
    return view('login');
    }

    function userLogout()
    {
        if(session()->has('user'))
        {
            session()->forget('user');
            alert()->success('Success','You logged out');

            return redirect('/');
        }
        return redirect('/login');
    }

   

 

}
