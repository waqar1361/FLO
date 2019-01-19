@extends('auth.layout')
@section('content')
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input id="firstName" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       value="{{ old('name') }}" placeholder="First name" required autofocus>
                                <label for="firstName">First name</label>
                            </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" placeholder="Last name"
                                       required="required">
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="Email address" required>
                        <label for="email">Email address</label>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input id="inputPassword" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input id="confirmPassword" type="password" class="form-control"
                                       name="password_confirmation" placeholder="Confirm password" required>

                                <label for="">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
            </div>
        </div>
    </div>
@endsection