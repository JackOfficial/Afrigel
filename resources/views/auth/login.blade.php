@extends('layouts.app')

@section('content')

<style type="text/css">
#eye:hover{
  cursor:pointer;
}
</style>
<div class="container">

    <div class="row mt-5 mb-5">
        <div class="col-md-3">
            
        </div>

        <div class="col-md-6">
                        <div class="card">
                <div class="card-header bg-info text-white">
                TutoHub Account</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">

                                <div class="input-group mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="eye" onclick="pswdToggle()"><a><i class="fas fa-eye"></i></a></span>
                                    </div>
                                  </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-block" style="background-color:#2b546a; color:white;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="my-3">
                <a href="{{ url('/redirect') }}" class="btn btn-primary d-block"><i class="fas fa-google"></i>Continue With Google</a>
            </div>
        </div>

        <div class="col-md-3">
            
        </div>
          
    </div>
</div>

<script>
    var input = document.getElementById("password");
    var text = document.getElementById("text");
    var eye = document.getElementById("eye");
    
    function pswdToggle() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>

@endsection