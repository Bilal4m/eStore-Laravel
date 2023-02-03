@extends('master')
@section('content')

<div class="container mt-5 mb-5">
  <div class="d-flex justify-content-center row">
      <div class="col-md-8">
          <div class="p-2">
              <h4 style="color:#00cc90; font-weight:bold">Shopping cart</h4>
              <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort By:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
          </div>
          @foreach ($products as $item)
              
         
          <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
              <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="70"></div>
              <div class="d-flex flex-column align-items-center product-details"><span style="color:#00cc90" class="font-weight-bold">{{$item->name}}</span>
                  <div class="d-flex flex-row product-desc">
                      <div class="size mr-1"><span class="text-grey">Description:</span><span class="font-weight-bold">&nbsp;{{$item->description}}</span></div>
                      <div class="color">
                        {{-- <span class="text-grey">Category:</span><span class="font-weight-bold">&nbsp;{{$item->category}}</span> --}}
                      </div>
                  </div>
              </div>
             
              <div>
                
                  <h5 class="text-grey">{{$item->price * $item->product_qty}}</h5>
                
              </div>
              <div class="d-flex align-items-center">
               <a href="/remove_cart/{{$item->cart_id}}"> <i class="fa fa-trash mb-1 text-danger"></i> </a>
              </div>
              
          </div>
          @endforeach
          <form action="discount-price" method="post">
            @csrf
          <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
            <input type="text" class="form-control border-0 gift-card" name="discount_price" placeholder="discount code/gift card" >
            <button class="btn btn-outline-success btn-sm ml-2" type="button">Apply</button>
          </div>
        </form>
          <?php
           $sum =0;
           foreach ($products as $key => $item) {
            $sum += $item->price * $item->product_qty ; 
           }
          ?>
          <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
            <span style="color:#00cc90;" class="font-weight-bold form-control border-0 gift-card">Grand Total : {{$sum }}</span> 
          </div>
          <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
            
            <button class="btn btn-warning btn-block btn-lg ml-2 pay-button btn btn-default" type=" submit">
              <a class="pay" href="/buy_now">Proceed to Pay</a></button>
          
            {{-- <button class="add-to-cart btn btn-default" type="button submit">add to cart</button> --}}

          </div>
          
          
          
          {{-- <div class="card-footer">
            <h5>Total Price:{{$item->price * $item->product_qty }}</h5>
            <h5>Total Price:{{$sum }}</h5>
            
          </div> --}}
      </div>
  </div>
</div>


<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

body {

  background:#f8f9fa;
}
input[type=button]{
  background-color: #00cc90;
}
.btn-outline-success:hover{
 background-color: #00cc90;
 border: none;
 color: white;
}

.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.pay-button {
  color: #fff;
  background-color: #00cc90;
  border: none;
}

.pay-button:hover {
  color: #00cc90;
  background-color: #72b39f;
}

.pay-button:focus {
  color: #fff;
  box-shadow: none;
}

.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}
.pay {
  text-decoration: none;
  color: #FFFFFF;
  
}
.pay:hover {
  text-decoration: none;
  color: #FFFFFF;
  
}
</style>


@endsection