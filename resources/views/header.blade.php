
  
{{-- // navbar section --}}
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fa-solid fa-shop me-2"></i> <strong>E-STORE</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="/">Home</a>
          </li>
         
         
         
          {{-- <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="#">Products</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="register"><i class="fa-solid fa-circle-user me-1"></i> Signup</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="admin_login" target="_blank"><i class="fa-solid fa-circle-user me-1"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1 text-uppercase" href="login" target="_blank"><i class="fa-solid fa-circle-user me-1"></i> Login</a>
          </li>
        
         
        <form action="/search">
          <li class="nav-item">
            <div class="input-group rounded">
              <input type="search" autocomplete="off"class="form-control rounded" name="query" placeholder="Search Product" aria-label="Search" aria-describedby="search-addon" />
              {{-- <span class="input-group-text border-0" id="search-addon"> --}}
                <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
              {{-- </span> --}}
            </div>
          </li>

        </form>
        </ul>
      </div>
    </div>
  </nav>



  <style>

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
  