@include('admin.admin_master')


{{-- <div class="container-fluid">

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
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6">Order Action</h3>
         
          <strong>Leopard</strong>
          <span><a href="#" class="text-decoration-underline" target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i> </span>
          <hr>
        
       
       <div class="row">
        <div class="col">
       
         
          <div class="col">
        
              </div>
              </div>
        </div>
      </div>
      <!-- Main content -->
      <div class="row">
        <div class="col-lg-12">
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
                 @endforeach
                 </span>
                  <span class="me-3">Visa -1234</span>
                  <span class="badge rounded-pill bg-info">SHIPPING</span>
                </div>
                <div class="d-flex">
                  <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i class="bi bi-download"></i> <span class="text">Invoice</span></button>
                  
                </div>
              </div>
              <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>Tracking ID</td>
                        <td >Customer Name</td>
                        <td>Product</td>
                        <td>Qty</td>
                        <td>Price</td>
                        <td>Payment Method</td>
                        <td>Sub Total</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Status</td>
                       
                    </tr>
                  @foreach ($orders as $item)
                  <tr>
                    <td class="text-end">{{$item->tracking_id}}</td>
                    <td class="text-end">{{$item->first_name}} {{$item->last_name}}</td>
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
                    
                    <td>{{$item->product_qty}}</td>
                    <td class="text-end">{{$item->price}}</td>
                    <td class="text-end">{{$item->payment_method}}</td>
                    <td class="text-end">{{$item->sub_total}}</td>
                    <td class="text-end">{{$item->address}},{{$item->country}},{{$item->state}}</td>
                    <td class="text-end">(+92) {{$item->phone}}</td>
                    <td class="text-end" >
            <form  action="approved_orders" method="post">
            @csrf
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Accept Order</button>
            </div>
              <div class="form-group">
                <input type="hidden" name="status" class="form-control rounded-left" placeholder="status" value="accepted">
              </div>
              <div class="form-group ">
                <input type="hidden" name="message" class="form-control rounded-left"  value= "Get Ready {{$item->sub_total}}">
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_tid" class="form-control rounded-left" value= {{$item->tracking_id}} >
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_fname" class="form-control rounded-left" placeholder="message" value= {{$item->first_name}} >
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_lname" class="form-control rounded-left" placeholder="message" value=  {{$item->last_name}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_phone" class="form-control rounded-left" placeholder="message" value= {{$item->phone}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_pid" class="form-control rounded-left" placeholder="message" value= {{$item->product_id}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_uid" class="form-control rounded-left" placeholder="message" value= {{$item->user_id}}>
              </div>
              <div class="form-group">
                <input type="hidden" name="customer_gallery" class="form-control rounded-left" placeholder="message" value= {{$item->gallery}}>
              </div>
             
            </div>
            </form>
                   </td>

                   <td >
    <form  action="rejected_orders" method="post">
                @csrf
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-danger rounded submit px-3">Reject Order</button>
              </div> 
                        <div class="form-group">
                            <input type="hidden" name="status" class="form-control rounded-left" placeholder="status" value="rejected">
                        </div>
                  <div class="form-group">
                    <input type="hidden" name="message" class="form-control rounded-left" placeholder="message" value= "sorry your order is rejected">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_tid" class="form-control rounded-left" placeholder="message" value= {{$item->tracking_id}} >
                  </div>
              
                    <div class="form-group">
                      <input type="hidden" name="customer_pid" class="form-control rounded-left" placeholder="message" value= {{$item->product_id}}>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="customer_uid" class="form-control rounded-left" placeholder="message" value= {{$item->user_id}}>
                    </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_fname" class="form-control rounded-left" placeholder="message" value= {{$item->first_name}} >
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_lname" class="form-control rounded-left" placeholder="message" value=  {{$item->last_name}}>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_phone" class="form-control rounded-left" placeholder="message" value= {{$item->phone}}>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_gallery" class="form-control rounded-left" placeholder="message" value= {{$item->gallery}}>
                  </div>
                                      
                  </div>
                </form>
                  
                   </td>
                  </tr>
                  @endforeach
                  <tr>
                 
                  </tr>
                </tbody>
               
              </table>
            </div>
          </div>
          <!-- Payment -->
         
        </div>
        <div class="col-lg-4">
        
         
          

         
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
</style> --}}

<div class="container">
<br>  <h3 class="text-center"><strong>Pending Orders of Customers</strong> </h3>
<hr>



<div class="card">
<table class="table table-hover shopping-cart-wrap">
     @foreach ($orders as $item)
<thead class="text-muted">
<tr>
  <th scope="col">{{$item->first_name}} {{$item->last_name}}</th>
  <th scope="col" width="120">Address</th>
  <th scope="col" width="120">Phone</th>
  <th scope="col" width="120">Tracking ID</th>
  <th scope="col" width="120">Sub Total</th>
  <th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="{{$item->gallery}}" class="img-thumbnail img-sm"></div>
	<figcaption class="media-body">
		<h6 class="title text-truncate">{{$item->product_name}} {{$item->description}} </h6>
		<dl class="param param-inline small">
		  <dt>Qty: </dt>
		  <dd>{{$item->product_qty}}</dd>
		</dl>
		<dl class="param param-inline small">
		  <dt>Price: </dt>
		  <dd>{{$item->price}}</dd>
		</dl>
	</figcaption>
</figure> 
	</td>
	<td> 
	
			{{$item->address}},{{$item->country}},{{$item->state}}

	</td>
  <td> 
	
			{{$item->phone}}

	</td>
  <td> 
	
    {{$item->tracking_id}}

</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">PKR</var> 
			<small class="text-muted">({{$item->sub_total}})</small> 
		</div>
     <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	{{-- <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> 
    <i class="fa fa-heart"></i> --}}
    <div class="row">
      <div class="col">
     <form  action="approved_orders" method="post">
            @csrf
            <div class="form-group">
              <button type="submit" class="btn btn-outline-primary">Accept Order</button>
            </div>
              <div class="form-group">
                <input type="hidden" name="status" class="form-control rounded-left"  value="accepted">
              </div>
              <div class="form-group ">
                <input type="hidden" name="message" class="form-control rounded-left"  value= " Please Get Ready amount your order will deliver within 2-4 working days">
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_tprice" class="form-control rounded-left"  value= " {{$item->sub_total}} ">
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_tid" class="form-control rounded-left" value= {{$item->tracking_id}} >
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_fname" class="form-control rounded-left"  value= {{$item->first_name}} >
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_lname" class="form-control rounded-left"  value=  {{$item->last_name}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_phone" class="form-control rounded-left"  value= {{$item->phone}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_pid" class="form-control rounded-left"  value= {{$item->product_id}}>
              </div>
              <div class="form-group ">
                <input type="hidden" name="customer_uid" class="form-control rounded-left"  value= {{$item->user_id}}>
              </div>
              <div class="form-group">
                <input type="hidden" name="customer_gallery" class="form-control rounded-left"  value= {{$item->gallery}}>
              </div>
             
            </div>
            </form>
            
  

	{{-- <a href="" class="btn btn-outline-danger"> × Reject</a> --}}
  <div class="col">
   <form  action="rejected_orders" method="post">
                @csrf
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger">Reject Order</button>
              </div> 
                        <div class="form-group">
                            <input type="hidden" name="status" class="form-control rounded-left" value="rejected">
                        </div>
                  <div class="form-group">
                    <input type="hidden" name="message" class="form-control rounded-left"  value= "sorry your order is rejected all items sold out">
                  </div>
                  <div class="form-group ">
                    <input type="hidden" name="customer_tprice" class="form-control rounded-left"  value= " {{$item->sub_total}} ">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_tid" class="form-control rounded-left"  value= {{$item->tracking_id}} >
                  </div>
              
                    <div class="form-group">
                      <input type="hidden" name="customer_pid" class="form-control rounded-left"  value= {{$item->product_id}}>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="customer_uid" class="form-control rounded-left"  value= {{$item->user_id}}>
                    </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_fname" class="form-control rounded-left"  value= {{$item->first_name}} >
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_lname" class="form-control rounded-left"  value=  {{$item->last_name}}>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_phone" class="form-control rounded-left"  value= {{$item->phone}}>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="customer_gallery" class="form-control rounded-left"  value= {{$item->gallery}}>
                  </div>
                                      
                 
                </form>
              </div>
</div>
  </div>
	</td>
  

    </div>
</tr>



	
</tr>
</tbody>

@endforeach
</table>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>


<style>
  .param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
} 

.shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
}
var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 90px;
    max-height: 75px;
    object-fit: cover;
}
</style>