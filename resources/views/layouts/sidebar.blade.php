<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PC STORE</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>User</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('items') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Items</span></a>
  </li>
  <li class="nav-header">Transaction</li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('transaksi.create') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Buat Transaksi</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('transaksi') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Transaksi</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>