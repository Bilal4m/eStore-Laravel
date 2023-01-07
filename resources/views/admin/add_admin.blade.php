{{-- 
  
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
                  <a class="nav-link" data-toggle="dropdown" href="#">Hi,{{session('admin')['admin_name']}}
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
        </nav> --}}

        @include('admin.admin_master')

        <div class="col-lg-12 col-md-2 main-div">
        <nav aria-label="breadcrumb">
          <ol class="col-lg-8 grid-margin breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Admin</li>
          </ol>
        </nav>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
        <h2 class="mb-4">Add New Admin</h2>
       
                 <form class="forms-sample" action="" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Admin Name</label>
                    <input type="text" name="admin_name" class="form-control" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="admin_email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="admin_password"class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                
                 
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
      </div>
		
      <style>
        .main-div{
          margin-top: 50px;
         
        }
        .col-md-2 {
          float: right !important;
      }
        .card-body{
          background: rgb(247, 243, 243);
        }
        .card{
          max-width: 100%; 
       }
        .breadcrumb{
          background: rgb(206, 201, 201);
          margin-right: 12px;
        }
        
       
      
      
      </style>
      
   