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
       Order #{{$item->tracking_id}} 
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
                  <span class="me-3"> @foreach ($orders as $item)
                    @if ($loop->first)
                 #{{$item->tracking_id}} 
                    @endif
                 @endforeach </span>
                  <span class="me-3">Visa -1234</span>
                  <span class="badge rounded-pill bg-info">SHIPPING</span>
                </div>
                <div class="d-flex">
                  <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i class="bi bi-download"></i> <span class="text">Invoice</span></button>
                  <div class="dropdown">
                    <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                      <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                    </ul>
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
                          <h6 class="small mb-0"><a href="#" class="text-reset"> {{$item->name}} </a></h6>
                          <span class="small">Description:  {{$item->description}} </span>
                        </div>
                      </div>
                      
                    </td>
                    
                    <td>{{$item->total_qty_product}}</td>
                    <td class="text-end">{{$item->price}}</td>
                  </tr>
                  @endforeach
                  <tr>
                    {{-- <td>
                      <div class="d-flex mb-2">
                        <div class="flex-shrink-0">
                          <img src="https://www.bootdey.com/image/280x280/FF69B4/000000" alt="" width="35" class="img-fluid">
                        </div>
                        <div class="flex-lg-grow-1 ms-3">
                          <h6 class="small mb-0"><a href="#" class="text-reset">Smartwatch IP68 Waterproof GPS and Bluetooth Support</a></h6>
                          <span class="small">Color: White</span>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td class="text-end">$79.99</td> --}}
                  </tr>
                </tbody>
                <tfoot>
                  {{-- <tr>
                    <td colspan="2">Subtotal</td>
                    <td class="text-end">$159,98</td>
                  </tr> --}}
                  <tr>
                    <td colspan="2">Shipping</td>
                    <td class="text-end">200</td>
                  </tr>
                  <tr>
                    <td colspan="2">Discount </td>
                    <td class="text-danger text-end">-0.00</td>
                  </tr>
                  <tr class="fw-bold">
                    <td colspan="2">TOTAL</td>
                    <td class="text-end">PKR {{$item->sub_total +200}}</td>
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
                  <h3 class="h6">Payment Method</h3>
                  <p>{{$item->payment_method}} <br>
                  Total: PKR {{$item->sub_total}} <span class="badge bg-success rounded-pill">PAID</span></p>
                </div>
                <div class="col-lg-6">
                  <h3 class="h6">Billing address</h3>
                  <address>
                    <strong>{{session('user')['user_name']}}</strong><br>
                    @foreach ($orders as $item)
                    @if ($loop->first)
                 {{$item->address}} 
                    @endif
                 @endforeach <br>
                    San Francisco, CA 94103<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
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
              <h3 class="h6">Shipping Information</h3>
              <strong>Leopard</strong>
              <span><a href="#" class="text-decoration-underline" target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i> </span>
              <hr>
              <h3 class="h6">Address</h3>
              <address>
                <strong>{{session('user')['user_name']}}</strong><br>
                @foreach ($orders as $item)
                @if ($loop->first)
             {{$item->address}} 
                @endif
             @endforeach <br>
                San Francisco, CA 94103<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
<style>
    body{
    background:#eee;
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
    color: #5465ff;
    text-decoration: none;
}
</style>

      @endsection