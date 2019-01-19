<ul class="sidebar navbar-nav bg-light">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <!-- todo: if have time make profile -->
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="{{ route('user.setting') }}">--}}
            {{--<i class="fas fa-user-cog"></i>--}}
            {{--<span>Settings</span>--}}
        {{--</a>--}}
    {{--</li>--}}
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report.pending') }}">
            <i class="fas fa-list-alt"></i>
            <span>Pending Reports</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report.processing') }}">
            <i class="fas fa-sync-alt"></i>
            <span>Reports in Progress</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report.archived') }}">
            <i class="fas fa-archive"></i>
            <span>Archives</span>
        </a>
    </li>
    
    
</ul>