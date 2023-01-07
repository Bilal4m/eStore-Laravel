<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class ProductController extends Controller
{
    //
     // product 
     public function index()
     {
         $data = Product::all();
         return view('/product', ['products'=>$data]);
     }
 
     // get product details
     function detail($id)
     {
         $data = Product::find($id);
         return view("product_details" , ['product'=>$data]);
     }
 
     //search product
     function search(Request $request)
     {
         $data = Product::where('name', 'like' , '%'.$request->input('query').'%')->get();       
         return view('product_search', ['products'=>$data]);       
     }

     // add to cart
     function addToCart(Request $request){
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            alert()->success('Success','Item added to cart');
            return redirect('/');
        }
        else{
            alert()->warning('Alert','Please login first');
            return redirect('/login');
        }
     }

      // this will get user id who is login then return cart item total of that user
     static function cartItem(){
        $userId = session()->get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
 
}
