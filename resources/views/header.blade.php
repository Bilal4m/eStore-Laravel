
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


{{-- // navbar section --}}
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fa-solid fa-shop me-2"></i> <strong>E-STORE</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      
        <ul class="navbar-nav ms-auto ">
          <form action="/search">
            <li class="nav-item">
              {{-- <div class="input-group rounded">
                <input type="search" autocomplete="off"class="form-control rounded" name="query" placeholder="Search Product" aria-label="Search" aria-describedby="search-addon" /> 
               <button class="btn btn-primary " type="submit"> <i class="fas fa-search"></i>  </button>
                
              </div> --}}

                  
                      <div class="input-group">
                          <input class="form-control border-end-0 border" type="search"  name="query" value="search" id="example-search-input">
                          <span class="input-group-append">
                              <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button submit">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                      </div>
                 
            
              

            </li>
          </form>
          
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="/">Home</a>
          </li>
          @if ($total > 0)
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="/cart_list"><i class="fa-solid fa-cart-shopping me-1"></i>Cart({{$total}})</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="/emptycart"><i class="fa-solid fa-cart-shopping me-1"></i>Cart</a>
          </li>
          @endif
         
        
          @if (Session::has('user')) 
          <li class="nav-item dropdown">
            <a class="nav-link mx-1 text-uppercase dropdown-toggle" data-toggle="dropdown" href="#"> {{session('user')['user_name']}}        
               <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li> 
              @if($totalOrders>0 )
              <li><a href="/myorders">My Orders</a></li> 
              <li><a href="/generate-pdf">View PDF</a></li> 
              @else
              <li><a href="/noOrder">My Orders</a></li> 
            
              @endif
              {{-- <li><a href="/noOrder">My Orders</a></li>  --}}

            </ul>
      
          </li>
          
          {{-- <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="admin_login" target="_blank"><i class="fa-solid fa-circle-user me-1"></i> My Orders</a>
          </li> --}}
          @else 
          <li class="nav-item">
            {{-- <a class="nav-link mx-1 text-uppercase" href="/login"> <i class="fa-solid fa-circle-user me-1"></i>Login</a> --}}
            <a class="nav-link mx-1 text-uppercase" href="/login"  data-toggle="modal" data-target="#exampleModalCenterUserLogin" ><i class="fa-solid fa-circle-user me-1"></i>Login</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="/admin_login"  data-toggle="modal" data-target="#exampleModalCenterAdminLogin" ><i class="fa-solid fa-circle-user me-1"></i>Admin</a>
          </li>
          @endif
          {{-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="register"><i class="fa-solid fa-circle-user me-1"></i> Signup</a>
          </li> --}}
          
          {{-- <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="login" target="_blank"><i class="fa-solid fa-circle-user me-1"></i> Login</a>
          </li> --}}
          

         
        

        </ul>
      </div>
    </div>
  </nav>
  
 

  
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  action="login" method="post">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email Address:</label>
              <input type="email" class="form-control" id="recipient-name" name="user_email">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Password:</label>
              <input type="password" class="form-control" id="recipient-name" name="user_password">
            </div>
           
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="modal-footer" >Don't Have an account?
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalmy" target="_blank" data-whatever="@getbootstrap" data-dismiss="modal">Open modal for @getbootstrap</button>
      </div>
      </form>
      </div>
    </div>
  </div> --}}


 
  
  {{-- <div class="modal fade" id="exampleModalmy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  action="register" method="post">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="user_name">
            </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email Address:</label>
            <input type="email" class="form-control" id="recipient-name" name="user_email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="recipient-name" name="user_password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
      </div>
    </div>
  </div> --}}

		
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
		      			<input type="email" name="user_email" class="form-control rounded-left" placeholder="Email">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="user_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
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
		      			<input type="text" name="user_name" class="form-control rounded-left" placeholder="Username">
		      		</div>
		      		<div class="form-group">
		      			<input type="text" name="user_email" class="form-control rounded-left" placeholder="Email">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="user_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
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
		      	<h3 class="text-center mb-4">Admin Sign In</h3>
            <form  action="admin_login" method="post">
              @csrf
		      		<div class="form-group">
		      			<input type="email" name="admin_email" class="form-control rounded-left" placeholder="Email">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="admin_password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
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

  
<style>
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
      border: 1px solid #fb8691;
      border-radius: 50%;
      font-size: 30px;
      margin: 0 auto;
      margin-bottom: 10px; }
      .modal-content .modal-body .icon span {
        color: #fb8691; }
     .modal-content .modal-footer {
    border: none;
    background: #f8f8f8; }

</style>
   
  <style>

    a{
      color: #fb8691;
    }
    a:active {
  text-decoration: none;
  color: #fb8691;
}
  a:hover{
    color: #fb8691;
    text-decoration: none;
  }

nav {
  font-family: monospace;
}

ul {
  background: rgb(235, 230, 226);
  list-style: none;
  margin: 0;
  padding-left: 0;
}

li {
  color: rgb(24, 22, 22);
  background: #eeeeee;
  display: block;
  float: left;
  padding: .5rem;
  position: relative;
  text-decoration: none;
  transition-duration: 0.5s;
}
  
li a {
  color: rgb(90, 81, 81);
}

li:hover,
li:focus-within {
  background: #c7bfbf;
  cursor: pointer;
}

li:focus-within a {
  outline: none;
}

ul li ul {
  background: rgb(61, 41, 4);
  visibility: hidden;
  opacity: 0;
  min-width: 5rem;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
}

ul li:hover > ul,
ul li:focus-within > ul,
ul li ul:hover,
ul li ul:focus {
   visibility: visible;
   opacity: 1;
   display: block;
}

ul li ul li {
  clear: both;
  width: 100%;
}

    /* navbar section */
    .bg-white {
    background-color: #eee!important;
}
    .navbar-nav{
      margin-left: -10px;
      margin-right: -70px;
    }
    .navbar-brand{
     
      margin-left: -80px;
    }
        a {
    font-size:14px;
    font-weight:700
  }
  .superNav {
    font-size:13px;
  }
  .form-control {
    outline:none !important;
    box-shadow: none !important;
  }
  @media screen and (max-width:540px){
    .centerOnMobile {
      text-align:center
    }
  }



  /* login section css */

  

  </style>
 