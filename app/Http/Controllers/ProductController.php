<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
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

    function cartList(){
       
        if (session()->has('user')){
        $userId = session()->get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cart_list',['products'=>$products]);
    }
  else{
    alert()->warning('Alert','Please login first');
            return redirect('/login');
}
    }

    function cartFull(){
        $products = Cart::get('id');
        $userId = DB::table('users')
         ->join('products','users.id', '=', 'products.id')
        ->where('products.id',$products)
        ->select('users.user_name')
        ->get();
         return view('full_cart',['products'=>$userId]);
 
    }
    function emptyCart(){
        alert()->warning('ALERT','Cart is empty please order some products');
        return redirect('/');
    }
    function noOrder(){
        alert()->warning('ALERT','You have no orders');
        return redirect('/');
    }

    function removeCart($id){
       $cart = Cart::find($id);
       $cart->delete();
       alert()->warning('ALERT','Item removed from cart');
       return redirect('/cart_list');
    }

    //
    function buyNow(){
           
      
         $userId = session()->get('user')['id'];
           $total = DB::table('cart')
                  ->join('products','cart.product_id','products.id')
                  ->where('cart.user_id', $userId)
                  ->sum('products.price');

                
        return view('buy_now',['total'=>$total]);
}

function orderPlace(Request $request){
    $userId = session()->get('user')['id'];
    $allCart = Cart::where('user_id',$userId)->get();
    foreach ($allCart as $cart)
    {
        $order = new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->address = $request->address;
        $order->status = "pending";
        $order->payment_method = $request->payment;
        $order->payment_status = "pending";
        $order->save();
        alert()->success('Success','Order placed successfully'); 
        
    }
    Cart::where('user_id',$userId)->delete();
    return redirect('/');
   
}
function myOrders(){
    $userId = session()->get('user')['id'];
    $orders = DB::table('orders')
           ->join('products','orders.product_id','products.id')
           ->where('orders.user_id', $userId)
           ->get();

 return view('myorders',['orders'=>$orders]);
}

    }
