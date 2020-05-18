<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/admin/login" class="brand-link">
    <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TV guide</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="/admin/login" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(auth()->user()->role == 'superadmin')
        <li class="nav-item">
          <a href="{{ route('admins') }}" class="nav-link {{ Request::is('admins*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Admin</p>
          </a>
        </li>

        @endif

        @if(auth()->user()->role == 'admin'||auth()->user()->role == 'superadmin')
        {{-- <li class="nav-item">
          <a href="{{ route('categories') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="fas fa-sitemap"></i>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Categories</p>
        </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('brands') }}" class="nav-link {{ Request::is('brands*') ? 'active' : '' }}">
            <i class="fas fa-boxes"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Brands</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('sellers') }}" class="nav-link {{ Request::is('sellers*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Sellers</p>
          </a>
        </li> --}}

        <li class="nav-item">
          <a href="{{ route('channels') }}" class="nav-link {{ Request::is('channels*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Channels</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('programs') }}" class="nav-link {{ Request::is('programs*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Programs</p>
          </a>
        </li>
        @else

        <li class="nav-item">
          <a href="{{ route('products') }}" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
            <i class="fas fa-boxes"></i>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Products</p>
          </a>
        </li>

        @endif
      </ul>
    </nav>
  </div>
</aside>