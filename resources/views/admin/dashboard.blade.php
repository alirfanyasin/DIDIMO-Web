@extends('layouts.app')
@section('title', 'Dashboard Admin')

@section('content')
  <section class="container h-100 " id="dashboard">
    <div class="row mt-5 mb-4">
      <h2 class="text-center fw-semibold">Halo, {{ auth()->user()->name }} <br>Selamat Datang di <span
          class="text-main">DIDIMO</span>
      </h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mx-auto">
        <div class="card py-3 border-white">
          <div class="card-body">
            <h5 class="card-title text-center fw-bold">Hasil Cek Terakhir</h5>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-sm-5 ms-auto text-end">
                  <h1 class="text-main fw-semibold fs-1">80</h1>
                </div>
                <div class="col-sm-6 me-auto text-start">
                  <h5 class="fs-6 fw-semibold">mg/dL<br>Normal</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mx-auto">
        <div class="card py-3 border-white">
          <div class="card-body ">
            <h5 class="card-title text-center fw-bold">Cek Selanjutnya</h5>
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
      <div class="col-md-4 mx-auto">
        <div class="card py-3 border-white">
          <div class="card-body ">
            <h5 class="card-title text-center fw-bold">Jumlah Cek</h5>
            <h1 class="text-main text-center fw-semibold">18</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-3 justify-content-center">
      <div class="col-lg-8 my-3 mx-auto">
        <div class="card p-2 h-100 border-white">
          <div class="card-body">
            <h6 class="card-title fw-normal">Statistik</h6>

            <div>
              {!! $checkupChart->container() !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 my-3 mx-auto">
        <div class="card p-3 border-white">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-0 text-center fw-normal">Rekomendasi Makanan Hari Ini</h5>

            <div class="mt-5">
              <div class="d-flex justify-content-beetwen mb-3">
                <div class="bg-secondary rounded-circle mr-2" style="width: 50px; height:50px;">
                  <img src="" alt="" class="rounded-circle" width="50px" height="50px">
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Lorem ipsum dolor sit amet...</small>
                </div>
              </div>
              <div class="d-flex justify-content-beetwen mb-3">
                <div class="bg-secondary rounded-circle mr-2" style="width: 50px; height:50px;">
                  <img src="" alt="" class="rounded-circle" width="50px" height="50px">
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Lorem ipsum dolor sit amet...</small>
                </div>
              </div>
              <div class="d-flex justify-content-beetwen mb-3">
                <div class="bg-secondary rounded-circle mr-2" style="width: 50px; height:50px;">
                  <img src="" alt="" class="rounded-circle" width="50px" height="50px">
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Lorem ipsum dolor sit amet...</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('js-libraries')
  <script src="{{ $checkupChart->cdn() }}"></script>

  {{ $checkupChart->script() }}
@endpush
