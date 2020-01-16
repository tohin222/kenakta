@extends('backend.layouts.main')
@section('sections')
<div class="login-box">
    <div class="login-logo">
      <a href="{{ route('home') }}"><b>Theme</b>Pixel</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
  
      <form  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Name"  name="name" required>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          
        </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
            
          </div>
        <div class="row">
          <!-- /.col -->
          
          <!-- /.col -->
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
          </div>
        
          <!-- /.col -->
        </div>
      </form>
  
    </div>
    <!-- /.login-box-body -->
  </div>
@endsection