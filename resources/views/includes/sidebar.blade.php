<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="/logo.png" width="50" alt="">
        </div>
        <div class="sidebar-brand-text mx-3 text-capitalize">JiTu BPN 35</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <div class="sidebar-heading">
        MAIN
    </div>

    @if (auth()->user()->role != 'petugas')
        <!-- Nav Item - Tables -->
        <li class="nav-item {{ Request::is('permohonan') ? 'active' : '' }}">
            <a class="nav-link" href="/permohonan">
                <i class="fas fa-fw fa-book"></i>
                <span>Permohonan</span></a>
        </li>
    @endif

    <li class="nav-item {{ Request::is('surat-tugas') ? 'active' : '' }}">
        <a class="nav-link" href="/surat-tugas">
            <i class="fas fa-fw fa-book"></i>
            <span>Surat Tugas</span></a>
    </li>

    @if (auth()->user()->role != 'petugas')
        <li class="nav-item {{ Request::is('hasil-ukur') ? 'active' : '' }}">
            <a class="nav-link" href="/hasil-ukur">
                <i class="fas fa-fw fa-book"></i>
                <span>Hasil Ukur</span></a>
        </li>
    @endif

    @if (auth()->user()->role == 'administrator')
        <div class="sidebar-heading">
            SETUP
        </div>

        <li class="nav-item {{ Request::is('user') ? 'active' : '' }}">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span></a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
