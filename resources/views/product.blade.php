@extends('master')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
       @foreach ($products as $item)
           
      
      <div class="carousel-item {{$item['id']==2?'active':''}}">
        <a href="detail/{{$item['id']}}" target="_blank">
            <div class="container myContainer">
            <img class=" d-block img-fluid  slider-img img-fluid" src="{{$item['gallery']}}" alt="First slide">
            </div>
            <div class="carousel-caption d-none d-md-block">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </div> 
        </a>
      </div>
      
      
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- new carosal --}}

 
    
  
  
  <div class="container">
  
        
    <br>
    
    <h4 style="font-weight:bold">  &nbsp;&nbsp; More to love &nbsp;&nbsp;   </h4>
   
	<br>
 
	<div class="row" id="ads">
    <!-- Category Card -->
   
    @foreach ($products as $item)

    <div class="col-md-4 col-sm-6 ">
        <div class="card rounded ">
       
            <div class="card-image">
                <a href="detail/{{$item['id']}}" target="_blank">
                <span class="card-notify-badge">{{$item['name']}}</span>
                <span class="card-notify-year">New</span>
                <img class="img-fluid" src="{{$item['gallery']}}" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                
                <span class="card-detail-badge">{{$item['category']}}</span>
                <span class="card-detail-badge">{{$item['price']}} PKR</span> 
                <span class="card-detail-badge">{{$item['description']}}</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>{{$item['name']}}</h5>
                </div>
                <a class="ad-btn" href="detail/{{$item['id']}}">More Details</a>
            </div> 
            
       
  
    </div>
    </div> 
     
    @endforeach 
   
  
</div>
<div>
    {{$products->links()}}
</div> <br><br>
</div>


<style>
    /* @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    @import url('https://fonts.googleapis.com/css?family=Montserrat'); */

    @import url('https://fonts.googleapis.com/css2?family=Sono:wght@400;600&display=swap');

    
    body {
        /* font-family: 'Montserrat', sans-serif; */
        font-family: 'Sono', sans-serif;
    }
    .img-fluid{
        height: 150px;
    }
    .carousel-item{
     height: 50px;
}
.myContainer{
    max-height: 400px;
}
.myContainer img{
    max-height: 400px;
}
.carousel-item, .slider-img{
    height: 50% !important;
    width:  100% !important;
  
}
  .carousel-control-next-icon{
    background-color: #000;
}
.carousel-control-prev-icon{
    background-color: #000;
}
 
    .w-5{
        display: none;
    }
    img.slider-img{
        height: 200px !important;
        width: 50%;
    }
    /* Category Ads */
  
    #ads {
        margin: 30px 0 30px 0;
       
    } */
    .w-5{
        display: none;
    }
    #ads .card-image .card-notify-badge {
            position: absolute;
            left: -10px;
            top: -20px;
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px; 
            color: #000;
            padding: 5px 10px;
            font-size: 10px;
            font-weight: bold;
    
        }
    
    #ads .card-notify-year {
            position: absolute;
            right: -10px;
            top: -20px;
            background: #f2d900;
            border-radius: 50%;
            text-align: center;
            color: #fff;      
            font-size: 14px;      
            width: 50px;
            height: 50px;    
            padding: 15px 0 0 0;
    }
    h4{
        color: #00cc90;
    }
   
    .ad-title h5{
        
        color: #00cc90;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
    }
    .card-body a:hover{
        cursor: pointer;
        color: #0a6d4f;
        text-decoration: none;
        font-size: 20px;
       
    } 

    
    #ads .card-image-overlay .card-detail-badge {      
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;        
        }
        
        #ads .card {
                background: #f2f2f2;
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
                border-radius: 50px;
                border: 2px solid #00cc90;
                transition: all 0.3s ease;
            }
       
    
    #ads .card:hover {
                background: #fff;
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
                border-radius: none;
                border: 2px solid #fff;
                transition: all 0.3s ease;

            }
    
    #ads .card-image-overlay {
            font-size: 20px;
            
        }
    
    
    #ads .card-image-overlay span {
                display: inline-block;              
            }
    
    
    #ads .card-body .ad-btn {
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
    
    #ads .card-body .ad-btn:hover {
                background-color: #e6de08;
                color: #00cc90;
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

            @media screen and (min-width: 40em) {
    .rounded {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
 
   
}
    </style>


{{-- carousal css --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.home .carousel-item{
	min-height: 100vh;
	background-position: center;
	background-size: cover;
	position: relative;
	z-index: 1;
}
.home .carousel-item:before{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.5);
	z-index: -1;
}
.home .carousel-item .container{
	position: absolute;
	left: 50%;
	top:50%;
	transform: translate(-50%, -50%);
	text-align: center;
}
.home .carousel-item h2{
	font-family: 'Kaushan Script', cursive;
	font-size: 80px;
	color: #fff;
	margin: 0 0 10px;
	opacity: 0;
}
.home .carousel-item p{
	font-family: "poppins", sans-serif;
	font-size: 24px;
	margin: 0;
	color: #eee;
	opacity: 0;
	text-transform: uppercase;
}
.home .carousel-item.active h2{
	animation: fadeInLeft 0.5s ease forwards;
}
.home .carousel-item.active p{
	animation: fadeInRight 0.5s ease forwards;
}

/*********************** Arrow Indication *************************/
.home .carousel-controls{
	position: absolute;
	left: 50%;
	bottom: 40px;
	z-index: 10;
	transform: translate(-50%);
}
.home .carousel-indicators{
	position: relative;
	margin: 0;
}
.home .carousel-indicators li{
	width: 70px;
	height: 70px;
	margin: 0 5px;
	border-radius: 50%;
	background-position: center;
	background-size: cover;
	border: 3px solid transparent;
	transition: all 0.3s ease;
}
.home .carousel-control-next img,
.home .carousel-control-prev img{
	width: 30px;
}
.home .carousel-control-next{
	right: -90px;
}
.home .carousel-control-prev{
	left: -90px;
}
.home .carousel-indicators li.active{
	border-color:#fff;
	transform: scale(1.2);
}
.home .carousel-control-next,
.home .carousel-control-prev{
	width: 60px;
	height: 60px;
	opacity: 1;
	z-index: 3;
	top: 50%;
	transform: translateY(-50%);
	border-radius: 50%;
	transition: all 0.3s ease;
}
.home .carousel-control-next:hover,
.home .carousel-control-prev:hover{
	box-shadow: 0 0 10px #fff;
}

@keyframes fadeInLeft{
	0%{
		opacity: 0;
		transform: translateX(-30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}
@keyframes fadeInRight{
	0%{
		opacity: 0;
		transform: translateX(30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}

/*Responsive*/
@media(max-width: 767px){
	.home .carousel-control-next,
	.home .carousel-control-prev{
		display: none;
	}	
	.home .carousel-indicators li{
		width: 60px;
		height: 60px;
	}
	.home .carousel-item h2{
		font-size: 45px;
	}
	.home .carousel-item p{
		font-size: 22px;
	}
}
</style>
       
  
@endsection
