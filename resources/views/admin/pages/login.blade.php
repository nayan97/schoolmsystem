@extends('admin.layouts.app')

@section('main-section')

<div class="container">
    <div class="loginbox">
        <div class="login-left">
            <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
        </div>
        <div class="login-right">
            <div class="login-right-wrap">
                <h1>Login</h1>
                <p class="account-subtitle">Access to our dashboard</p>
                
                <!-- Form -->
                <form action="https://dreamguys.co.in/demo/doccure/admin/index.html">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </div>
                </form>
                <!-- /Form -->
                
                <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                <div class="login-or">
                    <span class="or-line"></span>
                    <span class="span-or">or</span>
                </div>
                  
                <!-- Social Login -->
              
                <!-- /Social Login -->
                
                <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
            </div>
        </div>
    </div>
</div>

@endsection