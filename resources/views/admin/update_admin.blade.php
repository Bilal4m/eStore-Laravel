@include('admin.admin_master')
@include('admin.modal_style')

		


     
<div class="icon d-flex align-items-center justify-content-center">
  <span class="ion-ios-person">
    <i class='bx bx-user nav__icon' ></i>
  </span>
</div>
<h3 class="text-center mb-4">Update Admin</h3>
             
                       <form class="forms-sample" action="/admin/update_admin" method="POST">
                          @csrf
                          <div class="form-group">
                              {{-- <label for="exampleInputUsername1">Admin Name</label> --}}
                              <input type="hidden" name="id" class="form-control" value={{$admin['id']}} id="exampleInputUsername1" placeholder="Username">
                            </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Admin Name</label>
                          <input type="text" name="admin_name" class="form-control" value={{$admin['admin_name']}} id="exampleInputUsername1" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="admin_email" class="form-control" value={{$admin['admin_email']}} id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="admin_password"class="form-control" value={{$admin['admin_password']}}id="exampleInputPassword1" placeholder="Password">
                        </div>
                      
                       
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button class="btn btn-light"  data-dismiss="modal">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-center">
              {{-- <p>Not a member? <a href="user-signup-model" data-toggle="modal" data-target="#exampleModalCenterAdminSignup" data-dismiss="modal">Create an account</a></p> --}}
            </div>
    