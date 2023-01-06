
  
  @include('admin.style')
  @include('admin.links')
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/admin/admin_list">Admin List</a>
                </li>
                <li>
                    <a href="/admin/add_admin">Add New Admin</a>
                </li>
                <li>
                    <a href="/admin/admin_list">Manage Admin</a>
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
                      <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
                      <li><a href="/admin/admin_logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                      
                    </ul>                
                </li>
               
              </ul>
            </div>
          </div>
        </nav>

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
        <h2 class="mb-4">Admin Settings</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th colspan="4" scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>

            {{-- @foreach ($adminprofile as $item) --}}
            <tr>
              <td>{{session('admin')['id']}}</td>
              <td>{{session('admin')['admin_name']}}</td>
              <td>{{session('admin')['admin_email']}}</td>
              {{-- <th scope="row">{{$item['id']}}</th>
              <td>{{$item['admin_name']}}</td>
              <td>{{$item['admin_email']}}</td> --}}
              <td><a class="active-my" href={{"update_admin/".session('admin')['id']}}><i class="fa-solid fa-pen-to-square"></i>Update</a></td>
              <td><a class="active-my" href={{"delete_admin/".session('admin')['id']}}><i class="fa-solid fa-trash"></i>Delete</a></td>
             
            </tr>
            {{-- @endforeach --}}
          
          </tbody>
        </table>
      </div>
		</div>
		</div>
		</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
<style>
    .active-my
    {
      background: transparent;
      color: #f8b739;
    }
      .card .card-body {
    padding: 1.5rem 1.5rem;
}
.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
}
.card{
  position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: rgb(243, 240, 240);
    background-clip: border-box;
    border: 1px solid #e3e3e3;
    border-radius: 20px;
}


</style>
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

