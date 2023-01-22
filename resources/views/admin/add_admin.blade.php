

@include('admin.admin_master')
@include('admin.modal_style')

        {{-- <div class="col-lg-12 col-md-2 main-div">
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
                  </div> --}}
                
{{--                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
      </div>
		 --}}
      {{-- <style>
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
       --}}
       <div class="icon d-flex align-items-center justify-content-center">
        <span class="ion-ios-person"><i class="fa-brands fa-product-hunt"></i></span>
      </div>
      <h3 class="text-center mb-4">Add New Admin</h3>
      <form class="forms-sample" action="add_admin" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" name="admin_name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" name="admin_email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" name="admin_password" class="form-control" placeholder="Password">
        </div>
      
        <div class="form-group">
          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Add Admin</button>
        </div>
        <div class="form-group d-md-flex">
          <div class="form-check w-50">
         
            
          </div>
        
        </div>
      </form>
   



   