<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotateF-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
    </li>
    <!-- Divider -->
        <a class="text-white ml-3 d-block mb-3" href="{{ route('pelanggans.create') }}">
            <i class="fas fa-user-plus"></i>
            <span>Regist Pelanggan</span>
        </a>
    <hr class="sidebar-divider d-none d-md-block">
        <a class="text-white ml-3" href="{{ route('pelanggans.create') }}">
            <i class="fas fa-money-bill-wave"></i>
            <span>Transaksi</span>
        </a>
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Page</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            {{-- @isset($outlets)
                @foreach ($outlets as $outlet) --}}
                {{-- <a class="collapse-item" href="{{ route('pakets.byOutlet')}}">{{$outlet->nama}}</a> --}}
                <a class="collapse-item" href="{{ url('/outlet')}}">Outlet</a> 
                <a class="collapse-item" href="{{ url('/paket')}}">Paket</a>
                <a class="collapse-item" href="{{ url('/pengguna')}}">Pengguna</a>
                <a class="collapse-item" href="{{ route('pelanggans.pelanggan')}}">Pelanggan</a>
                <a class="collapse-item" href="">transaksi</a>
                <div class="collapse-divider"></div>    
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>