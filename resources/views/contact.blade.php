@extends("layouts.app")

@section('content')
    <div class="col-8 mx-auto text-justify">
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact US</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('inquiry.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">Email :</label>
                        <div class="col-md-10">
                            <input id="email" type="text" name="email"
                                   class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" value="{{ old('email') }}"
                                   placeholder="Email">
                            @if($errors->has('email'))
                                <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Name :</label>
                        <div class="col-md-10">
                            <input id="name" type="text" name="name"
                                   class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}"
                                   placeholder="Name">
                            @if($errors->has('name'))
                                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="message" class="col-md-2 col-form-label">Message :</label>
                        <div class="col-md-10">
                        <textarea id="message" rows="7" name="message" class="form-control {{ $errors->has('message') ?
                        "is-invalid" : "" }}" placeholder="Message">{{ old('message')}}</textarea>
                            @if($errors->has('message'))
                                <strong class="invalid-feedback">{{ $errors->first('message') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="offset-md-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                
                
                </form>
                <hr>
                <h4>For More Information:</h4>
                <h5>Mobile:
                    <small>03XX-XXXXXXX</small>
                </h5>
            
            </div>
        </div>
    </div>
@endsection