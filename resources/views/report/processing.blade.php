@extends("user.layout")

@section('content')
    @if($reports->count())
        
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Report</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->created_at->format('d-m-Y') }}</td>
                        <td>{{ $report->fullname }}</td>
                        <td>{{ $report->age }} years old</td>
                        <td>{{ $report->gender }}</td>
                        <td>{{ $report->type }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <form action="{{ route('report.completed',$report->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button class="btn btn-sm btn-success">
                                        {{--<i class="fa fa-archive"></i>--}}
                                        Complete
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-info" href="{{route('report.show',$report->id)}}">
                                    Details
                                </a>
                            </div>
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