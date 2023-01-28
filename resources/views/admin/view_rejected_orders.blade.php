@include('admin.admin_master')

@include('admin.admin_master')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
             
            </div>
        </div>
        <div class="row">
            <h2>Rejected Orders</h2>
            @foreach ($orders as $item)
            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    <div><img src="{{$item->customer_gallery}}" alt=""></div>
                    <div class="text-center p-4">
                        <span class="excerpt d-block"> {{$item->customer_fname}} {{$item->customer_lname}}</span>
                        <span class="price"><sup>PKR</sup> <span class="number">{{$item->message}}</span> <sub>/PKR</sub></span>
                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Tracking ID:  #{{$item->customer_tid}}</li>
                            <li><span class="fa fa-check mr-2"></span>Phone: {{$item->customer_phone}}</li>
                            <li><span class="fa fa-check mr-2"></span>Status:  {{$item->status}}</li>
                            {{-- <li><span class="fa fa-check mr-2"></span>Address:{{$item->address}}</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
           
           
        </div>
        @endforeach
    </div>
</section>


<style>
    body{margin-top:20px;}
.block-7 {
    border-radius: 4px;
    margin-bottom: 30px;
    padding: 0;
    overflow: hidden;
    background: #fff;
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
@media (max-width: 991.98px) {
    .block-7 {
        margin-top: 30px;
    }
}
.block-7 .img {
    height: 250px;
}
.block-7 .heading-2 {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}
.block-7 .price {
    margin: 0;
    padding: 0;
    display: block;
}
.block-7 .price sup {
    font-size: 24px;
    top: -1em;
    color: #b3b3b3;
}
.block-7 .price .number {
    font-size: 60px;
    font-weight: 600;
    color: #000000;
}
.block-7 .excerpt {
    margin-bottom: 0px;
    color: #00bd56;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
}
.block-7 .label2 {
    text-transform: uppercase;
}
.block-7 .pricing-text,
.block-7 .pricing-text li {
    padding: 0;
    margin: 0;
}
.block-7 .pricing-text li {
    list-style: none;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #000000;
}
.block-7 .pricing-text li:nth-child(odd) {
    background: rgba(0, 0, 0, 0.05);
}
.block-7 .pricing-text li span.fa {
    color: #207dff;
}
.block-7 .btn-primary {
    color: #fff;
    text-transform: uppercase;
    font-style: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    width: 60%;
    margin: 0 auto;
}
.block-7 .btn-primary:hover,
.block-7 .btn-primary:focus {
    background: #00bd56 !important;
    color: #fff;
}
.block-7:hover,
.block-7:focus {
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
}
</style>
