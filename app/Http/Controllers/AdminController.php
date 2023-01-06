<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\Admin;
use App\Models\Product;

class AdminController extends Controller
{
    // admin login
    function adminLogin(Request $request)
    {
        $admin = Admin::where(['admin_email'=> $request->admin_email])->first();
        if(!$admin || !Hash::check($request->admin_password, $admin->admin_password))
        {
            alert()->error('Login failed','email and passwords not matched');
            return redirect('/admin_login');        }
        else{
            // $data = $request->input('name');
            $request->session()->put('admin',$admin);
            return redirect('admin/admin');
        }
    }

    // add products by admin
    function add_products(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->gallery = $request->gallery;
        $product->description = $request->description;
        $product->save();
        return redirect("add_products");

    }

    // function adminPanel(){
    //     return "admin panel";
    // }
 
    // admin log out
    function adminLogout(){
        if(session()->has('admin'))
        {
            session()->forget('admin');
            return redirect ('/');
        }
        return redirect('/admin_login');
    }

    // if admin is already loged in
    function ifAdminLogin()
    {
        if(session()->has('admin'))
        {
            return redirect('admin/admin');
        }
        return view('admin_login');
    }



    // admin profile section
    function adminProfile()
    {
        $admin = Admin::get();
        return view('admin/admin_profile',['adminprofile'=> $admin]);
    }

    // view single admin who is log in
    function adminSettings()
    {
        $admin = Admin::get();
        return view('admin/admin_settings',['adminprofile'=> $admin]);
    }
  
}
