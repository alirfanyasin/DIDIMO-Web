@extends('layouts.guest')
@section('title', 'Kontrol Gula Darah Semakin Mudah')


@section('content')
    <section class="container" id="jumbotron-section">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">Kontrol <span class="text-main">Gula <br> Darah</span> Semakin <br> Mudah</h1>
                <p class="mt-5">Bersama, kita bisa menciptakan masa depan yang lebih baik dan bebas dari risiko kesehatan.
                    Mari mulai hari ini untuk hidup lebih sehat.</p>

                <x-button.secondary>Lakukan Pengecekan</x-button.secondary>

            </div>

            <div class="col-md-6">
                <div><img src="{{ asset('assets/img/bg-hero.png') }}" alt=""></div>
                <img src="{{ asset('assets/img/character-01.png') }}" alt="img-character-1" width="100%">
            </div>
        </div>
    </section>


    <section class="container" id="tentang-kami-section">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/img-1.png') }}" alt="" width="70%">
            </div>
            <div class="col-md-6">
                <header class="mb-4">
                    <h2 class="text-main fw-semibold">Tentang Kami</h2>
                </header>

                <p>Kami dengan bangga mempersembahkan solusi inovatif untuk memantau kesehatan Anda dengan cepat, mudah, dan
                    akurat. Di sini, misi kami adalah memberdayakan Anda untuk mengambil kendali penuh atas kesehatan Anda,
                    khususnya terkait kadar gula darah Anda.</p>
                <p>Mengapa memilih Pusat Pengecekan Gula Darah? Kami memiliki berbagai alasan yang akan membuat Anda percaya
                    bahwa Anda berada di tempat yang tepat untuk memenuhi kebutuhan pengecekan gula darah Anda yaitu
                    Teknologi Canggih, Keamanan dan Privasi, Aksesibilitas, Kolaborasi dengan Profesional Kesehatan Edukasi
                    dan Pemahaman.</p>
            </div>
        </div>
    </section>



    <section id="layanan-section" class="bg-white my-5 py-5">
        <div class="bg-bubble-blur">
            <img src="{{ asset('assets/img/bg-1.png') }}" width="500px" alt="">
            <img src="{{ asset('assets/img/bg-2.png') }}" width="500px" alt="">
        </div>
        <div class="container">
            <div class="row ">
                <header class="mb-5 text-center my-4">
                    <h2 class="text-main fw-semibold">Layanan</h2>
                    <h4 class="fw-semibold">Memberikan layanan yang maksimal</h4>
                </header>
                <div class="col-md-4">

                    <div class="card border-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/icon-food.png') }}" alt="..." width="150px">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Rekomendasi Makanan</h5>
                            <p class="card-text text-secondary">Berawal dari makanan yang sehat maka tubuh juga akan ikut
                                sehat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card border-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/icon-consultation.png') }}" alt="..." width="200px">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Konsultasi Kesehatan</h5>
                            <p class="card-text text-secondary">Layanan konsultasi kesehatan secara gratis kepada siapapun.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card border-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/icon-chart.png') }}" alt="..." width="130px">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Rekap Pemeriksaan</h5>
                            <p class="card-text text-secondary">Merekap hasil pemeriksaan yang telah di lakukan secara
                                berkala.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="artikel-section" class="container my-5 py-5">
        <header class="mb-5 text-center">
            <h2 class="text-main fw-semibold">Artikel</h2>
            <h4 class="fw-semibold">Rekomendasi artikel untuk <br>pola hidup sehat</h4>
        </header>
        <div class="row slick-slider">
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-6.jpg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-7.jpg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Makanan makanan yang manis tapi sehat untuk di konsumsi . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-8.jpeg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-9.jpeg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-2.jpeg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="" class=" h-100">
                    <div class="card rounded-4 position-relative overflow-hidden">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-3.png') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mx-2 col-md-3">
                <a href="">
                    <div class="card rounded-4 position-relative overflow-hidden ">
                        <div class="grading-upgraound"></div>
                        <img src="{{ asset('assets/img/img-4.jpg') }}" class="card-img-top rounded-4" alt="...">
                        <div class="card-title position-absolute m-4" style="bottom: 0">
                            <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>



@endsection
