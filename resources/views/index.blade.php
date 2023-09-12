@extends('layouts.guest')
@section('title', 'Kontrol Gula Darah Semakin Mudah')


@section('content')
    <section class="container" id="jumbotron-section">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">Kontrol <span class="text-main">Gula <br> Darah</span> Semakin <br> Mudah</h1>
                <p class="mt-lg-5">Bersama, kita bisa menciptakan masa depan yang lebih baik dan bebas dari risiko kesehatan.
                    Mari mulai hari ini untuk hidup lebih sehat.</p>

                <div class="btn-hero">
                    <x-button.secondary> Lakukan Pengecekan </x-button.secondary>
                </div>

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
                    akurat. Memanfaatkan teknologi Internet of Things (IoT) sebagai alat untuk mengecek gula darah Anda
                    tanpa melukai kulit sama sekali. Di sini, misi kami adalah memberdayakan Anda untuk mengambil kendali
                    penuh atas kesehatan Anda,
                    khususnya terkait kadar gula darah Anda.</p>
                <p>Mengapa memilih Pusat Pengecekan Gula Darah? Kami memiliki berbagai alasan yang akan membuat Anda percaya
                    bahwa Anda berada di tempat yang tepat untuk memenuhi kebutuhan pengecekan gula darah Anda yaitu
                    Teknologi Canggih, Keamanan dan Privasi, Aksesibilitas, Kolaborasi dengan Profesional Kesehatan, Edukasi
                    dan Pemahaman Tentang Kesehatan.</p>
            </div>
        </div>
    </section>



    <section id="layanan-section" class="bg-white py-5">
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


    <section id="artikel-section" class="container py-5">
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

        <div class="row mt-5">
            <div class="col text-center">
                <a href="{{ route('artikel') }}" class="btn btn-primary border-0 ">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>



    <section id="testimonial-section" class="container">
        <header class="mb-5 text-center">
            <h2 class="text-main fw-semibold">Testimonial</h2>
            <h4 class="fw-semibold">Apa kata mereka tentang DIDIMO?</h4>
        </header>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow p-4 rounded-4 h-100 position-relative">
                    <q style="margin-bottom: 70px">
                        Dengan adanya didimo mengecek kesehatan lebih mudah dan lebih fleksibel
                    </q>
                    <div class="profile d-flex align-items-center mt-4 position-absolute" style="bottom: 20px;">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/user-photo.png') }}" alt="" width="40px"
                                height="40px" class="bg-warning rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Username</small>
                                <small class="text-secondary">Pasien</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow p-4 rounded-4 h-100 position-relative">
                    <q style="margin-bottom: 70px">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam dolorum eveniet quasi
                        blanditiis eius possimus, similique vitae consequatur aliquam commodi alias laboriosam accusamus
                        magnam.
                    </q>
                    <div class="profile d-flex align-items-center mt-4 position-absolute" style="bottom: 20px;">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/user-photo.png') }}" alt="" width="40px"
                                height="40px" class="bg-warning rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Username</small>
                                <small class="text-secondary">Pasien</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow p-4 rounded-4 h-100 position-relative">
                    <q style="margin-bottom: 70px">
                        Lorem ipsum dolor sit amet consectetur. Dolorum quae consequuntur et aliquam
                        asperiores, odio maiores perspiciatis id velit autem?
                    </q>
                    <div class="profile d-flex align-items-center mt-4 position-absolute" style="bottom: 20px;">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/user-photo.png') }}" alt="" width="40px"
                                height="40px" class="bg-warning rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Username</small>
                                <small class="text-secondary">Pasien</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow p-4 rounded-4 h-100 position-relative">
                    <q style="margin-bottom: 70px">
                        Lorem ipsum dolor sit amet consectetur. Dolorum quae consequuntur et aliquam
                        asperiores, odio maiores perspiciatis id velit autem?
                    </q>
                    <div class="profile d-flex align-items-center mt-4 position-absolute" style="bottom: 20px;">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/user-photo.png') }}" alt="" width="40px"
                                height="40px" class="bg-warning rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Username</small>
                                <small class="text-secondary">Pasien</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="FAQ-section">
        <header class="mb-5 text-center">
            <h2 class="text-main fw-semibold">FAQ</h2>
            <h4 class="fw-semibold">Apa yang mereka tanyakan tentang DIDIMO?</h4>
        </header>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                              DIDIMO itu apa?
                            </button>
                          </h2>
                          <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              Bagaimana cara menggunakan alat DIDIMO?
                            </button>
                          </h2>
                          <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                              Pasien usia berapa yang boleh menggunakan alat DIDIMO?
                            </button>
                          </h2>
                          <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                              Berapa persen keakuratan alat DIDIMO?
                            </button>
                          </h2>
                          <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                              Apa kelebihan DIDIMO?
                            </button>
                          </h2>
                          <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-footer.footer />

@endsection
