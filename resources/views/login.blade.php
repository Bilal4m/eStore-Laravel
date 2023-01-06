@extends('master')
@section('content')

@include('sweetalert::alert')


<div class="bg-img">
  <div class="content">
      <header>Login</header>
      <form  action="login" method="post">
          @csrf

          <div class="field space">
              <span class="fa-solid fa-envelope"></span>
              <input type="email" name="user_email"  placeholder="Email Address" >
          </div>
          <div class="field space">
              <span class="fa fa-lock"></span>
              <input type="password" name="user_password" required placeholder="Password">
          </div>
          <div class="pass">
              
          </div>
          <div class="field">
               <button type="submit" name="submit" class="mybutton btn-block">Login</button> 
          </div>

          <div class="signup">Don't Have an account?
              <a href="register">Register Now</a>
          </div>
      </form>
  </div>
</div>
 

@endsection


