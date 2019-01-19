@extends("admin.layout")

@section('content')
    <article class="col-10 mx-auto">
        <div class="card card-300 mb-3">
            <section class="card-img">
                <img src="/storage/{{ $report->image }}" class="card-img-top" alt="{{ $report->fullname }}">
            </section>
            <div class="card-body">
                <h2 class="card-title">Missing</h2>
                <div class="card-text">
                    <h5>Name: {{ $report->fullname }}</h5>
                    <h5>Age: {{ $report->age }} years</h5>
                    <h5>Gender: {{ $report->gender }}</h5>
                    <h5>Location: {{ $report->place }}</h5>
                    <h5>Description:</h5>
                    <p class="text-justify">{{ $report->description }}</p>
                </div>
            </div>
        </div>
    </article>
    
    <article class="col-10 mx-auto">
        <div class="card">
            <div class="card-header"><h4 class="card-title">Reporter's Details </h4></div>
            <div class="card-body">
                
                <p>
                    <b>Name: </b> {{$report->reporter->fullname}}
                </p>
                <p>
                    <b>Contact: </b> {{$report->reporter->contact}}
                </p>
                <p>
                    <b>CNIC: </b> {{$report->reporter->cnic}}
                </p>
                <p>
                    <b>Address: </b> {{$report->reporter->address}}
                </p>
            
            </div>
        
        </div>
    </article>
@endsection