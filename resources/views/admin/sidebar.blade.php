<ul class="sidebar navbar-nav bg-light">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user.list') }}">
            <i class="fas fa-list"></i>
            <span>Members</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user.create') }}">
            <i class="fas fa-plus-circle"></i>
            <span>Member</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reports') }}">
            <i class="far fa-list-alt"></i>
            <span>Reports</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('inquiry.index') }}">
            <i class="fa fa-question"></i>
            <span>Inquiries</span>
        </a>
    </li>
    
</ul>