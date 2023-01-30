@extends('master')
@section('content')

<div class="container">
    <div class="row">
        @foreach ($check_status as $item)
            
       
        <div class="col-6 col-lg-6">
            <div class="card">
                <img src="{{$item->customer_gallery}}" alt="" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title">Dear,{{$item->customer_fname}} {{$item->customer_lname}} </h2>
                <p class="card-text">Your Order with ID # <strong>{{$item->customer_tid}}</strong> is {{$item->status}}..!</p>
                <p class="card-text">  <strong> {{$item->message}}</strong></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br><br><br>
<br><br><br>

@endsection