@extends('master')
@section('content')

<div class="container mt-5 mb-5">
  <div class="d-flex justify-content-center row">
      <div class="col-md-8">
          <div class="p-2">
              <h4>Shopping cart</h4>
              <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
          </div>
          @foreach ($products as $item)
              
         
          <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
              <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="70"></div>
              <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$item->name}}</span>
                  <div class="d-flex flex-row product-desc">
                      <div class="size mr-1"><span class="text-grey">Description:</span><span class="font-weight-bold">&nbsp;{{$item->description}}</span></div>
                      <div class="color">
                        {{-- <span class="text-grey">Category:</span><span class="font-weight-bold">&nbsp;{{$item->category}}</span> --}}
                      </div>
                  </div>
              </div>
              <div class="d-flex flex-row align-items-center qty">
                {{-- <i class="fa fa-minus text-danger"></i>
                  <h5 class="text-grey mt-1 mr-1 ml-1">{{$item->product_qty}}</h5>
                  <i class="fa fa-plus text-success"></i> --}}
                  <div class="input-group w-auto justify-content-end align-items-center">
                    {{-- <input type="button" onclick="decreaseQuantity({{$item->product_id}})" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                    <input type="button"onclick="decreaseQuantity({{$item->product_id}})" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity"> --}}
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
            <button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button>
          </div>
        </form>
          <?php
           $sum =0;
           foreach ($products as $key => $item) {
            $sum += $item->price * $item->product_qty ; 
           }
          ?>
          <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
            <span class="font-weight-bold form-control border-0 gift-card">Grand Total : {{$sum }}</span>
          </div>
          <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
            
            <button class="btn btn-warning btn-block btn-lg ml-2 pay-button btn btn-default" type=" submit">
              <a href="/buy_now">Proceed to Pay</a></button>
          
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
  font-family: 'Manrope', sans-serif;
  background:#eee;
}

.btn-outline-warning:hover{
 background-color: #fd6d7c;
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
  background-color: #fb8691;
  border: none;
}

.pay-button:hover {
  color: #fb8691;
  background-color: #fd6d7c;
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
a  {
  text-decoration: none;
  color: #FFFFFF;
  
}
a:hover {
  color: #fff;
  text-decoration: none;
}

</style>


@endsection