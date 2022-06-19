<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  @if (Auth::user()->role == 'siswa')
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/siswa')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('pendaftaran.index') }}">
        <i class="bi bi-person"></i>
        <span>Pendaftaran</span>
      </a>
    </li><!-- End Profile Page Nav -->
  @endif

  @if (Auth::user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/admin') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link " href="{{ route('pendaftaran.admin') }}">
        <i class="bi bi-grid"></i>
        <span>Data Formulir Siswa</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Status Pendaftaran Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Belum Terverifikasi</span>
          </a>
        </li>
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Terverifikasi</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->
  @endif
</ul>

</aside><!-- End Sidebar-->