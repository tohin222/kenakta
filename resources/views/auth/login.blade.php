@extends('backend.layouts.main')

@section('sections')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index.html"><b>Theme</b>Pixel</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
  
      <form  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
           <div class="fog-pwd">
                <a href="{{ route('password.request') }}"> Forgot pwd?</a><br><br>
                <a href="{{ route('register') }}"> Not user? Register</a><br>
            </div>
          </div>
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