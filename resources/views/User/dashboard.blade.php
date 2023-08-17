@extends('layouts.guest')
@section('title', 'Kontrol Gula Darah Semakin Mudah')

@section('content')
    <section class="container h-100 " id="dashboard">
        <div class="row mt-5 mb-4">
            <h2 class="text-center fw-semibold">Halo, Irfan Yasin<br>Selamat Datang di <span class="text-main">DIDIMO</span>
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mx-auto">
                <div class="card border-white">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Hasil Cek Terakhir</h5>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-sm-5 ms-auto text-end">
                                    <h1 class="text-main fw-semibold">80</h1>
                                </div>
                                <div class="col-sm-6 me-auto text-start">
                                    <h5 class="fs-6 fw-semibold">mg/dL<br>Normal</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto">
                <div class="card border-white">
                    <div class="card-body ">
                        <h5 class="card-title text-center fw-semibold">Cek Selanjutnya</h5>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-sm-5 ms-auto text-end">
                                    <h1 class="text-main fw-semibold">23</h1>
                                </div>
                                <div class="col-sm-6 me-auto text-start">
                                    <h5 class="fs-6 fw-semibold ms-0">Agustus<br>2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto">
                <div class="card border-white">
                    <div class="card-body ">
                        <h5 class="card-title text-center fw-semibold">Jumlah Cek</h5>
                        <h1 class="text-main text-center fw-semibold">18</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-lg-7 my-3 mx-auto">
                <div class="card h-100 border-white">
                    <div class="card-body">
                        <h6 class="card-title fw-normal">Statistik</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3 mx-auto">
                <div class="card border-white">
                    <div class="card-body">
                        <h6 class="card-title mb-0 text-center fw-normal">Rekomendasi Makanan Hari Ini</h6>
                    </div>
                    <div class="profile d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/Ellipse.png') }}" alt="" width="40px" height="40px"
                                class="ms-3 rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Lorem ipsum</small>
                                <small class="text-secondary">Lorem ipsum dolor sit.</small>
                            </div>
                        </div>
                    </div>
                    <div class="profile d-flex align-items-center">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/Ellipse.png') }}" alt="" width="40px" height="40px"
                                class="ms-3 rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Lorem ipsum</small>
                                <small class="text-secondary">Lorem ipsum dolor sit.</small>
                            </div>
                        </div>
                    </div>
                    <div class="profile d-flex align-items-center">
                        <div class="mt-3 d-flex align-items-center">
                            <img src="{{ asset('assets/img/Ellipse.png') }}" width="40px" height="40px"
                                class="ms-3  rounded-pill">
                            <div class="mx-3">
                                <small class="d-block">Lorem ipsum</small>
                                <small class="text-secondary">Lorem ipsum dolor sit.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
