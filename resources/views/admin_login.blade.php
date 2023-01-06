@extends('master')
@section('content')

{{-- @if (Session::has('admin'))
<div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert"></button>
</div>
<span class="text-success"> {{session('admin')}}</span>
    
@endif --}}
<div class="bg-img">
  <div class="content">
      <header>Admin Login</header>
      <form  action="admin_login" method="post">
          @csrf

          <div class="field space">
              <span class="fa-solid fa-envelope"></span>
              <input type="email" name="admin_email"  placeholder="Email Address" >
          </div>
          <div class="field space">
              <span class="fa fa-lock"></span>
              <input type="password" name="admin_password" required placeholder="Password">
          </div>
          <div class="pass">
              
          </div>
          <div class="field">
               <button type="submit" name="submit" class="mybutton btn-block">Login</button> 
          </div>

          {{-- <div class="signup">Don't Have an account?
              <a href="register">Register Now</a>
          </div> --}}
      </form>
  </div>
</div>
 



@endsection