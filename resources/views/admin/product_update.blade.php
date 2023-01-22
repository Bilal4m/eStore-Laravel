@include('admin.admin_master')
@include('admin.modal_style')


        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person">
            <i class='bx bx-user nav__icon' ></i>
          </span>
        </div>
        <h3 class="text-center mb-4">Update Product</h3>
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
                  <button class="btn btn-light"  data-dismiss="modal">Cancel</button>
                </form>
      
      