@extends('master')
@section('content')

<?php
use App\Http\Controllers\ProductController;


$orderStatus=0;
if(Session::has('user')){
$orderStatus = ProductController::myOrdersStatus();
}
?>

<h1>Product Details</h1>
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="{{$product['gallery']}}" /></div>
                      <div class="tab-pane" id="pic-2"><img src="{{$product['gallery']}}" /></div>
                      <div class="tab-pane" id="pic-3"><img src="{{$product['gallery']}}" /></div>
                      <div class="tab-pane" id="pic-4"><img src="{{$product['gallery']}}" /></div>
                      <div class="tab-pane" id="pic-5"><img src="{{$product['gallery']}}" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{$product['gallery']}}" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="{{$product['gallery']}}" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="{{$product['gallery']}}" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="{{$product['gallery']}}" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="{{$product['gallery']}}" /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{$product['name']}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                    <h5 class="price">current price: <span>PKR:{{$product['price']}}</span></h5>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>
                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                        <span class="color green"></span>
                        <span class="color blue"></span>
                    </h5>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <div class="input-group w-auto justify-content-end align-items-center">
                            <h5 class="colors">Qty:
                            {{-- <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 ">
                            <input type="number" step="1" max="10" value="1" name="product_qty" class="quantity-field border-0 text-center w-25">
                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm "> --}}
                            <input type="button"  value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                            <input type="number" step="1" max="10" value="1" name="product_qty" class="quantity-field border-0 text-center w-25">
                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                         </div>
                        </h5>
                    <div class="action">
                        
                            <input type="hidden" name="product_id" value={{$product['id']}}>
                            <input type="hidden" name="product_price" value={{$product['price']}}>
                            <input type="hidden" name="product_name" value={{$product['name']}}>
                            @if (Session::has('user')) 
                            <input type="hidden" name="user_name" value= {{session('user')['user_name']}}>
                            @else
                            @endif

                            {{-- <input type="hidden" name="product_qty" value={{$product['qty']}}> --}}

                            @if($orderStatus<1 )
                            <button class="add-to-cart btn btn-default" type="button submit">add to cart</button>
                            @else
                            <a class="add-to-cart btn btn-default" href="/statusPending">add To cart</a>
            
                            @endif

                       
                        <button class="add-to-buy btn btn-default" type="button">buy now</button>
                        <a href="/" target="_blank"> <button class="add-to-back btn btn-default" type="button">  products</button></a>
                        {{-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> --}}
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<style>
    
        a{
            text-decoration: none;
            color: white;
        }
        .icon-shape {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    vertical-align: middle;
    
}

.icon-sm {
    width: 2rem;
    height: 2rem;
    background-color:#85AD00;
    
}
</style>
<script>
    function incrementValue(e) {
          e.preventDefault();
          var fieldName = $(e.target).data('field');
          var parent = $(e.target).closest('div');
          var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
          if (!isNaN(currentVal)) {
              parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
          } else {
              parent.find('input[name=' + fieldName + ']').val(0);
          }
      }
  
      function decrementValue(e) {
          e.preventDefault();
          var fieldName = $(e.target).data('field');
          var parent = $(e.target).closest('div');
          var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
          if (!isNaN(currentVal) && currentVal > 0) {
              parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
          } else {
              parent.find('input[name=' + fieldName + ']').val(0);
          }
      }
  
      $('.input-group').on('click', '.button-plus', function(e) {
          incrementValue(e);
      });
  
      $('.input-group').on('click', '.button-minus', function(e) {
          decrementValue(e);
      });
  </script>
@endsection