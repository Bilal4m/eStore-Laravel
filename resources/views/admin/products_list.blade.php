@include('admin.admin_master')


<div class="container">
    <br>
    
    <h4>  &nbsp;&nbsp; Products List &nbsp;&nbsp;   </h4>
 
    <br>
 
    <div class="row" id="ads">
    <!-- Category Card -->
   
    @foreach ($products as $item)
    
    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <a href="{{$item['id']}}" target="_blank">
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
                    <h5>{{$item->name}}</h5>
                </div>
                {{-- <a class="ad-btn" href={{"product_update/".$item['id']}}>Edit Item</a> --}}
                {{-- <button class= "updateProduct ad-btn " > Update Item</button> --}}
                <td> <button class= "updateProduct ad-btn" ><a href={{"product_update/".$item['id']}}><i class="fa-solid fa-pen-to-square"></i>Update</a></button></td>
                <a class="ad-btn" href={{"product_delete/".$item['id']}}>Remove Item</a>
            </div> 
            
      
        </div>  <br><br>
    </div> 
   
   
    @endforeach 
    
    <div>
        
        {{$products->links()}}
    </div> 
</div>
<script>
    $('.updateProduct').on('click',function(){
        $('.modal-body').load('{{"product_update/".$item['id']}}',function(){
            $('#myModal').modal({show:true});
        });
    });
    </script>
</div>




<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    
    body {
        font-family: 'Montserrat', sans-serif;
    
    }
    .w-5{
        display: none;
    }
    .img-fluid{
        height: 250px;
    }
    img.slider-img{
        height: 800px !important;
    }
    /* Category Ads */
    
    #ads {
        margin: 30px 0 30px 0;
       
    }
    
    #ads .card-notify-badge {
            position: absolute;
            left: -10px;
            top: -20px;
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px; 
            color: #000;
            padding: 5px 10px;
            font-size: 14px;
    
        }
    
    #ads .card-notify-year {
            position: absolute;
            right: -10px;
            top: -20px;
            background: #ff4444;
            border-radius: 50%;
            text-align: center;
            color: #fff;      
            font-size: 14px;      
            width: 50px;
            height: 50px;    
            padding: 15px 0 0 0;
    }
    
    
    #ads .card-detail-badge {      
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;        
        }
    
       
    
    #ads .card:hover {
                background: #fff;
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
                border-radius: 4px;
                transition: all 0.3s ease;
            }
    
    #ads .card-image-overlay {
            font-size: 20px;
            
        }
    
    
    #ads .card-image-overlay span {
                display: inline-block;              
            }
    
    
    #ads .ad-btn {
            text-transform: uppercase;
            width: 150px;
            height: 40px;
            border-radius: 80px;
            font-size: 16px;
            line-height: 35px;
            text-align: center;
            border: 3px solid #e6de08;
            display: block;
            text-decoration: none;
            margin: 20px auto 1px auto;
            color: #000;
            overflow: hidden;        
            position: relative;
            background-color: #e6de08;
        }
    
    #ads .ad-btn:hover {
                background-color: #e6de08;
                color: #1e1717;
                border: 2px solid #e6de08;
                background: transparent;
                transition: all 0.3s ease;
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            }
    
    
            h4 {
                display: flex;
                flex-direction: row;
            }
              
            h4:before,
            h4:after {
                content: "";
                flex: 1 1;
                border-bottom: 1px solid #000;
                margin: auto;
            }

            .updateProduct{
                text-decoration: none;
                color: #000;
            }
            .updateProduct:hover{
                text-decoration: none;
            }

    </style>