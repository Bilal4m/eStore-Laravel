<head>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js	"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css	"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    @include('header')
   
</head>

 
 
<div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
    <div class="text-uppercase">
        <p>Order detail</p>
    </div>
        
 
    <div class="h4">Tuesday, December 08, 2020</div>
    <div class="pt-1">
        @foreach ($orders as $item)
           @if ($loop->first)
        <p>Order #{{$item->tracking_id}} 
           @endif
        @endforeach is currently<b class="text-dark"> processing</b></p>
    </div>
    
    <div class="btn close text-white"> &times; </div>
</div>
<div class="wrapper bg-white">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col"></th>
                    <th scope="col" class="text-right"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> </th>
                    <td class="text-right"><b>
                        {{-- @foreach ($orders as $item)
                        @if ($loop->first)
                        {{$item->sub_total}}
                        @endif --}}
                    {{-- @endforeach --}}
                </b></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-start align-items-center list py-1">
        <div><b>Products</b></div>
        @foreach ($orders as $item)
    
        
        <div class="mx-3">  <img src="{{$item->gallery}}  "  alt="apple" class="rounded-circle" width="30" height="30"> </div>
        <div class="order-item">{{$item->name}} </div> <br>
        {{-- <sub>({{$item->price}}-PKR)</sub> --}}
        @endforeach
    </div>
    {{-- <div class="d-flex justify-content-start align-items-center list my-2 py-1">
        <div><b>4px</b></div>
        <div class="mx-3"> <img src="https://images.unsplash.com/photo-1602081593819-65e7a8cee0dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="apple" class="rounded-circle" width="30" height="30"> </div>
        <div class="order-item">Mango</div>
    </div>
    <div class="d-flex justify-content-start align-items-center list my-2 py-1">
        <div><b>2px</b></div>
        <div class="mx-3"> <img src="https://images.unsplash.com/photo-1584183187885-071d53d42531?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="apple" class="rounded-circle" width="30" height="30"> </div>
        <div class="order-item">Carrot Apple Ginger</div>
    </div>
    <div class="d-flex justify-content-start align-items-center list my-2 py-1">
        <div><b>3px</b></div>
        <div class="mx-3"> <img src="https://images.unsplash.com/photo-1602096934878-5028bf10ca50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="apple" class="rounded-circle" width="30" height="30"> </div>
        <div class="order-item">Pear</div>
    </div> --}}
    <div class="pt-2 border-bottom mb-3"></div>
    <div class="d-flex justify-content-start align-items-center pl-3">
        <div class="text-muted">Payment Method</div>
        <div class="ml-auto"> 
            {{-- <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt="" width="30" height="30"> 
            <label>Mastercard ******5342</label>  --}}
            <label>{{$item->payment_method}}</label> 
        </div>
    </div>
    <div class="d-flex justify-content-start align-items-center py-1 pl-3">
        <div class="text-muted">Shipping</div>
        <div class="ml-auto"> <label>200</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center py-1 pl-3">
        <div class="text-muted">Tax</div>
        <div class="ml-auto"> <label>100</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom">
        <div class="text-muted"> <button class="text-white btn">0% Discount</button> </div>
        <div class="ml-auto price"> 0 </div>
    </div>
    <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
        <div class="text-muted"> Today's Total </div>
        <div class="ml-auto h5"> {{$item->sub_total}} </div>
    </div>
    <div class="row border rounded p-1 my-3">
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Billing Address</b>
                @foreach ($orders as $item)
                <p class="text-justify pt-2"> 
                    @if ($loop->first)
                      {{$item->address}}
                    @endif </p>
                {{-- <p class="text-justify">New York</p> --}}
                @endforeach
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Shipping Address</b>
                @foreach ($orders as $item)
                <p class="text-justify pt-2"> 
                    @if ($loop->first)
                      {{$item->address}}
                    @endif 
                </p>
                {{-- <p class="text-justify">New York</p> --}}
                @endforeach                {{-- <p class="text-justify">New York</p> --}}
            </div>
        </div>
    </div>
    <div class="pl-3 font-weight-bold">Related Subsriptions</div>
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> 
            @foreach ($orders as $item)
            @if ($loop->first)
            <b>#{{$item->tracking_id}}</b>
            @endif 
            @endforeach 
         </div>
        <div>December 08, 2020</div>
        <div>
            @foreach ($orders as $item)
            @if ($loop->first)
            Status: {{$item->payment_status}}
            @endif 
            @endforeach 
        </div>
        <div> Total: <b> 
            @foreach ($orders as $item)
            @if ($loop->first)
           {{$item->sub_total}}
            @endif 
            @endforeach 
        </b> </div>
    </div>
</div>

<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif
}

body {
    background-color: #7C4135
}

#order-heading {
    background-color: #edf4f7;
    position: relative;
    border-top-left-radius: 25px;
    max-width: 800px;
    padding-top: 20px;
    margin: 30px auto 0px
}

#order-heading .text-uppercase {
    font-size: 0.9rem;
    color: #777;
    font-weight: 600
}

#order-heading .h4 {
    font-weight: 600
}

#order-heading .h4+div p {
    font-size: 0.8rem;
    color: #777
}

.close {
    padding: 10px 15px;
    background-color: #777;
    border-radius: 50%;
    position: absolute;
    right: -15px;
    top: -20px
}

.wrapper {
    padding: 0px 50px 50px;
    max-width: 800px;
    margin: 0px auto 40px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px
}

.table th {
    border-top: none
}

.table thead tr.text-uppercase th {
    font-size: 0.8rem;
    padding-left: 0px;
    padding-right: 0px
}

.table tbody tr th,
.table tbody tr td {
    font-size: 0.9rem;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 5px
}

.table-responsive {
    height: 100px
}

.list div b {
    font-size: 0.8rem
}

.list .order-item {
    font-weight: 600;
    color: #6db3ec
}

.list:hover {
    background-color: #f4f4f4;
    cursor: pointer;
    border-radius: 5px
}

label {
    margin-bottom: 0;
    padding: 0;
    font-weight: 900
}

button.btn {
    font-size: 0.9rem;
    background-color: #66cdaa
}

button.btn:hover {
    background-color: #5cb99a
}

.price {
    color: #5cb99a;
    font-weight: 700
}

p.text-justify {
    font-size: 0.9rem;
    margin: 0
}

.row {
    margin: 0px
}

.subscriptions {
    border: 1px solid #ddd;
    border-left: 5px solid #ffa500;
    padding: 10px
}

.subscriptions div {
    font-size: 0.9rem
}

@media(max-width: 425px) {
    .wrapper {
        padding: 20px
    }

    body {
        font-size: 0.85rem
    }

    .subscriptions div {
        padding-left: 5px
    }

    img+label {
        font-size: 0.75rem
    }
}
</style>
