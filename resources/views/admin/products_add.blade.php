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
  </div> --}}

  {{-- //new --}}
  {{-- <div class="modal add-product-model fade" id="ModalAddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body p-4 p-md-5">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="ion-ios-person"><i class="fa-brands fa-product-hunt"></i></span>
          </div>
          <h3 class="text-center mb-4">Add New Product</h3>
          <form class="forms-sample" action="products_add" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" name="name" required class="form-control rounded-left" placeholder="name">
            </div>
            <div class="form-group d-flex">
              <input type="text" name="price" required class="form-control rounded-left" placeholder="price">
            </div>
            <div class="form-group d-flex">
              <input type="text" name="category" required class="form-control rounded-left" placeholder="category">
            </div>
            <div class="form-group d-flex">
              <input type="text" name="gallery" required class="form-control rounded-left" placeholder="gallery">
            </div>
            <div class="form-group d-flex">
              <input type="text" name="description" required class="form-control rounded-left" placeholder="description">
            </div>
            <div class="form-group d-flex">
              <input type="text" name="qty" required class="form-control rounded-left" placeholder="qty">
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Add Product</button>
            </div>
            <div class="form-group d-md-flex">
              <div class="form-check w-50">
             
                
              </div>
             
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-center">
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}


  

    <div class="icon d-flex align-items-center justify-content-center">
      <span class="ion-ios-person"><i class="fa-brands fa-product-hunt"></i></span>
    </div>
    <h3 class="text-center mb-4">Add New Product</h3>
    <form class="forms-sample" action="products_add" method="POST">
      @csrf
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="text" name="price" class="form-control" placeholder="Price" required>
      </div>
      <div class="form-group">
        <input type="text" name="category" class="form-control" placeholder="Category" required>
      </div>
      <div class="form-group">
        <input type="url" name="gallery" class="form-control" placeholder="Pic (url)" required>
      </div>
      <div class="form-group">
        <input type="text" name="description" class="form-control" placeholder="Description" required>
      </div>
      <div class="form-group">
        <input type="text" name="qty" class="form-control" placeholder="Qty" required> 
      </div>
      <div class="form-group">
        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Add Product</button>
      </div>
      <div class="form-group d-md-flex">
        <div class="form-check w-50">
       
          
        </div>
      
      </div>
    </form>
 
 

   