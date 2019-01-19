@extends('auth.layout')
@section('content')
    <div class="card card-login mx-auto mt-5">

        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <div class="form-label-group">

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email ?? old('email') }}" placeholder="Email Address" required autofocus>
                        <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="form-label-group">

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                              placeholder="New Password" required>
                        <label for="password" class="col-form-label">{{ __('New Password') }}</label>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">

                        <input id="passwordConfirm" type="password" class="form-control" name="password_confirmation"
                              placeholder="Confirm Password" required>
                        <label for="passwordConfirm" class="col-form-label">{{ __('Confirm Password') }}</label>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Reset Password') }}
                </button>

            </form>
        </div>
    </div>
@endsection
