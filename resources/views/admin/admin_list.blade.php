
  @include('admin.admin_master')
  @include('admin.modal_style')

 


 <div class="col-12 col-lg-8">
<nav aria-label="breadcrumb">
  <ol class="col-lg-10 col-md-2 grid-margin breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/admin">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin List</li>
  </ol>
</nav>

<div class="col-lg-10 col-md-2 grid-margin stretch-card">
  <h2 class="mb-4">Admins List</h2>
 
  <div class="card">
    <div class="card-body">
{{-- <h2 class="mb-4">Admin Settings</h2> --}}
<table class="table table-hover table-responsive">
  <thead>
    <tr>
      {{-- <th scope="col">#</th> --}}
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th colspan="4" scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($adminList as $item)
    <tr>
     
      {{-- <th scope="row">{{$item['id']}}</th> --}}
      <td>{{$item['admin_name']}}</td>
      <td>{{$item['admin_email']}}</td>
      {{-- <td><a class="active-my" href={{"update_admin/".$item['id']}}><i class="fa-solid fa-pen-to-square"></i>Update</a></td> --}}
      <td> <button class="openBtn my-btn">  <a href={{"update_admin/".$item['id']}}><i class="fa-solid fa-pen-to-square"></i>Update</a> </button></td>
      <td><a class="active-my myLink" href={{"delete_admin/".$item['id']}}><i class="fa-solid fa-trash"></i>Delete</a></td>
      
    </tr>


    @endforeach
  
  </tbody>
</table>


</div>
</div>
</div>
</div>




<script>
  $(document).ready(function() {
          $('#example').DataTable( {
              responsive: true,
          } );
      } );
</script>




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
