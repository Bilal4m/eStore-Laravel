@extends('master')
@section('content')


<div class="my-div">
    <div id="body">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                <div class="portlet solid custom-overlay-design text-center">
                    <div class="portlet-body">
                        <img src="https://phonecase.betalogics.com/assets/sites/phonecase/phonecase_logo.png"
                            style="max-width:250px; max-height:80px; "></div>
                </div>
            </div>


            {{-- <tr >
                
                <td class="table-primary"></td> 
                <td class="table-primary"></td> 
                <td class="table-secondary"></td> 
                <td class="table-success">{{$item->description}}</td> 
                <td class="table-info">{{$item->status }}</td> 
                <td class="table-warning"></td> 
                <td class="table-danger"></td> 
                <td class="table-light"></td> 
                <td class="table-light"></td> 
            </tr> --}}
  


        </div>
        <div class="clear" style="height:5px;"></div>
        <div class="row equal-height">
          @foreach ($orders as $item)

            <div class="col-md-4 col-sm-6 col-xs-6 col-md-offset-3" style="padding-right:5px; zoom:80%;">
                <div class="portlet solid custom-overlay-design">
                    <div class="portlet-body">
                        {{-- Bilal Rasheed<br>0315-6438000<br>St#45 Link, Wahdat Colony, Gujranwala<br>Gujranwala<br>  --}}
                        {{$item->address }}
                      </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6" style="padding-left:5px; zoom:80%;">
                <div class="portlet solid custom-overlay-design">
                    <div class="portlet-body">
                        {{-- Order Date: 12-01-2023<br>Order #: <b>223399</b><br>Payment Method: <b>COD</b><br> --}}
                        {{$item->updated_at}}<br>Order #: <b>{{$item->id}}</b><br>Payment Method: <b>{{$item->payment_method }}</b><br>
                        <a href="javascript:;" class="btn btn-danger btn-xs">STATUS: <b>{{$item->payment_status }}</b></a> </div>
                </div>
            </div>

        </div>
        <div class="clear" style="height:10px;"></div>

        <div class="row">
            <div class="col-md-6 col-xs-12 col-md-offset-3">
                <div class="portlet solid custom-overlay-design">

                    <div class="portlet-title">
                        <div class="caption bold uppercase">
                            <i class="fa fa-truck"></i> ORDER TRACKING (DETAILED)
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="uppercase courier-table">
                            <tbody>
                                <tr class="text-center">
                                    <th class="text-center"><i class="fa fa-truck"></i></th>
                                    <th class="text-center">Tracking ID</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                <tr class="text-center">
                                    <td>Leopard</td>
                                    <td>#ES-{{$item->tracking_id}}</td>
                                    <td>dispatched</td>
                                </tr>
                            </tbody>
                        </table><b>13-01-23 11:33:00 AM: Pending (FORWARDED TO DESTINATION)</b><br>13-01-23 09:54:43 AM:
                        Arrived at Station in GUJAR KHAN<br>12-01-23 11:12:29 PM: Dispatched to GUJRANWALA<br>12-01-23
                        09:50:29 PM: Shipment picked in ISLAMABAD<br><br><b>Last Tracking Time: 13-01-23 03:12:23 PM</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear" style="height:5px;"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                <div class="portlet solid custom-overlay-design">
                    <div class="portlet-body">
                        <table class="table" style="font-size:12px; zoom:80%;">
                            <thead>
                                <tr>
                                    <th class="text-left" colspan="2"> Products </th>
                                    <th style="width:30px;"> Qty </th>
                                    <th style="text-align: right !important; width:60px;"> {{$item->price}} </th>
                                    <th style="width:60px;"> {{$item->price}} </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center; width:70px;">
                                        <img src="{{$item->gallery}}"
                                            style="max-width: 70px; max-height: 80px; margin:0px auto;">
                                    </td>
                                    <td>
                                      {{$item->name}}
                                        iPhone All Models Series MagSafe supported Shock Proof Ultra Clear Case - iPhone
                                        12/12 Pro (6.1)</td>
                                    <td class="text-center bold ">1</td>
                                    <td class="text-right">{{$item->price}}</td>
                                    <td class="text-right bold">{{$item->price}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear" style="height:5px;"></div>
        <div class="row financials ">
            <div class="col-md-6 col-xs-12 col-md-offset-3" style="/*padding-left:5px;*/">
                <div class="portlet solid custom-overlay-design">
                    <div class="portlet-body">
                        <table class="table bottom-border secondary-table" style="font-size:11px !important;">
                            <tbody>
                                <tr>
                                    <td style="padding:3px 0px;">Sub Total</td>
                                    <td style="padding:3px 0px;" class="text-right">{{$item->price}}</td>
                                </tr>
                                <tr>
                                    <td style="padding:3px 0px;">Delivery Charges</td>
                                    <td style="padding:3px 0px;" class="text-right">Free Delivery</td>
                                </tr>
                                <tr>
                                    <td style="padding:3px 0px;">Total Amount:</td>
                                    <td class="text-right bold" style="width:100px; padding:3px 0px;">{{$item->price}}</td>
                                </tr>
                            </tbody>
                                      
            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
 
    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    user agent stylesheet div {
        display: block;
    }

    body {
        padding: 5px 10px !important;
        font-size: 12px !important;
        /* background-image: url(https://ecom.armapparels.com.pk/assets/pages/img/bg/bg_7.jpg); */
        background-repeat: no-repeat !important;
        background-size: auto !important;
    }

    body {
        color: #333;
        padding: 0 !important;
        margin: 0 !important;
        direction: "ltr";
        font-size: 14px;

    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Open Sans", sans-serif;
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857;
        color: #333;
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: transparent;
    }

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .custom-overlay-design .portlet-body,
    .custom-overlay-design .caption {
        color: #000 !important;
    }

    .portlet>.portlet-body {
        clear: both;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        -ms-border-radius: 0 0 4px 4px;
        -o-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .portlet-body {
        padding-top: 5px !important;
        padding: 5px 0px 0px;
    }

    .col-xs-12 {
        width: 100%;
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .portlet {
        margin-top: 0;
        margin-bottom: 25px;
        padding: 0;
        border-radius: 4px;
    }

    element.style {
        padding-right: 5px;
        zoom: 80%;
    }

    .equal-height,
    .equal-height .col-sm-6 {
        display: flex;
    }

    .col-xs-6 {
        width: 50%;
    }

    .custom-overlay-design .courier-table tr,
    .custom-overlay-design .courier-table th,
    .custom-overlay-design .courier-table td {
        padding: 5px !important;
        margin: 10px;
        color: #fff;
        background-color: #5c5c5c;
        border-radius: 10px;
    }

    .text-center {
        text-align: center;
    }

    caption,
    th {
        text-align: left;
    }

    td,
    th {
        padding: 0;
    }

    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    user agent stylesheet th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: -internal-center;
    }

    .uppercase {
        text-transform: uppercase !important;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    user agent stylesheet table {
        border-collapse: separate;
        text-indent: initial;
        white-space: normal;
        line-height: normal;
        font-weight: normal;
        font-size: medium;
        font-style: normal;
        color: -internal-quirk-inherit;
        text-align: start;
        border-spacing: 2px;
        font-variant: normal;
    }

    .equal-height .portlet {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    .portlet.solid {
        padding: 0 10px 10px;
        border: 0;
    }

    .custom-overlay-design {
        background-color: #fafafac2 !important;
        box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
    }

    .portlet {
        margin-bottom: 5px !important;
    }

    .portlet {
        margin-top: 0;
        margin-bottom: 25px;
        padding: 0;
        border-radius: 4px;
    }

    .dashboard-stat,
    .portlet {
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
    }

    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    user agent stylesheet div {
        display: block;
    }

    <style>html,
    body {
        overflow-y: scroll;
        scroll-behavior: smooth;
    }

    body {
        padding: 5px 10px !important;
        font-size: 12px !important;
        /* background-image: url('https://ecom.armapparels.com.pk/assets/pages/img/bg/bg_7.jpg');
        background-image: url('https://ecom.armapparels.com.pk/assets/pages/img/bg/bg_7.jpg'); */
        background-image: url('https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg');

        background-repeat: no-repeat !important;
        background-size: auto !important;
    }

    .row {
        /* background-color: #FFFFFF; */
        background-color: transparent !important;
    }

    td {
        padding: 2px 3px !important;
        font-size: 12px !important;
    }

    .portlet {
        margin-bottom: 5px !important;
    }

    .portlet-body {
        padding-top: 5px !important;
    }

    .equal-height,
    .equal-height .col-sm-6 {
        display: flex;
    }

    .equal-height .portlet {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    /* code start */
    <blade media|%20only%20screen%20and%20(max-width%3A%20600px)%20%7B%0D>.financials {
        flex-direction: column-reverse;
        display: flex;
    }
    }

    .paid-stamp .portlet::before {
        content: "";
        position: absolute;
        background-image: url('https://phonecase.betalogics.com/assets/pages/img/paid_stamp.png');
        background-position: center;
        background-repeat: no-repeat;
        top: 0px;
        bottom: 0px;
        right: 0px;
        left: 0px;
        opacity: .5;
    }

    <blade media|%20only%20screen%20and%20(max-width%3A%20600px)%20%7B%0D>.paid-stamp .portlet::before {
        background-size: 33%;
    }
    }

    .orderConfirmArea {
        margin-bottom: -14px;
    }

    .orderConfirmArea .fa {
        margin-left: 5px;
    }

    .orderConfirmArea span {
        float: left;
    }

    .orderConfirmArea a {
        height: 55px;
        padding-top: 20px;
        border-radius: 6px 6px 0px 0px;
        text-align: right;
        font-size: 14px;
        background: linear-gradient(-45deg, #FF0000, #0383aa, #FF0000, #0383aa);
        background-size: 600%;
        animation: anime 4s linear infinite;
        border: 0px !important;
        margin-bottom: -4px;
    }


    <blade keyframes|%20anime%20%7B%0D>0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
    }

    .orderConfirmArea .row::before,
    .orderConfirmArea .row::after {
        display: none !important;
    }

    .stickybtn {
        position: fixed;
        left: 0;
        bottom: 0;
        margin-top: 0px !important;
        bottom: -10px !important;
    }

    .footerarea {
        overflow: hidden !important;
        bottom: 0px !important;
        width: 100%;
    }

    .custom-overlay-design .portlet-body,
    .custom-overlay-design .caption {
        color: #000 !important;
    }

    .custom-overlay-design {
        background-color: #fafafac2 !important;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    /* .custom-overlay-design table {
        width: 100%;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px
    }

    .custom-overlay-design .courier-table table,
    .custom-overlay-design .courier-table tr,
    .custom-overlay-design .courier-table th,
    .custom-overlay-design .courier-table td {
        padding: 10px !important;
        border-collapse: collapse;
        border: 1px solid #000;
    } */


    .custom-overlay-design .courier-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 5px 5px;
        margin-bottom: 20px;
    }

    .custom-overlay-design .courier-table tr,
    .custom-overlay-design .courier-table th,
    .custom-overlay-design .courier-table td {
        padding: 5px !important;
        margin: 10px;
        color: #fff;
        background-color: #5c5c5c;
        border-radius: 10px;
    }


    .removeRadius .myfooter,
    .stickybtn .myfooter {
        border-radius: 0px !important;
    }

    .myfooter {
        color: #fff !important;
        width: 100%;
        background-color: #0B0B45;
        padding: 7px;
        padding-bottom: 12px !important;
        text-align: center;
        border-radius: 0px 0px 6px 6px;
        /* margin-top: -14px; */
        display: block;
    }

    .myfooter a {
        color: #fff !important;
    }

    .fixedbar {
        position: fixed;
        left: 0;
        bottom: -10px;
        border-radius: 0px;
    }

    .relativebar {
        margin-top: 8px;
        position: relative;
        padding: 0px;
    }

    /* verticial text */
    .table tr td {
        vertical-align: middle !important;
    }

</style>

</style>
