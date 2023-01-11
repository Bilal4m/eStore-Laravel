@extends('master')
@section('content')




<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mt-1">
                <h4 class="heading-section">
                    {{ session('user')['user_name'] }}'s Orders</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-hover">
                        <tbody>

                            <tr>

                                <th>Total Amount</th>
                                <th>{{ $total }}</th>

                            </tr>

                            <tr>

                                <th>Tax Amount</th>
                                <th>100</th>

                            </tr>

                            <tr>

                                <th>Delivery Charges</th>
                                <th>200</th>

                            </tr>

                            <tr>

                                <th>Net Amount </th>
                                <th>{{$total + 100 + 200}}</th>

                            </tr>
                            {{--                      
                        <tr>
@foreach($cart as $item)
                           
                           
                           
                            <td>{{ $item->userName }}</td>
                            <td>{{ $item->productName }}</td>
                            <td>{{ $item->productPrice }}</td>
                            <td>100</td>



                            </tr>
                            @endforeach--}}




                        </tbody>
                    </table>
                    <h4 class="heading-section">
                        Delivery Details</h4>
                        <form action="orderplace" method="POST">
                            @csrf
                            <div class="form-group">
                              <textarea placeholder="enter address" name="address" cols="25" rows="5"> enter address </textarea> 
                            </div>
                            <div class="form-group">
                                <h3 class="heading-section">Payment Method</h3>
                              <p>  
                                <input type="radio" value="cash"  name="payment"> <span>Online Payment</span>
                              </p> 
                              <p>  
                                <input type="radio" value="cash"  name="payment"> <span>Eassypaisa</span>
                              </p>
                              <p>  
                                <input type="radio" value="cash"  name="payment"> <span>COD</span>
                              </p>
                              
                            </div>
                          
                            <button type="submit" class="btn btn-default">Order Now</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection



<style>

</style>
