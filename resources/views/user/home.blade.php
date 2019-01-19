@extends('user.layout')

@section('content')
    
    <div class="row mb-4">
        
        <div class="col-md-4">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <span class="card-body-icon">
                        <i class="fa fa-list"></i>
                    </span>
                    <h5 class="card-title">{{ $report->pending()->count() }} Reports Pending</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('report.pending') }}">See now</a>
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
                        <i class="fa fa-sync-alt"></i>
                    </span>
                    <h5 class="card-title">{{ $report->status('processing')->count() }} Reports In Progress</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('report.processing') }}">See now</a>
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
                        <i class="fa fa-archive"></i>
                    </span>
                    <h5 class="card-title">{{ $report->status('archived')->count() }} Cases Completed</h5>
                </div>
                <div class="card-footer">
                    <a class="text-white" href="{{ route('report.archived') }}">See now</a>
                    <span class="fa-pull-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>
        
    </div>

    <h2 class="text-center">Activities Log</h2>
    <section class="table-responsive">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>Time</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach(auth()->user()->activities as $log)
                <tr>
                    <td>{{ $log->created_at->diffForHumans() }}</td>
                    <td>{{ $log->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    

@endsection
