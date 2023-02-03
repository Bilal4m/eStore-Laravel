@extends('master')
@section('content')



<div class="container-fluid">

    <div class="container">
      <!-- Title -->
      <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="h5 mb-0">
          <a href="#" class="text-muted"></a> 
          @foreach ($orders as $item)
          @if ($loop->first)
           <p style="color: #00cc90; font-weight:bold">Order #{{$item->tracking_id}}   </p> 
          @endif
       @endforeach
        </h2>
      </div>
    
      <!-- Main content -->
      <div class="row">
        <div class="col-lg-8">
          <!-- Details -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="mb-3 d-flex justify-content-between">
                <div>
                  <span class="me-3"> 
                    @foreach ($orders as $item)
                    @if ($loop->first)
                 {{$item->created_at}} 
                    @endif
                 @endforeach 
                </span>
                  {{-- <span class="me-3"> @foreach ($orders as $item)
                    @if ($loop->first)
                 #{{$item->tracking_id}} 
                    @endif
                 @endforeach
                 </span> --}}
                  <span style="color: #00cc90; font-weight:bold"  class="me-3">Visa -34*****</span>
                  <span class="badge rounded-pill bg-info">SHIPPING</span>
                </div>
               <div class="row">
                <div class="col">
                <div class="d-flex">
                  <button  class="openBtn btn btn-primary p-0 me-3 d-none d-lg-block btn-icon-text " ><a href="/check_status" ><span class="text">Status</a></button>
                  
                </div>
              </div>
                <div class="col">
                <div class="d-flex">
                  <button class="openBtn btn btn-primary p-0 me-3 d-none d-lg-block btn-icon-text "><a href="/generate-pdf" ><span class="text">PDF</span></a></button>
                </div>
              </div>
               </div>
                

              </div>
              <table class="table table-borderless">
                <tbody>
                  @foreach ($orders as $item)
                  <tr>
                    <td>
                     
                      <div class="d-flex mb-2">
                        <div class="flex-shrink-0">
                          <img src=" {{$item->gallery}} " alt="" width="35" class="img-fluid">
                        </div>
                        <div class="flex-lg-grow-1 ms-3">
                          <h6 style="color: #00cc90; font-weight:bold" class="small mb-0"> {{$item->name}} </h6>
                          <span class="small">Description:  <span style="color: #00cc90; font-weight:bold">{{$item->description}}</span>  </span>
                        </div>
                      </div>
                      
                    </td>
                    
                    <td>{{$item->product_qty}} &nbsp; &nbsp; &nbsp;  &nbsp; x </td>
                   
                    <td class="text-end">{{$item->price}}</td>
                
                   
                 
                  
                  </tr>
                  @endforeach
                  <tr>
                
                  </tr>
                </tbody>
                <tfoot>
                  
                  <tr>
                    <td style="color: #007bff; font-weight:bold" colspan="2">Shipping</td>
                    
                    <td style="color: #007bff; font-weight:bold">{{$item->d_charges}}</td>
                  </tr>
                  <tr>
                    <td style="color: #007bff; font-weight:bold" colspan="2">Tax</td>
                 
                    <td style="color: #007bff; font-weight:bold">{{$item->tax_amt}}</td>
                  </tr>
                  <tr>
                    <td style="color: red; font-weight:bold" colspan="2">Discount </td>
                  
                    <td style="color: red; font-weight:bold">-{{$item->dis_amt}}</td>
                  </tr>
                  <tr class="fw-bold">
                   
                      
                   
                    <td style="color: #00cc90; font-weight:bold" colspan="2">TOTAL</td>
                   
                    <td style="color: #00cc90; font-weight:bold">{{$item->sub_total}}<sub>PKR</sub> </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- Payment -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <h4 style="color: #00cc90; font-weight:bold" class="h5">Payment Method</h4>
                  <p>{{$item->payment_method}} <br>
                  <span style="color:black; font-weight:bold">Total: {{$item->sub_total}}<sub>PKR</sub>  </span> <span class="badge bg-success rounded-pill">PAID</span></p>
                </div>
                <div class="col-lg-6">
                  <h4 style="color: #00cc90; font-weight:bold" class="h5">Billing address</h4>
                  <address>
                    <strong style="color: #00cc90; font-weight:bold">{{session('user')['user_name']}}</strong>
                 <br>
                    {{{$item->country}}},<br>
                    {{{$item->state}}},<br>
                    @foreach ($orders as $item)
                    @if ($loop->first)
                 {{$item->address}}, 
                    @endif
                 @endforeach 
                    <br> <abbr title="Phone">P:</abbr> 
                    (+92) {{$item->phone}}
                  </address>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
        
         
          <div class="card mb-4">
            <!-- Shipping information -->
            <div class="card-body">
              <h4 style="color: #00cc90; font-weight:bold" class="h6">Shipping Information</h4>
              
              <strong>Leopard</strong>
              <span><a href="#" class="text-decoration-underline" target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i> </span>
              <hr>
              <h4 style="color: #00cc90; font-weight:bold" class="h6">Address</h4>
              <address>
                <strong style="color: #00cc90; font-weight:bold">{{session('user')['user_name']}}</strong>
             <br>
                {{{$item->country}}},<br>
                {{{$item->state}}},<br>
                @foreach ($orders as $item)
                @if ($loop->first)
             {{$item->address}}, 
                @endif
             @endforeach 
               <br> <abbr title="Phone">P:</abbr> (+92) {{$item->phone}}
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>

      
     
<style>
    body{
    background:#f8f9fa;
}
.text{
  color: white;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}
.text-reset {
    --bs-text-opacity: 1;
    color: inherit!important;
}
a {
    color: #007bff;
    text-decoration: none;
}

.openBtn {
  background-color: #00cc90;
  border: none;
  text-decoration: none;
}

.openBtn a:hover{
  background-color: #89c9b6;
  border: none;
  text-decoration: none;
  
}
</style>

      @endsection