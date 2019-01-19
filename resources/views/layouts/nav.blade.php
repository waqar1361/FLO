<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    
    {{--<div class="container">--}}
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('favicon.ico') }}" alt="" height="30">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav m-auto">
                
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('missing') }}">Missing People</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('report.create') }}">Report</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('contact') }}">Contact</a>
                </li>
                
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                
                @auth('admin')
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('admin') }}">Dashboard</a>
                    </li>
                @endauth
                @auth()
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('home') }}">{{ auth()->user()->fullname }}</a>
                    </li>
                @endauth
                @guest('admin')
                    
                    @guest()
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt"></i>
                                Login
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('admin.login') }}">
                                <i class="fas fa-user-lock"></i>
                                Admin
                            </a>
                        </li>
                    @endguest
                
                @endguest
                
            </ul>
        </div>
    {{--</div>--}}

</nav>