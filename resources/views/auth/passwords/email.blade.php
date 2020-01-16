@extends('backend.layouts.main')

@section('sections')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index.html"><b>Theme</b>Pixel</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
  
      <form method="POST" action="{{ route('password.email') }}">
        @csrf
         <div class="form-group">
           <input placeholder="Enter Email Address" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
           @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
         </div>
        
           <div class="form-group">
           <button type="submit" class="btn btn-success w-100">
               {{ __('Send Password Reset Link') }}
                           </button>
         </div>
        
       </form>
  
    </div>
    <!-- /.login-box-body -->
  </div>
@endsection