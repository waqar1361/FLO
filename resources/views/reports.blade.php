@extends('layouts.app')

@section('content')
    
    <section class="container">
        <form action="">
            <div class="form-group form-row">
                
                <div class="col-md-10 col-9">
                    <input id="search" type="text" name="search"
                           class="form-control" value="{{ old('search') }}" placeholder="Search">
                </div>
                <button type="submit" class="col-md-2 col-3 btn btn-success">Search</button>
            </div>
        </form>
        
        <div class="row">
            @foreach($reports  as $report)
                @include('report.card')
            @endforeach
        </div>
        
        @include('layouts.paginate', ['paginator' => $reports])
    </section>

@endsection