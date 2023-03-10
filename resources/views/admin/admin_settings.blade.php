@include('admin.admin_master')

<div class="col-lg-12 col-md-2 main-div">
        <nav aria-label="breadcrumb">
          <ol class="col-lg-8 grid-margin breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Settings</li>
          </ol>
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
    