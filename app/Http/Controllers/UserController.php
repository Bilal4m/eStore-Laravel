<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Hash;

class UserController extends Controller
{
    // register user
    function register(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required|email',
            'user_password'=>'required'
        ]);
        $user = new User;
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_password = Hash::make($request->user_password);
        $user->save();
        return redirect('/login');
    }


    // login user
    function login(Request $request){
        $user = User::where(['user_email'=> $request->user_email])->first();
        if(!$user || !Hash::check($request->user_password, $user->user_password))
        {
            alert()->error('Login failed','email and passwords not matched');
            return redirect('/login');
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
        return redirect('/');
    }
    return view('login');
    }

    function userLogout()
    {
        if(session()->has('user'))
        {
            session()->forget('user');
            return redirect('/');
        }
        return redirect('/login');
    }

}
