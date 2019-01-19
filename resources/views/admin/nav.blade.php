<nav class="navbar navbar-expand navbar-dark bg-primary static-top">
    
    <a class="navbar-brand mr-1" href="{{ route('index') }}">
        <img src="{{ asset('favicon.ico') }}" alt="" height="30">
        {{ config('app.name') }}
    </a>
    
    <button class="btn btn-link btn-sm text-light order-1 order-sm-0" id="sidebarToggle" >
        <i class="fas fa-bars"></i>
    </button>
    
    
    <ul class="navbar-nav">
    
    </ul>
    <!-- Navbar Search -->
{{--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">--}}
{{--<div class="input-group">--}}
{{--<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
{{--<div class="input-group-append">--}}
{{--<button class="btn btn-primary" type="button">--}}
{{--<i class="fas fa-search"></i>--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}

<!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            
            <a class="btn btn-sm btn-danger my-2 my-sm-0" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        
        </li>
    </ul>

</nav>
