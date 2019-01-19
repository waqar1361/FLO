@extends("admin.layout")

@section('content')
    
    <h2>Latest reports of missing people</h2>
    
    @if($reports->count())
        
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Report</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->created_at->diffForHumans() }}</td>
                        <td>{{ $report->status }}</td>
                        <td>{{ $report->type }}</td>
                        <td class="text-right">
                            <a class="btn btn-sm btn-info" href="{{route('admin.report.show',$report->id)}}">Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="card col-4">
            <div class="card-body">
                <h5>Nothing to show yet.</h5>
            </div>
        </div>
    @endif

@endsection