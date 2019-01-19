@extends('admin.layout')
@section('content')
    
    <section class="col-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Add new Member</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="firstName" type="text"
                                           class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                           name="first_name"
                                           value="{{ old('first_name') }}" placeholder="First name" autofocus>
                                    <label for="firstName">First name</label>
                                    @if ($errors->has('first_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="surName"
                                           class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}"
                                           name="sur_name" placeholder="Sur name">
                                    <label for="surName">Sur name</label>
                                    @if ($errors->has('sur_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sur_name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" placeholder="Email address">
                            <label for="email">Email address</label>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="inputPassword" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" value="{{ old('password') }}" placeholder="Password">
                                    <label for="inputPassword">Password</label>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="confirmPassword" type="password"
                                           class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                           name="password_confirmation" placeholder="Confirm password">
                                    
                                    <label for="confirmPassword">Confirm password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="Date-of-birth" type="text" date-pick="true"
                                           class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                           name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Date of Birth"
                                           autocomplete="off">
                                    <label for="Date-of-birth">Date of Birth</label>
                                    @if ($errors->has('date_of_birth'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="gender" type="text"
                                           class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                           name="gender" value="{{ old('gender') }}" placeholder="Male or Female">
                                    
                                    <label for="gender">Gender</label>
                                    @if ($errors->has('gender'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="contact" type="text"
                                           class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                           name="contact" value="{{old('contact')}}" placeholder="Date of Birth">
                                    <label for="contact">Mobile Number</label>
                                    @if ($errors->has('contact'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input id="cnic" type="text"
                                           class="form-control{{ $errors->has('cnic') ? ' is-invalid' : '' }}"
                                           name="cnic" value="{{ old('cnic') }}" placeholder="Male or Female">
                                    
                                    <label for="cnic">CNIC</label>
                                    @if ($errors->has('cnic'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cnic') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="address" type="text" name="address"
                                   class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                   value="{{ old('address') }}" placeholder="Address">
                            <label for="address">Residence Address</label>
                            @if ($errors->has('address'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-3 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-plus"></i> Add User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection