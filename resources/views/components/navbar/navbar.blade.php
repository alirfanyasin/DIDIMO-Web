<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{ asset('assets/img/logo-secondary.png') }}" width="120px" alt="logo-didimo" class="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="me-auto"></div>
            <div class="navbar-nav ml-auto">
                <a class="nav-link mx-2 {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                <a class="nav-link mx-2" href="#tentang-kami-section">Tentang Kami</a>
                <a class="nav-link mx-2" href="#layanan-section">Layanan</a>
                <a class="nav-link mx-2 {{ Request::is('artikel') ? 'active' : '' }}"
                    href="#artikel-section">Artikel</a>
                <a class="nav-link mx-2" href="#testimonial-section">Testimonial</a>
                <a class="nav-link mx-2 btn btn-primary px-3" href="#">Masuk</a>
            </div>
        </div>
    </div>
</nav>
