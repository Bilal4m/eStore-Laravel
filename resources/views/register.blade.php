@extends('master')
@section('content')

{{-- <div class="bg-img">
    <div class="content">
        <header>Sign Up</header>
        
        <form action="" method="post">
            @csrf
            
            <div class="field">
                <span class="fa-solid fa-user"></span>
                <input type="text" name="user_name" required placeholder="Name">
            </div>

            <div class="field space">
                <span class="fa-solid fa-envelope"></span>
                <input type="email" name="user_email" required name="s_email" placeholder="Email Address" >
            </div>

           
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" name="user_password" class="password" required placeholder="Password" name="s_password">
            </div>

            <br>
            <div class="field">
                
            <button type="submit" name="submit" class="btn-block">Create Account</button> 
            </div>
            
            <div class="signup">Have an account?
                <a href="login">Login Now</a>
            </div>
        </form>
    </div>
</div>
   
  </div> --}}


  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="register" method="post">
                @csrf
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="recipient-name" name="user_name">
                  </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email Address:</label>
              <input type="text" class="form-control" id="recipient-name" name="user_email">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Password:</label>
              <input type="password" class="form-control" id="recipient-name" name="user_password">
            </div>
           
            <div >Don't Have an account?
              <a href="register">Register Now</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
      </div>
    </div>
  </div> --}}
    @endsection