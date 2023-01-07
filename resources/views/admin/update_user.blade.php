@include('admin.admin_master')

<div class="col-lg-12 col-md-2 main-div">
        <nav aria-label="breadcrumb">
          <ol class="col-lg-8 grid-margin breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update User</li>
          </ol>
        </nav>
        <div class="col-lg-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
        <h2 class="mb-4">Update User</h2>
                 <form class="forms-sample" action="/admin/update_user" method="POST">
                    @csrf
                    <div class="form-group">
                        {{-- <label for="exampleInputUsername1">Admin Name</label> --}}
                        <input type="hidden" name="id" class="form-control" value={{$user['id']}} id="exampleInputUserid1" >
                      </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">User Name</label>
                    <input type="text" name="user_name" class="form-control" value={{$user['user_name']}} id="exampleInputUsername1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="user_email" class="form-control" value={{$user['user_email']}} id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="user_password"class="form-control" value={{$user['user_password']}}id="exampleInputPassword1" placeholder="Password">
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