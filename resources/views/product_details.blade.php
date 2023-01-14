@extends('master')
@section('content')


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
                    <div class="action">
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value={{$product['id']}}>
                            <input type="hidden" name="quantity" value={{$product['quantity']}}>
                            <button class="add-to-cart btn btn-default" type="button submit">add to cart</button>

                       
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
        
</style>


@endsection