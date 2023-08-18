<nav class="navbar navbar-expand-lg bg-transparent">
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
                    <a class="nav-link mx-2 {{ Request::is('artikel') ? 'active' : '' }}"
                        href="#artikel-section">Artikel</a>
                    <a class="nav-link mx-2" href="#testimonial-section">Testimonial</a>
                    <a class="nav-link mx-2 btn btn-primary px-3" href="{{ route('login') }}">Masuk</a>
                </div>
            </div>
        @endguest

        @role('admin')
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="me-auto"></div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-link mx-2 {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    <a class="nav-link mx-2" href="#tentang-kami-section">Tentang Kami</a>
                    <a class="nav-link mx-2" href="#layanan-section">Layanan</a>
                    <a class="nav-link mx-2 {{ Request::is('artikel') ? 'active' : '' }}"
                        href="#artikel-section">Artikel</a>
                    <a class="nav-link mx-2" href="#testimonial-section">Testimonial</a>
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
                    <a class="nav-link mx-2 {{ Request::is('app/dashboard') ? 'active' : '' }}"
                        href="/app/dahsboard">Dashboard</a>
                    <a class="nav-link mx-2" href="#">Cek up</a>
                    <a class="nav-link mx-2" href="#layanan-section">Konsultasi</a>
                    <a class="nav-link mx-2 {{ Request::is('artikel') ? 'active' : '' }}"
                        href="#artikel-section">Riwayat</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link mx-2 btn btn-primary px-3">Keluar</button>
                    </form>
                </div>
            </div>
        @endrole
    </div>
</nav>
