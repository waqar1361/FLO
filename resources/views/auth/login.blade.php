@extends('auth.layout')
@section('content')
    <div class="card card-login mx-auto mt-5">

        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="inputEmail" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="inputPassword" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember Password
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('password.request') }}"> Forgot Your Password?</a>
            </div>
        </div>
    </div>
@endsection
