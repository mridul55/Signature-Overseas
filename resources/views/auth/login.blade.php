@extends('layouts.auth')
@section('title', 'System')
@section('content')
<div class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="{{asset('backend/img/logo.png')}}" alt="logo" width="150" height="100">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-header">
        <h5>User Login</h5>
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your Aplication and enjoy It.</p>
        <div class="input-group mb-3">
            
          </div>
        <form method="POST" action="{{ route('login') }}" id="login">
          @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label font-weight-bold" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
                
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-1">
          @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
          @endif
        </p>
        
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
<!-- /.login-box -->
@endsection
@push('scripts')
<script src="{{ asset('js/auth/login.js') }}"></script>
@endpush