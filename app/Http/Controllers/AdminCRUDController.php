<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\Admin;
use App\Models\Product;


class AdminCRUDController extends Controller
{
    //
     // add new admin
     function add_admin(Request $request){
        $admin = new Admin;
        $admin->admin_name = $request->admin_name;
        $admin->admin_email = $request->admin_email;
        $admin->admin_password = Hash::make($request->admin_password);
        $admin->save();
        alert()->success('Success', 'Admin added successfully');
        return redirect('/admin/admin');
      }
  
       // fecthAdminForUpdate
       function fecthAdminForUpdate($id)
       {
           $admin = Admin::find($id);
           return view('admin/update_admin',['admin'=>$admin]);
       }
       // this will update the admin
       function adminDataUpdate(Request $req){
        $admin = Admin::find($req->id);
        $admin->admin_name = $req->admin_name;
        $admin->admin_email = $req->admin_email;
        $admin->admin_password = Hash::make($req->admin_password);
        $admin->save();
        alert()->success('Success', 'Admin updated successfully');
        return redirect('admin/admin');
     
       }

       // delete the admin
       function adminDelete($id)
       {
        $admin = Admin::find($id);
        $admin->delete();
        alert()->warning('Deleted','Admin Deleted');
        return redirect ('admin/admin');
       }

       // list all admin
       function adminList()
       {
        $admin = Admin::all();
        return view('admin/admin_list', ['adminList'=>$admin]);
       }
}
