<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/svg-with-js.min.css" integrity="sha512-j+8sk90CyNqD7zkw9+AwhRuZdEJRLFBUg10GkELVu+EJqpBv4u60cshAYNOidHRgyaKNKhz+7xgwodircCS01g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
             @foreach ($orders as $item)
             @if ($loop->first)
             <div class="container">
                <h1 style="text-align: center">E-STORE <img src="https://as1.ftcdn.net/v2/jpg/01/05/24/14/1000_F_105241416_REXV3vVDZMyEaNZz47pxH3oIpaDcd8Wu.jpg" width="30" height="30" alt=""></h1>
                <h5 style="text-align: center">Developed By: Bilal Rasheed </h5>
                <h5 style="text-align: center">Contact: +92 3156438000 <a href="https://bilal-rasheed.tech/">Website</a> </h5>
              
                 <hr>
                <h2>Invoice #  <strong style="color: blue">{{$item->tracking_id}}</strong></h2> <hr>
                <div class="row">
                    <div class="col-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> User Details </h4>
                                    <table class="table table-borderless">
                                      <tr>
                                        <td colspan="2">Name: </td>
                                        <td class="text-danger text-end">{{$item->first_name}} {{$item->last_name}}</td>
                                      </tr> 
                                      <tr>
                                        <td colspan="2">Phone: </td>
                                        <td class="text-danger text-end"> {{$item->phone}}</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Country: </td>
                                        <td class="text-danger text-end"> {{$item->country}}</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">State: </td>
                                        <td class="text-danger text-end"> {{$item->state}}</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Address: </td>
                                        <td class="text-danger text-end"> {{$item->address}}</td>
                                      </tr>
                                    </table>
                                    <hr>
                               
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Product Details </h4>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td colspan="2">Product Name: </td>
                                            <td class="text-danger text-end"> {{$item->product_name}} </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Product Price: </td>
                                            <td class="text-danger text-end"> {{$item->product_price}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Product Qty: </td>
                                            <td class="text-danger text-end"> {{$item->product_qty}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Payment Method: </td>
                                            <td class="text-danger text-end"> {{$item->payment_method}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Status: </td>
                                            <td class="text-danger text-end"> {{$item->status}}</td>
                                        </tr>
                                       </table>
                                       <hr>
                                        @endforeach
                                     
                                        <table class="table table-borderless">
                                        
                                      
                                        <tr>
                                          
                                            
                                         
                                           <td colspan="2">Shipping:</td>
                                           <?php 
                                           $totalShip=0;
                                           foreach ($orders as $item) {  
                                           $totalShip+= $item->d_charges;
                                           }
                                        
                                           ?>
                                            <td class="text-end">{{$totalShip}}</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">Tax:</td>
                                            <?php 
                                            $totalTax=0;
                                            foreach ($orders as $item) {  
                                            $totalTax+= $item->tax_amt;
                                            }
                                         
                                            ?>
                                            <td class="text-end">{{$totalTax}}</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">Discount: </td>
                                            <?php 
                                           $totalDis=0;
                                           foreach ($orders as $item) {  
                                           $totalDis+= $item->dis_amt;
                                           }
                 
                                           ?>
                                            <td style="color: red" class="text-danger text-end">-{{$totalDis}}</td>
                                          </tr>
                                          <tr class="fw-bold">
                                            <td colspan="2"><strong>TOTAL: </strong></td>
                                            <?php 
                                            $sum=0;
                                            foreach ($orders as $item) {  
                                            $sum+= $item->sub_total;
                                            }
                                         
                                            ?>
                                            <td class="text-end"><strong>{{$sum + $totalTax + $totalShip - $totalDis}}</strong><sub>PKR</sub>  </td>
                                          </tr> 
                                          <hr>
                                    </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <footer style="text-align: center"> 
                    <h4 style="color: blue">This is System Generated Receipt  </h4>
                </footer>
             </div>
            
         
         
    

             