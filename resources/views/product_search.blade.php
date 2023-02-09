@extends('master')
@section('content')

<div class="container">
    <br>
    <h4 style="color: #00cc90; font-weight:bold">Searched Product  </h2>
	<br>
	<div class="row" id="ads">
    <!-- Category Card -->

    @foreach ($products as $item)

    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <a href="detail/{{$item['id']}}" target="_blank">
                <span class="card-notify-badge">{{$item['name']}}</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid" src="{{$item['gallery']}}" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                
                <span class="card-detail-badge">{{$item['category']}}</span>
                <span class="card-detail-badge">{{$item['price']}}PKR</span> 
                <span class="card-detail-badge">{{$item['description']}}</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>{{$item['name']}}</h5>
                </div>
                <a class="ad-btn" href="#">Buy Now</a>
            </div> 
        </a>
        </div>  <br><br>
    </div> 
    @endforeach 
  </div>
  </div>


  

@endsection