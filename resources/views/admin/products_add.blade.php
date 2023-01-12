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
    <h2 class="mb-4">Add New Product</h2>
   
             <form class="forms-sample" action="products_add" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputUsername1">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Product Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputUsername1" >
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Product Category</label>
                <input type="text" name="category" class="form-control" id="exampleInputUsername1">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Product Photo</label>
                <input type="text" name="gallery" class="form-control" id="exampleInputUsername1">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Product Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputUsername1">
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