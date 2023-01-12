<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Store</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/svg-with-js.min.css" integrity="sha512-j+8sk90CyNqD7zkw9+AwhRuZdEJRLFBUg10GkELVu+EJqpBv4u60cshAYNOidHRgyaKNKhz+7xgwodircCS01g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</head>
<body>
    @include('sweetalert::alert')


    {{View::make('header')}}
   
    @yield('content') 
    {{View::make('footer')}}

   
</body>

<style>
    .custom-login{
        height: 500px;
        padding-top:100px; 
      }


      @import url('https://fonts.googleapis.com/css?family=Montserrat|Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.bg-img {
    /* background: url(https://images.pexels.com/photos/461940/pexels-photo-461940.jpeg); */
    background: url(https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg);
    height: 150vh;
    background-size: cover;
    background-position: center;
}

.bg-img::after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    height: 150%;
    width: 100%;
    background: rgba(0, 0, 0, 0.4);
}
.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 999;
    width: 370px;
    text-align: center;
    padding: 60px 32px;
    background: rgba(255, 255, 255, 0.04);
    box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}

.content header {
    color: #fff;
    font-size: 33px;
    font-weight: 600;
    margin: 0 0 35px 0;
    font-family: 'Poppins', sans-serif;
}

.field {
    position: relative;
    height: 45px;
    width: 100%;
    display: flex;
    background: rgba(255, 255, 255, 0.94);
}



.field span {
    color: #222;
    width: 40px;
    line-height: 45px;
    padding: 0 10px;
}
.field input {
    height: 100%;
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: #222;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
}



.space {
    margin-top: 16px;
}
.pass {
    text-align: left;
    margin: 10px 0;
}

.pass a {
    color: #fff;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
}

.pass:hover a {
    text-decoration: underline;
}

button[type="submit"] {
    background: linear-gradient(to right, #0000ff 0%, #6666ff 100%);
    border: 1px solid linear-gradient(to right, #0000ff 0%, #6666ff 100%);
    ;
    border-radius: 2px solid white;
    color: #fff;
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
}

button[type="submit"]:hover {
    background: linear-gradient(to left, #0000ff 0%, #6666ff 100%);
}

.login {
    color: #fff;
    margin: 20px 0;
    font-family: 'Poppins', sans-serif;
}
.link {
    display: flex;
    cursor: pointer;
    color: #fff;
    margin: 0 0 20px 0;
}

.facebook,
.instagram {
    width: 100%;
    height: 45px;
    line-height: 45px;
    margin-top: 10px;
    margin-left: 10px;
}
.facebook {
    margin-left: 0px;
    background: #4267B2;
    border: 1px solid #3e61a8;
}

.instagram {
    background: linear-gradient(to right, #9900cc 0%, #ff3399 100%);
    border: 1px solid linear-gradient(to right, #9900cc 0%, #ff3399 100%);
}

.facebook:hover {
    background: #3e61a8;
}

.instagram:hover {
    background: linear-gradient(to left, #9900cc 0%, #ff3399 100%);
}
.link i {
    font-size: 17px;
}

.link span {
    font-size: 15px;
    margin-left: 8px;

    font-weight: 600;
    font-family: 'Poppins', sans-serif;
}

.signup {
    color: #fff;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
}

.signup a {
    color: #37ff00;
    text-decoration: none;
}

.signup a:hover {
    text-decoration: underline;
}
   


/* css for user data form */

.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: 1px;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

.rem{
    color: white;
}


img.slider-img{
height: 500px !important;
margin-left: 20px;
margin-right: 40px;
}
</style>


{{-- // css for product details section --}}

<style>
    body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

    .add-to-buy, .like {
  background: #1b920b;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-buy:hover, .like:hover {
    background: #7fd377;
    color: #fff; }

    .add-to-back, .like {
  background: #0c87c0;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-back:hover, .like:hover {
    background: #006bb3;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

</style>


{{-- // css for product detail and search product --}}
<style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans');
  @import url('https://fonts.googleapis.com/css?family=Montserrat');
  
  body {
      font-family: 'Montserrat', sans-serif;
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
  </style>

</html>