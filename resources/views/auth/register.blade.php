@extends('layouts.app')

@section('content')

<script>
$(document).ready(function(){
    $('#termsandcondution').change(function(){
        $('#btn').prop('disabled', function(i, v) { return !v; });
    });
});
</script>

<div style="background-color:#30c8d6">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
           
            <div class="card">
                <div class="card-header">Create My TutoHub Account</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <a href="{{ url('/redirect') }}" class="btn btn-primary d-block"><i class="fa fa-google"></i> Google</a>

                        <div class="row my-2">
<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">OR</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
                        </div>
                        <div class="form-group row d-none">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input type="text" value=1 class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="termsandcondution" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="terms">
                                        By signing up you agree to our <a href="#terms-txt" data-toggle="modal" data-target="#terms-txt">terms and conditions</a>, <a href="#">safety policy</a>
                                         
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control" id="btn" disabled>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div>
@endsection