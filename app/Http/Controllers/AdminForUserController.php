<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
class AdminForUserController extends Controller
{
    // users list
    function usersList(){
       $user = User::all();
       return view('admin.users_list',['userList'=> $user]);
    }

    // user manage
    function usersManage(){
        $user = User::all();
        return view('admin.users_manage',['userManage'=> $user]);
     }

     // update user or delet
     function userDelete($id){
        $user = User::find($id);
        $user->delete();
        alert()->warning('Deleted','User Deleted');
        return redirect ('admin/admin');
     }

    

     function fecthUserForUpdate($id)
     {
         $user = User::find($id);
         return view('admin/update_user',['user'=>$user]);
     }
       // this will update the user
       function userDataUpdate(Request $req){
        $user = User::find($req->id);
        $user->user_name = $req->user_name;
        $user->user_email = $req->user_email;
        $user->user_password = Hash::make($req->user_password);
        $user->save();
        alert()->success('Success', 'User updated successfully');
        return redirect('admin/admin');
     
}
}