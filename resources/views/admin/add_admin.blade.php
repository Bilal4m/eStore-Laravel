

@include('admin.admin_master')
@include('admin.modal_style')

     
       <div class="icon d-flex align-items-center justify-content-center">
        <span class="ion-ios-person"><i class="fa-solid fa-user-plus"></i></span>
      </div>
      <h3 class="text-center mb-4">Add New Admin</h3>
      <form class="forms-sample" action="add_admin" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" name="admin_name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="admin_email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" name="admin_password" class="form-control" placeholder="Password" required>
        </div>
      
        <div class="form-group">
          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Add Admin</button>
        </div>
        <div class="form-group d-md-flex">
          <div class="form-check w-50">
         
            
          </div>
        
        </div>
      </form>
   



   