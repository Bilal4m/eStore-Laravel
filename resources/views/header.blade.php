
  <?php
   use App\Http\Controllers\ProductController;
   $total =0;
   $totalOrders =0;
   $orderStatus=0;
   if(Session::has('user')){
   $total = ProductController::cartItem();
   $totalOrders = ProductController::myOrdersItem();
   $orderStatus = ProductController::myOrdersStatus();
   }
  ?>

<head>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

  <nav>
    <div class="menu-icon">
       <span class="fas fa-bars"></span>
    </div>
    <div class="logo">
       <a class="navbar-brand" href="/"><i class="fa-solid fa-shop me-2"></i> <strong>E-STORE</strong></a>
   </div>

   <div class="search-icon">
       <span class="fas fa-search"></span>
    </div>
    <div class="cancel-icon">
       <span class="fas fa-times"></span>
    </div>
    <form action="/search">

       <input type="search"  name="query" value="search" class="search-data" placeholder="Search" required>
       <button type="submit mySearchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  
    <div class="nav-items">
       <li><a href="/">Home</a></li>
       @if ($total > 0)
       <li><a href="/cart_list"><i class="fa-solid fa-cart-shopping me-1"></i>Cart({{$total}})</a></li>
       @else
       <li><a href="/emptycart"><i class="fa-solid fa-cart-shopping me-1"></i>Cart</a></li>
       @endif

       @if (Session::has('user')) 
      
       <li  class="">
           <a  onclick="myFunction()" class="dropbtn mybtn"> {{session('user')['user_name']}} <i class="fa-solid fa-caret-down"></i>  <span class="caret"></span> </a>
                 <div id="myDropdown" class="dropdown-content">
                 

                 <a href="/logout">Logout</a>

                 @if($totalOrders>0 )
                 <a href="/myorders">My-Orders</a> 
                 <a href="/generate-pdf">View PDF</a> 
                 @else
                 <a href="/noOrder">My-Orders</a>
                 @endif
               </div>  
       </li>
       @else 
       <li><a href="/login" data-toggle="modal" data-target="#exampleModalCenterUserLogin">Login</a></li>

       <li><a href="/admin_login" data-toggle="modal" data-target="#exampleModalCenterAdminLogin">Admin</a></li>
       @endif 

    </div>

   
 </nav>
 
 {{-- modal pop-up for user sign-in  --}}
		
		<div class="modal user-login-model fade" id="exampleModalCenterUserLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="ion-ios-person"><i class="fa-solid fa-user"></i></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
            <form  action="login" method="post">
              @csrf
		      		<div class="form-group">
		      			<input type="email" name="user_email" class="form-control rounded-left" placeholder="Email" autocomplete="off">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="user_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button style="background-color: #00cc90; border:none; text-align:center;" type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="form-check w-50">
		           
                  
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
		      <div class="modal-footer justify-content-center">
		      	<p>Not a member? <a href="user-signup-model" data-toggle="modal" data-target="#exampleModalCenterUserSignup" data-dismiss="modal">Create an account</a></p>
		      </div>
		    </div>
		  </div>
		</div>


 {{-- modal pop-up for user sign-up  --}}


    <div class="modal user-signup-model fade" id="exampleModalCenterUserSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="ion-ios-person"><i class="fa-solid fa-user"></i></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign Up</h3>
		      	<form  action="register" method="post">
              @csrf
              <div class="form-group">
		      			<input type="text" name="user_name" class="form-control rounded-left" placeholder="Username" autocomplete="off">
		      		</div>
		      		<div class="form-group">
		      			<input type="text" name="user_email" class="form-control rounded-left" placeholder="Email" autocomplete="off">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="user_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button style="background-color: #00cc90; border:none; text-align:center;" type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="form-check w-50">
		           
                  
								</div>
								
	            </div>
	          </form>
		      </div>
		      <div class="modal-footer justify-content-center">
		      	<p>Have an account? <a href="#" data-toggle="modal" data-target="#exampleModalCenterUserLogin" data-dismiss="modal">Login</a></p>
		      </div>
		    </div>
		  </div>
		</div>

{{-- // admin pop up model --}}
    <div class="modal user-admin-model fade" id="exampleModalCenterAdminLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="ion-ios-person"><i class="fa-solid fa-user"></i></span>
		      	</div>
		      	<h3   class="text-center mb-4">Admin Sign In</h3>
            <form  action="admin_login" method="post">
              @csrf
		      		<div class="form-group">
		      			<input type="email" name="admin_email" class="form-control rounded-left" placeholder="Email" autocomplete="off">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="admin_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button style="background-color: #00cc90; border:none; text-align:center;" type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="form-check w-50">
		           
                  
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
		      <div class="modal-footer justify-content-center">
		      	{{-- <p>Not a member? <a href="user-signup-model" data-toggle="modal" data-target="#exampleModalCenterAdminSignup" data-dismiss="modal">Create an account</a></p> --}}
		      </div>
		    </div>
		  </div>
		</div>

    <script>
      const menuBtn = document.querySelector(".menu-icon span");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const items = document.querySelector(".nav-items");
      const form = document.querySelector("form");
      menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
      cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
      }
      searchBtn.onclick = ()=>{
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
   </script>

<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
var dropdowns = document.getElementsByClassName("dropdown-content");
var i;
for (i = 0; i < dropdowns.length; i++) {
var openDropdown = dropdowns[i];
if (openDropdown.classList.contains('show')) {
  openDropdown.classList.remove('show');
}
}
}
}
</script>
<style>
input[type=submit]{
  background-color: #00cc90;
}

h3{
  color: #00cc90;
  font-weight: bold;
}
  #myDropdown{
    background-color: 000; 
   border-radius: 10px 10px 10px 10px;
  }

  .modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -50px);
    -ms-transform: translate(0, -50px);
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none; }

.modal-dialog-scrollable {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden; }
  .modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    -ms-flex-negative: 0;
    flex-shrink: 0; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: ""; }
  .modal-dialog-centered.modal-dialog-scrollable {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none; }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    color: #000;
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem); }
    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 3.5rem); }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem); }
    .modal-dialog-centered::before {
      height: calc(100vh - 3.5rem); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } 
    }
    .modal-dialog {
  max-width: 450px; }

.modal-content {
  border: none;
  position: relative;
  padding: 0 !important;
  -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); }
  .modal-content .modal-header {
    position: relative;
    padding: 0;
    border: none; }
  .modal-content button.close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0;
    margin: 0;
    width: 40px;
    height: 40px;
    z-index: 1; }
  .modal-content .modal-body {
    border: none; }
    .modal-content .modal-body .icon {
      width: 80px;
      height: 80px;
      border: 1px solid #00cc90;
      border-radius: 50%;
      font-size: 30px;
      margin: 0 auto;
      margin-bottom: 10px; }
      .modal-content .modal-body .icon span {
        color: #00cc90; }
     .modal-content .modal-footer {
    border: none;
    background: #f8f8f8; }

</style>
   
 

  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap'); */

  
  @import url('https://fonts.googleapis.com/css2?family=Sono:wght@400;600&display=swap');

*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  /* font-family: 'Montserrat', sans-serif; */
  font-family: 'Sono', sans-serif;
}





/* Dropdown Button */
.dropbtn {

  
  padding: 1px;
  
  border: none;
  cursor: pointer;

  color: rgb(90, 80, 80);
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #eeeeee;
  text-decoration: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
body{
  background: #f2f2f2;
}
nav{
  background: #eeeeee;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  height: 70px;
  padding: 0 100px;
}
nav .logo{
  color: #007bff;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: -1px;
}
nav .nav-items{
  display: flex;
  flex: 1;
  padding: 0 0 0 100px;
  justify-content: right;
}
nav .nav-items li{
  list-style: none;
  padding: 0 15px;
}
nav .nav-items li a{
  color: #00cc90;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}
nav .nav-items li a:hover{
  color: #00cc50;
}
nav form{
  display: flex;
  height: 40px;
  padding: 2px;
  margin-left: 80px;
  background: #c4c4c4;
  min-width: 18%!important;
  border-radius: 2px;
  border: 1px solid rgba(155,155,155,0.2);
}
nav form .search-data{
  width: 100%;
  height: 100%;
  padding: 0 10px;
  color: rgb(10, 10, 10);
  font-size: 17px;
  border: none;
  font-weight: 500;
  background: none;
}
nav form button{
  padding: 0 15px;
  color: #fff;
  font-size: 17px;
  background: #37641c;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
nav form button:hover{
  background: #66ce6f;
}
nav .menu-icon,
nav .cancel-icon,
nav .search-icon{
  width: 40px;
  text-align: center;
  margin: 0 50px;
  font-size: 18px;
  color: #fff;
  cursor: pointer;
  display: none;
}
nav .menu-icon span,
nav .cancel-icon,
nav .search-icon{
  display: none;
}
@media (max-width: 1245px) {
  nav{
    padding: 0 50px;
  }
}
@media (max-width: 1140px){
  nav{
    padding: 0px;
  }
  nav .logo{
    flex: 2;
    text-align: center;
  }
  nav .nav-items{
    position: fixed;
    z-index: 99;
    top: 70px;
    width: 100%;
    left: -100%;
    height: 100%;
    padding: 10px 50px 0 50px;
    text-align: center;
    background: #14181f;
    display: inline-block;
    transition: left 0.3s ease;
  }
  nav .nav-items.active{
    left: 0px;
  }
  nav .nav-items li{
    line-height: 40px;
    margin: 30px 0;
  }
  nav .nav-items li a{
    font-size: 20px;
    color: #00cc90;
  }
  nav form{
    position: absolute;
    top: 80px;
    right: 50px;
    opacity: 0;
    pointer-events: none;
    transition: top 0.3s ease, opacity 0.1s ease;

  }
  nav form.active{
    top: 95px;
    opacity: 1;
    pointer-events: auto;
 
  }
  nav form:before{
    position: absolute;
    content: "";
    top: -13px;
    right: 0px;
    width: 0;
    height: 0;
    z-index: -1;
    border: 10px solid transparent;
    border-bottom-color: #1e232b;
    margin: -20px 0 0;
  }
  nav form:after{
    position: absolute;
    content: '';
    height: 60px;
    padding: 2px;
    background: #1e232b;
    border-radius: 2px;
    min-width: calc(100% + 20px);
    z-index: -2;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  nav .menu-icon{
    display: block;
    color: #00cc90;
  }
  nav .search-icon,
  nav .menu-icon span{
    display: block;
    color: #00cc90;
  }
  nav .menu-icon span.hide,
  nav .search-icon.hide{
    display: none;
  }
  nav .cancel-icon.show{
    display: block;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  text-align: center;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.space{
  margin: 10px 0;
}
nav .logo.space{
  color: rgb(238, 229, 229);
  padding: 0 5px 0 0;
}
@media (max-width: 980px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 20px;
  }
  nav form{
    right: 30px;
  }
}
@media (max-width: 350px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 10px;
    font-size: 16px;
  }
}

.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.content .space{
  margin: 10px 0;
}

.mySearchBtn{
  color: #00cc90;
}

.mySearchBtn:hover{
  color: #00cc90;
}
</style>