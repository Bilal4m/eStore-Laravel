


        @include('admin.admin_master')

        <div class="col-lg-12 col-md-2 main-div">
        <nav aria-label="breadcrumb">
          <ol class="col-lg-8 grid-margin breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
          </ol>
        </nav>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
        <h2 class="mb-4">Admin Profile</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              
            
              <td> {{session('admin')['id']}} </td>
              <td> {{session('admin')['admin_name']}} </td>
              <td> {{session('admin')['admin_email']}} </td>
           
            </tr>
          </tbody>
        </table>
      </div>
		</div>
		</div>
		</div>
		
   


    <style>
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
    margin-left: -12px;

}

    </style>
  </body>

