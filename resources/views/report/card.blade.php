<article class="col-md-3">
    <div class="card mb-3">
        <img src="/storage/{{ $report->image }}" class="card-img-top" alt="{{ $report->fullname }}">
        <div class="card-body card-text">
            {{--<h3 class="card-title text-capitalize">{{ $report->type }}</h3>--}}
            <div class="mb-1">
                <strong>Name: </strong>{{ $report->fullname }}<br>
                <strong>Location:</strong> {{ $report->place }}
            </div>
            
            <a href="{{route('missing.details',$report->id)}}" class="btn btn-sm btn-success"> View details</a>
        </div>
    </div>
</article>