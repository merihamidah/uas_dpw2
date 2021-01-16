  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">U'R Funiture </div>
      </a>

      <!-- Divider -->
     <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('beranda') }}" > 
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/produk') }}">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Produk</span></a>
      </li>     
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/test-ajax') }}">
          <i class="fas fa-address-card"></i>
          <span>Alamat Pengiriman</span></a>
      </li>  
       <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/user') }}">
          <i class="fas fa-fw fa-bars"></i>
          <span>User</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Auth</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pages</h6>
            <a class="collapse-item" href="{{ url('login') }}">Login</a>
            <a class="collapse-item" href="{{ url('register') }}">Register</a>
            <a class="collapse-item" href="{{ url('user/client') }}">Halaman Client</a>
          </div>
        </div>
      </li>
     
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>