<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Personality Test</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">PT</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
          <a href="{{ route('admin') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Master Data</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('datauser') }}">Data Users</a></li>
          </ul>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('datakepribadian') }}">Data Kepribadian</a></li>
          </ul>
        </li>
        <li class="menu-header">Laporan</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Laporan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('laporantes')}}">Laporan Hasil Tes</a></li>
          </ul>
        </li>
  </div>