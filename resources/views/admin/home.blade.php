@extends('admin.layout')
@section('content')
    <div class="row mb-4">
        
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <span class="card-body-icon">
                        <i class="fa fa-user"></i>
                    </span>
                    <h5 class="card-title">{{ $members }} Members</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('admin.user.list') }}">See now</a>
                    <span class="fa-pull-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <span class="card-body-icon">
                        <i class="far fa-list-alt"></i>
                    </span>
                    <h5 class="card-title">{{ $reports }} Reports</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('admin.reports') }}">See now</a>
                    <span class="fa-pull-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <span class="card-body-icon">
                        <i class="fa fa-question"></i>
                    </span>
                    <h5 class="card-title">{{ $inquiries }} Inquiries</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('inquiry.index') }}">See now</a>
                    <span class="fa-pull-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>
    
    </div>
    @if($logs->count())
        <h2 class="text-center">Activities</h2>
        <section class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Time</th>
                    <th>Member</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('admin.user.show',$log->user->id) }}">{{ $log->user->fullname }}</a></td>
                        <td>{{ $log->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    @endif
@endsection