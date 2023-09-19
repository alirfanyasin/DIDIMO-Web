<nav class="navbar navbar-expand-lg @auth bg-white @endauth @guest
bg-transparent @endguest">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('assets/img/logo-secondary.png') }}" width="120px" alt="logo-didimo" class="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @guest
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="me-auto"></div>
        <div class="navbar-nav ml-auto">
          <a class="nav-link mx-2 {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
          <a class="nav-link mx-2" href="#tentang-kami-section">Tentang Kami</a>
          <a class="nav-link mx-2" href="#layanan-section">Layanan</a>
          <a class="nav-link mx-2 {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
          <a class="nav-link mx-2" href="#testimonial-section">Testimonial</a>
          <a class="nav-link mx-2 btn btn-primary px-3" href="{{ route('login') }}">Masuk</a>
        </div>
      </div>
    @endguest

    @role('admin')
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="me-auto"></div>
        <div class="navbar-nav ml-auto d-flex align-items-center">
          <a class="nav-link mx-2 {{ Request::is('app/admin/dashboard') ? 'active' : '' }}"
            href="/app/admin/dashboard">Dashboard</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/pasien') ? 'active' : '' }}"
            href="/app/admin/pasien">Pasien</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/artikel') ? 'active' : '' }} {{ Request::is('app/admin/artikel/*') ? 'active' : '' }}"
            href="/app/admin/artikel">Artikel</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/konsultasi') ? 'active' : '' }}"
            href="/app/admin/konsultasi">Konsultasi</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <div style="width: 40px; height: 40px;" class="border rounded-circle overflow-hidden p-1">
                <img src="{{ asset('assets/img/photo-user.png') }}" alt="photo user" style="width: 100%;">
              </div>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Akun</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                  @csrf
                  <button type="submit" class="border-0 bg-white text-danger">Keluar</button>
                </form>
              </li>
            </ul>
          </li>

        </div>
      </div>
    @endrole

    @role('user')
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="me-auto"></div>
        <div class="navbar-nav ml-auto d-flex align-items-center">
          <a class="nav-link mx-2 {{ Request::is('app/dashboard') ? 'active' : '' }}" href="/app/dashboard">Dashboard</a>
          <a class="nav-link mx-2 {{ Request::is('app/checkup') ? 'active' : '' }} {{ Request::is('app/checkup/*') ? 'active' : '' }}"
            href="/app/checkup">Periksa</a>
          <a class="nav-link mx-2 {{ Request::is('app/konsultasi') ? 'active' : '' }}"
            href="/app/konsultasi">Konsultasi</a>
          <a class="nav-link mx-2  {{ Request::is('app/history') ? 'active' : '' }}" href="/app/history">Riwayat</a>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <div style="width: 40px; height: 40px;" class="border rounded-circle overflow-hidden p-1">
                <img src="{{ asset('assets/img/photo-user.png') }}" alt="photo user" style="width: 100%;">
              </div>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Akun</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                  @csrf
                  <button type="submit" class="border-0 bg-white text-danger">Keluar</button>
                </form>
              </li>
            </ul>
          </li>
        </div>
      </div>
    @endrole
  </div>
</nav>
