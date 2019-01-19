@extends("admin.layout")

@section('content')
    
    <h2 class="text-center">Inquiries</h2>
    
    <section class="col-8 mx-auto">
        @foreach($inquiries as $inquiry)
            <div class="card mb-2">
                <div class="card-header">
                    <h4 class="card-title">Inquiry
                        <button type="button" class="text-dark close" aria-label="delete"
                                data-toggle="modal" data-target="#Delete-Query-{{ $inquiry->id }}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <p><b>Name : </b>{{ $inquiry->name }}</p>
                    <p><b>Email : </b>{{ $inquiry->email }}</p>
                    <p><b>Message : </b>{{ $inquiry->message }}</p>
                    <button class="btn btn-info" type="button"
                            data-toggle="modal" data-target="#Anwer-Query-{{ $inquiry->id }}">
                        Answer
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="Delete-Query-{{ $inquiry->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="Delete-Query" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Warning</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you really want to <span class="text-danger">Delete</span>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{ route('inquiry.destroy', $inquiry->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="Anwer-Query-{{ $inquiry->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="Answer-Query" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Answer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('inquiry.update', $inquiry->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <textarea id="answer" type="text" name="answer" rows="8"
                                                  class="form-control {{ $errors->has('answer') ? "is-invalid" : "" }}"
                                                  placeholder="Type Your Answer">{{ old('answer') }}</textarea>
                                        @if($errors->has('answer'))
                                            <strong class="invalid-feedback">{{ $errors->first('answer') }}</strong>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        @endforeach
    </section>

@endsection