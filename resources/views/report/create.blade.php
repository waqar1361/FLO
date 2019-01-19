@extends('layouts.app')
@section('content')
    <section class="text-center">
        <h2>Have you find or lost someone?</h2>
        <p>Please fill up give forms with valid information, to submit report.</p>
    </section>
    <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-10 m-auto">
            
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Provide Your Information</h4>
                </div>
                <div class="card-body">
                    
                    <div class="form-group row">
                        <label for="reporter_first_name" class="col-md-3 col-form-label text-md-right">First Name : </label>
                        <div class="col-md">
                            <input id="reporter_first_name" type="text"
                                   class="form-control{{ $errors->has('reporter_first_name') ? ' is-invalid' : '' }}"
                                   name="reporter_first_name" value="{{ old('reporter_first_name') }}"
                                   placeholder="Enter First Name">
                            @if ($errors->has('reporter_first_name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('reporter_first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="lastName" class="col-md-3 col-form-label text-md-right">Last Name : </label>
                        <div class="col-md">
                            <input id="lastName" type="text"
                                   class="form-control{{ $errors->has('reporter_last_name') ? ' is-invalid' : '' }}"
                                   name="reporter_last_name" value="{{ old('reporter_last_name') }}"
                                   placeholder="Enter Last Name">
                            @if ($errors->has('reporter_last_name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('reporter_last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label text-md-right">Mobile : </label>
                        <div class="col-md">
                            <input id="contact" type="text"
                                   class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                   name="contact" value="{{ old('contact') }}"
                                   placeholder="Enter Your Mobile Number">
                            @if ($errors->has('contact'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label text-md-right">CNIC : </label>
                        <div class="col-md">
                            <input id="contact" type="text"
                                   class="form-control{{ $errors->has('cnic') ? ' is-invalid' : '' }}"
                                   name="cnic" value="{{ old('cnic') }}"
                                   placeholder="Enter Your CNIC Number">
                            @if ($errors->has('cnic'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cnic') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="address" class="col-md-3 col-form-label text-md-right">Address : </label>
                        <div class="col-md">
                            <input id="address" type="text"
                                   class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                   name="address" value="{{ old('address') }}"
                                   placeholder="Enter address">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4>Enter Details of Missing Person</h4>
                </div>
                <div class="card-body">
                    
                    <div class="form-group row">
                        <label for="type" class="col-md-3 form-check-label text-md-right">Report Type : </label>
                        <div class="col-md " id="type">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="lost" name="type" value="lost" class="custom-control-input" checked>
                                <label class="custom-control-label" for="lost">Lost</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="found" name="type" value="found" class="custom-control-input">
                                <label class="custom-control-label" for="found">Found</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="firstName" class="col-md-3 col-form-label text-md-right">First Name : </label>
                        <div class="col-md">
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                   name="first_name" value="{{ old('first_name') }}"
                                   placeholder="Enter First Name">
                            <small class="form-text text-muted">
                                It's Optional in case you don't know the name
                            </small>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="lastName" class="col-md-3 col-form-label text-md-right">Last Name : </label>
                        <div class="col-md">
                            <input id="lastName" type="text"
                                   class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                   name="last_name" value="{{ old('last_name') }}"
                                   placeholder="Enter Last Name">
                            <small class="form-text text-muted">
                                It's Optional in case you don't know the name
                            </small>
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="age" class="col-md-3 col-form-label text-md-right">Age : </label>
                        <div class="col-md-3">
                            <input id="age" type="text"
                                   class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                   name="age" value="{{ old('age') }}"
                                   placeholder="Enter age">
                            @if ($errors->has('age'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('age') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="missing" class="col-md-3 col-form-label text-md-right">Date missing : </label>
                        <div class="col-md-3">
                            <input id="missing" type="text" date-pick="true"
                                   class="form-control{{ $errors->has('missing_at') ? ' is-invalid' : '' }}"
                                   name="missing_at" value="{{ old('missing_at') }}"
                                   placeholder="Date missing" autocomplete="off">
                            @if ($errors->has('missing_at'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('missing_at') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="gender" class="col-md-3 form-check-label text-md-right">Gender : </label>
                        <div class="col-md " id="gender">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="male" name="gender" value="male" class="custom-control-input" checked>
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="age" class="col-md-3 col-form-label text-md-right">Place : </label>
                        <div class="col-md">
                            <input id="age" type="text"
                                   class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}"
                                   name="place" value="{{ old('place') }}"
                                   placeholder="Place where found or lost">
                            @if ($errors->has('place'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('place') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label text-right">Description : </label>
                        <div class="col-md">
                                <textarea id="description" name="description"
                                          class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                          placeholder="Describe the appearance and details"
                                          rows="4">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <h5 class="col-md-3 col-form-label text-right">Image :</h5>
                        <div class="col-md">
                            <div class="custom-file">
                                <input id="image" type="file" name="image"
                                       class="custom-file-input{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                       value="{{ old('image') }}" placeholder="Enter image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            <small class="form-text text-muted">This is most important one.</small>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary  fa-pull-right">Submit</button>
                    </div>
                
                </div>
            </div>
        
        </div>
    </form>

@endsection