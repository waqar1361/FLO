@extends("user.layout")

@section('content')
    <h2>Cases Completed</h2>
    
    @if($reports->count())
        
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Action</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Report</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>
                            <form action="{{ route('report.destroy',$report->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td>{{ $report->created_at->format('d-m-Y') }}</td>
                        <td><a href="{{route('report.show',$report->id)}}">{{ $report->fullname }}</a></td>
                        <td>{{ $report->age }} years old</td>
                        <td>{{ $report->gender }}</td>
                        <td>{{ $report->type }}</td>
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