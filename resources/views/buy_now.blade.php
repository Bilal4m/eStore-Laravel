
@extends('master')
@section('content')

<?php
$sum =0;
$dc=0;
$tax=0;
$dis=0;
foreach ($total as $key => $item) {
 $sum += $item->price * $item->product_qty ; 
}
if( $sum >=2000){
  $dc = $sum*2/100;
}else{
  $dc = $sum*1/100;
}
if( $sum >=2000){
  $tax = $sum*1.5/100;
}else{
  $tax = $sum*0.5/100;
}
if( $sum >=2000){
  $dis = $sum*2.5/100;
}else{
  $dis = $sum*0/100;
}

?> 
<body class="bg-light" cz-shortcut-listen="true">

  <div class="container">
    <div class="py-5 text-center">
    </div>

    <div class="row">
      <div style="border-radius: 10px" class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span style="color:#00cc90; font-weight:bold" class="">Your cart</span>
          
          {{-- <span class="badge badge-secondary badge-pill">Cart</span> --}}
        </h4>
        <ul class="list-group mb-3">
          @foreach ($total as $item)
          @if ($loop->first)
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 style="color:#00cbff; font-weight:bold" class="my-0">Total Amount</h6>
              {{-- <small class="text-muted">Brief description</small> --}}
            </div>
            <span style="color:#00cbff; font-weight:bold" class="">{{$sum}}</span>
            @endif
            @endforeach
          </li>
          <li  class="list-group-item d-flex justify-content-between lh-condensed" >
            <div >
              <h6 style="color:#00cbff; font-weight:bold" class="my-0">Tax Amount</h6>
              {{-- <small class="text-muted">Brief description</small> --}}
            </div>
            <span style="color:#00cbff; font-weight:bold"  class="">{{$tax}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 style="color:#00cbff; font-weight:bold" class="my-0">Delivery Charges</h6>
              {{-- <small class="text-muted">Brief description</small> --}}
            </div>
            <span style="color:#00cbff; font-weight:bold"  class="">{{$dc}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 style="color:red; font-weight:bold" class="my-0">Discount</h6>
            </div>
            <span style="color:red; font-weight:bold" class="">-{{$dis}}</span>
          </li>
       
        
         
          <li class="list-group-item d-flex justify-content-between">
            <span style="color:#00cc90; font-weight:bold">Sub Total (PKR)</span>
            @foreach ($total as $item)
            @if ($loop->first)
            <strong style="color:#00cc90; font-weight:bold">{{$sum + $dc + $tax -$dis }}</strong>
            @endif
            @endforeach
          </li>
        </ul>
      </div>
      
      <div class="col-md-8 order-md-1">
        <h4 style="color:#00cc90; font-weight:bold" class="mb-3">Billing address</h4>
        <form class="needs-validation"  action="orderplace" method="POST" novalidate="">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" name="first_name" required="" autocomplete="off">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" name="last_name" required="" autocomplete="off">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" autocomplete="off">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required="" autocomplete="off">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" autocomplete="off">
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" name="country" id="country" required="">
                <option value="">Choose...</option>
                <option>Pakistan</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state" required="" name="state">
                <option value="">Choose...</option>
                <option>Punjab</option>
                <option>Sindh</option>
                <option>KPK</option>
                <option>Balochistan</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Phone</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="" name="phone" autocomplete="off">
              <div class="invalid-feedback">
                Phone Number required.
              </div>
            </div>
          </div>


          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div>
          <hr class="mb-4">

          <h4 style="color:#00cc90; font-weight:bold" class="mb-3">Payment</h4>
          <div class="row">
            <div class="col-md-6 mb-3">
              {{-- <label for="cc-number">Sub Total</label> --}}
              <input type="hidden" class="form-control" name="sub_total" id="cc-number" value="{{$sum }}" readonly>
              <input type="hidden" class="form-control" name="d_charges" id="cc-number" value="{{ $dc}}" readonly>
              <input type="hidden" class="form-control" name="tax_amt" id="cc-number" value="{{ $tax}}" readonly>
              <input type="hidden" class="form-control" name="dis_amt" id="cc-number" value="{{ $dis}}" readonly>
              @foreach ($total as $item)
              <input type="hidden" class="form-control" name="product_name" id="cc-number" value="{{$item->name}}" readonly>
              @endforeach
              {{-- <input type="hidden" class="form-control" name="total_qty_product" id="cc-number" value="{{$item->product_qty}}" readonly> --}}
              
            </div>
          </div>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input  id="credit" name="payment" value="credit_card" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="payment" value="cash" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="debit_card">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="payment" value="cash" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="paypal">COD</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="" autocomplete="off">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="" autocomplete="off">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          <hr class="mb-4">
          {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button> --}}
          <button  class="btn btn-warning btn-block btn-lg ml-2 pay-button btn btn-default continueBtn" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      
    </footer>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>


</body>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');
  h2 {
    font-size: 40px;
    background: linear-gradient(to left, #660066 0%, #ff3300 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.continueBtn{
  background-color: #00cc90;
  border: none;
  color: #fff;
}

.continueBtn:hover{
  background-color: #85d3bc;
  border: none;
  color: #fff;
}
</style>
@endsection