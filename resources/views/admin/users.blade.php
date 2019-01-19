@extends('admin.layout')
@section('content')
    
    <section class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Date Joined</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->created_at->format('d M Y') }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->contact }}
                    </td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{ route('admin.user.show',$user->id) }}">view details</a>
                        <button class="btn btn-sm btn-danger"
                                data-toggle="modal" data-target="#user-{{$user->id}}" >Remove</button>
                    </td>
                </tr>

                <div class="modal fade" id="user-{{$user->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="Confirm to delete" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger">Warning</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>This will permanently delete Member, are you sure you want to delete it</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger"
                                            data-toggle="tooltip" title="Delete Permanently" data-placement="bottom">
                                        Confirm
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            @endforeach
            </tbody>
        </table>
    </section>



@endsection