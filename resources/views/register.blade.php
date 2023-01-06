@extends('master')
@section('content')

<div class="bg-img">
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
   
  </div>
    @endsection