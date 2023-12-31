@extends('layouts.guest')
@section('title', 'Kontrol Gula Darah Semakin Mudah')


@section('content')
<section class="background-primary position-relative">
    <div class="grading-upground"></div>
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <header class="align-items-center">
                    <h1 class="text-white">Artikel</h1>
                    <p class="text-white">Rekomendasi makanan dan pola hidup sehat</p>
                </header>
            </div>
        </div>
    </div>
</section>

<section class="container" id="artikel-section">
    <div class="row">
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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
        <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
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

<x-footer.footer />
@endsection