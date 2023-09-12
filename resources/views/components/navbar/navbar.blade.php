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
        <div class="navbar-nav ml-auto">
          <a class="nav-link mx-2 {{ Request::is('app/admin/dashboard') ? 'active' : '' }}"
            href="/app/admin/dashboard">Dashboard</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/pasien') ? 'active' : '' }}"
            href="/app/admin/pasien">Pasien</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/artikel') ? 'active' : '' }}"
            href="/app/admin/artikel">Artikel</a>
          <a class="nav-link mx-2 {{ Request::is('app/admin/konsultasi') ? 'active' : '' }}"
            href="/app/admin/konsultasi">Konsultasi</a>
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="nav-link mx-2 btn btn-primary px-3">Keluar</button>
          </form>
        </div>
      </div>
    @endrole

    @role('user')
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="me-auto"></div>
        <div class="navbar-nav ml-auto">
          <a class="nav-link mx-2 {{ Request::is('app/dashboard') ? 'active' : '' }}" href="/app/dashboard">Dashboard</a>
          <a class="nav-link mx-2 {{ Request::is('app/checkup') ? 'active' : '' }} {{ Request::is('app/checkup/*') ? 'active' : '' }}"
            href="/app/checkup">Periksa</a>
          <a class="nav-link mx-2 {{ Request::is('app/konsultasi') ? 'active' : '' }}"
            href="/app/konsultasi">Konsultasi</a>
          <a class="nav-link mx-2  {{ Request::is('app/history') ? 'active' : '' }}" href="/app/history">Riwayat</a>
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="nav-link mx-2 btn btn-primary px-3">Keluar</button>
          </form>
        </div>
      </div>
    @endrole
  </div>
</nav>
