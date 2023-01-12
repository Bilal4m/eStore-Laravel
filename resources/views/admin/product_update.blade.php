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
        <h2 class="mb-4">Update Product</h2>
                 <form class="forms-sample" action="/admin/product_update" method="POST">
                    @csrf
                    <div class="form-group">
                        {{-- <label for="exampleInputUsername1">Admin Name</label> --}}
                        <input type="hidden" name="id" class="form-control" value={{$products['id']}} >
                      </div>
                  <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="name" class="form-control" value={{$products['name']}} >
                  </div>
                  <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" name="price" class="form-control" value={{$products['price']}}  >
                  </div>
                  <div class="form-group">
                    <label for="">Product Category</label>
                    <input type="text" name="category" class="form-control" value={{$products['category']}}  >
                  </div>
                  <div class="form-group">
                    <label for="">Product Photo</label>
                    <input type="text" name="gallery"class="form-control" value={{$products['gallery']}}>
                  </div>
                  <div class="form-group">
                    <label for="">Product Description</label>
                    <input type="text" name="description"class="form-control" value={{$products['description']}}>
                  </div>
                
                 
                  <button type="submit" class="btn btn-primary me-2">Update</button>
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