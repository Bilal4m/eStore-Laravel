<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_status;
use App\Models\Order_approved;
use App\Models\Order_rejected;
use Illuminate\Support\Facades\DB;




class AdminController extends Controller
{
    // admin login
    function adminLogin(Request $request)
    {
        $admin = Admin::where(['admin_email'=> $request->admin_email])->first();
        if(!$admin || !Hash::check($request->admin_password, $admin->admin_password))
        {
            alert()->error('Login failed','email and passwords not matched');
            return redirect('/');        }
        else{
            // $data = $request->input('name');
            $request->session()->put('admin',$admin);
            alert()->success('Login succefully','You logged in E-Store Dashboard');
            return redirect('admin/admin');
        }
    }

   

    // function adminPanel(){
    //     return "admin panel";
    // }
 
    // admin log out
    function adminLogout(){
        if(session()->has('admin'))
        {
            session()->forget('admin');
            alert()->success('Success','You logged out From Dashboard');
            return redirect ('/');
        }
       
        return redirect('/admin_login');
    }

    // if admin is already loged in
    function ifAdminLogin()
    {
        if(session()->has('admin'))
        {
            alert()->info('Info','You already logged in');
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


    // products list by admin
    function productsList(){
        $data = Product::paginate(6);
         return view('admin/products_list', ['products'=>$data]);
    }
   // add products by admin
   function productsAdd(Request $request)
   {
       $product = new Product;
       $product->name = $request->name;
       $product->price = $request->price;
       $product->category = $request->category;
       $product->gallery = $request->gallery;
       $product->description = $request->description;
       $product->save();
       alert()->success('success','New product added successfully');
       return redirect("admin/admin");

   }

    // delete product by admin
    function deleteProduct($id)
    {
     $product = Product::find($id);
     $product->delete();
     alert()->warning('Deleted','Product deleted');
     return redirect ('admin/admin');
    }
    // fetch product data
    function fecthProductForUpdate($id){
        $product = Product::find($id);
           return view('admin/product_update',['products'=>$product]);
    }

    // update the product
    function productDataUpdate(Request $req){
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->gallery = $req->gallery;
        $product->description = $req->description;
        $product->save();
        alert()->success('Success', 'Product updated successfully');
        return redirect('admin/admin');
     
       }


       // view pending orders by admin
       function pendingOrders(){
      $p_orders =DB::table('orders')
                  ->join('products','orders.product_id','products.id')
                //   ->join('users','orders.user_id','users.id')
                //   ->where('orders.user_id', 'users.id')
                  ->select('orders.*','products.*')
                  ->get();
     return view('admin/pending_orders',['orders'=>$p_orders ]);
    }

    function approvedOrders(Request $request){
        $status = new Order_status;
        $status->status = $request->status;
        $status->message = $request->message;
        $status->customer_fname = $request->customer_fname;
        $status->customer_lname = $request->customer_lname;
        $status->customer_phone = $request->customer_phone;
        $status->customer_tid = $request->customer_tid;
        $status->customer_pid = $request->customer_pid;
        $status->customer_uid = $request->customer_uid;
        $status->customer_gallery = $request->customer_gallery;
        $status->save();
        alert()->success('Success', 'Order Accepted and message sent to user');
        return redirect('admin/admin');
    }

    function rejectedOrders(Request $request){
       
        $status = new Order_status;
        $status->status = $request->status;
        $status->message = $request->message;
        $status->customer_fname = $request->customer_fname;
        $status->customer_lname = $request->customer_lname;
        $status->customer_phone = $request->customer_phone;
        $status->customer_tid = $request->customer_tid;
        $status->customer_pid = $request->customer_pid;
        $status->customer_uid = $request->customer_uid;
        $status->customer_gallery = $request->customer_gallery;
        $status->save();
        alert()->warning('Alert', 'Order rejected and message sent to user');
        Order_status::where('status','accepted')->delete();
        return redirect('admin/admin');
    }
  
    function viewApprovedOrders(){
        // $a_orders =  Order_approved::all();
        
        $a_orders = DB::table('order_status')
        ->where('status','accepted')
        ->get();
        return view('admin/view_approved_orders',['orders'=>$a_orders ]);
    }

    function ViewRejectedOrders(){
        $r_orders =  DB::table('order_status')
        
        ->where('status','rejected')
        ->get();
         return view('admin/view_rejected_orders',['orders'=>$r_orders ]);       
    }
    
}

