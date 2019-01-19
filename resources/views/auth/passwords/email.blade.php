@extends('auth.layout')
@section('content')
    <div class="card card-login mx-auto mt-5">

        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="text-center mb-4">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <div class="form-label-group">

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               placeholder="Email Address"
                               value="{{ old('email') }}" required>
                        <label for="email" class="col-form-label ">{{ __('E-Mail Address') }}</label>

                    </div>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Send Password Reset Link') }}
                </button>

            </form>
        </div>
    </div>
@endsection
