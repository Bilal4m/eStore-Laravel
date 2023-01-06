<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
 
}
