<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $userId = session()->get('user')['id'];
        $orders = DB::table('orders')
              ->join('products','orders.product_id','products.id')
              ->where('orders.user_id', $userId)
              ->get();
           
        
        $pdf = PDF::loadView('generate-pdf',['orders'=>$orders]);
     
        return $pdf->download('user.pdf');
    }
}
