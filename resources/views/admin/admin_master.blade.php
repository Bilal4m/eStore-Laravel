@include('admin.style')
@include('admin.links')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">
          <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a href="#">Home 1</a>
        </li>
        <li>
            <a href="#">Home 2</a>
        </li>
        <li>
            <a href="#">Home 3</a>
        </li>
        </ul>
      </li>
      <li>
          <a href="#">About</a>
      </li>
      <li>
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a href="#">Page 1</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
      </ul>
      </li>
      <li>
      <a href="#">Portfolio</a>
      </li>
      <li>
      <a href="#">Contact</a>
      </li>
    </ul>

    <div class="footer">
        <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://bilal-rasheed.tech/" target="_blank">Bilal Rasheed</a>
    </p>
    </div>

  </div>
</nav>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">{{session('admin')['admin_name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/admin/admin_profile"><i class="fa-solid fa-user"></i>Profile</a></li>
              <li><a href="/admin/admin_settings"><i class="fa-solid fa-gear"></i>Settings</a></li>
              <li><a href="/admin/admin_logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
              
            </ul>                
        </li>
       
      </ul>
    </div>
  </div>
</nav>

{{-- <h2 class="mb-4">Admin Profile</h2> --}}

</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script>
(function($) {

"use strict";

var fullHeight = function() {

$('.js-fullheight').css('height', $(window).height());
$(window).resize(function(){
$('.js-fullheight').css('height', $(window).height());
});

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
});

})(jQuery);

</script>
</body>