<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="find your lost ones">
    <meta name="author" content="Muhammad Waqar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.title', 'FLO') .' | '.  config('app.name')}}</title>
    
    
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>
<div id="app">
    
    @include('layouts.nav')
    
    <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
        
        <ol class="carousel-indicators">
            @foreach($list as $item)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"
                    class="{{ $loop->index == 0 ? "active": ""}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($list as $item)
                <div class="carousel-item {{ $loop->index == 0 ? "active": ""}}">
                    <img src="/storage/{{ $item->image }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    
    <section class="container my-4">
        <h1>People Missing</h1>
        <hr>
        <div class="row">
            @foreach($reports as $report)
                <article class="col-md-2 my-1">
                    <div class="card">
                        <img src="storage/{{ $report->image }}" class="card-img-top" alt="{{ $report->fullname }}">
                        <div class="card-text card-body">
                            <b>Name:</b><br>
                            {{ $report->fullname }}
                        </div>
                        <div class="card-footer">
                            <a href="{{route('missing.details',$report->id)}}">
                                View details
                            </a>
                            <span class="fa-pull-right"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    
    @include('layouts.footer')

</div>

<script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/datepicker.min.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>
</body>
</html>

<!-- todo:: About and contact -->