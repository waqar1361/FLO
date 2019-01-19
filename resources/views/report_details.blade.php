@extends('layouts.app')
@section('content')
    <h2 class="text-center">Contact : {{ $report->reporter->contact }}</h2>
    <article class="col-10 mx-auto">
        <div class="card card-300 mb-3">
            <section class="card-img">
                <img src="/storage/{{ $report->image }}" class="card-img-top" alt="{{ $report->fullname }}">
            </section>
            <div class="card-body">
                <h2 class="card-title">{{ $report->type }}</h2>
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
@endsection