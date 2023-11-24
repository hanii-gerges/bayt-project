<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <svg width=50 height=50 xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26.19 5.56'><path fill='#fff' fill-rule='evenodd' d='M11.97 4.8c-.25 0-.45-.23-.45-.52 0-.3.2-.5.45-.5h2.87v.4a.6.6 0 0 1-.58.62zm2.29-3.56h-3.48v.77h3.48c.33-.01.6.26.58.62V3h-2.87c-.66 0-1.19.56-1.2 1.27.01.7.54 1.28 1.2 1.28h2.29c.74 0 1.32-.63 1.33-1.39V2.63c-.01-.77-.59-1.4-1.33-1.39zm5.9 0h.74v2.91c-.01.78-.6 1.4-1.35 1.4h-3.4V4.8h3.4c.33 0 .6-.3.6-.65V3.8h-2.67c-.74 0-1.33-.64-1.33-1.42V1.24h.75v1.13c-.01.35.25.64.57.64h2.69zM6.73 4.8c-.32 0-.58-.28-.59-.63v-.39h2.9c.24 0 .44.2.43.5 0 .29-.19.52-.43.52zm-.59-1.79V1.24H5.4v2.93c0 .76.6 1.39 1.33 1.39h2.31c.65 0 1.18-.58 1.17-1.28 0-.7-.52-1.28-1.17-1.27zm20.05 0v.78H22.2v.36c-.01.36.27.65.6.65h3.38v.76H22.8c-.74 0-1.33-.63-1.34-1.4V1.23h.74v1.77z'/><path fill='#ffd42a' fill-rule='evenodd' d='M0 1.8 2.39.54l2.38 1.24v-.55L2.4 0 0 1.24Z'/></svg>
        </div>
        <div class="sidebar-brand-text mx-3">Bayt Students Hub</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item @if(request()->routeIs('users.index')) active @endif">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Users') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo" style="padding-top: inherit;">
            <i class="fas fa-fw fa-cog"></i>
            <span>Two-level menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Child menu</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline pt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
