@extends('layouts.app')
@section('title', 'Kontrol Gula Darah Semakin Mudah')

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
            <h5 class="card-title text-center fw-bold">Hasil Periksa Terakhir</h5>
            <div class="row align-items-center justify-content-center">
              <div class="col-6  text-end">
                <h1 class="text-main fw-semibold fs-1">{{ isset($last_check) ? $last_check->gula_darah : '0' }}</h1>
              </div>
              <div class="col-6 text-start">
                <h5 class="fs-6 fw-semibold">mg/dL<br>Normal</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mx-auto">
        <div class="card py-3 border-white">
          <div class="card-body ">
            <h5 class="card-title text-center fw-bold">Periksa Terakhir</h5>
            <div class="row align-items-center justify-content-center">
              @if (isset($next_inspection))
                <div class="col-6 text-end">
                  <h1 class="text-main fw-semibold">{{ date('d', strtotime($next_inspection)) }}</h1>
                </div>
                <div class="col-6">
                  <h5 class="fs-6 fw-semibold ms-0">
                    {{ date('F', strtotime($next_inspection)) }}<br>{{ date('Y', strtotime($next_inspection)) }}</h5>
                </div>
              @else
                <div class="col-12 text-center">
                  {{ $next_inspection }}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mx-auto">
        <div class="card py-3 border-white">
          <div class="card-body ">
            <h5 class="card-title text-center fw-bold">Jumlah Periksa</h5>
            <h1 class="text-main text-center fw-semibold">{{ count($number_of_inspection) }}</h1>
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
                <div class="bg-warning rounded-circle mr-2 d-flex align-items-center justify-content-center"
                  style="width: 50px; height:50px;">
                  <i class="fa-solid fa-bowl-rice fs-3"></i>
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Sarapan</small>
                </div>
              </div>
              <div class="d-flex justify-content-beetwen mb-3">
                <div class="bg-primary text-white rounded-circle mr-2 d-flex align-items-center justify-content-center"
                  style="width: 50px; height:50px;">
                  <i class="fa-solid fa-bowl-rice fs-3"></i>
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Makan Siang</small>
                </div>
              </div>
              <div class="d-flex justify-content-beetwen mb-3">
                <div class="bg-danger text-white rounded-circle mr-2 d-flex align-items-center justify-content-center"
                  style="width: 50px; height:50px;">
                  <i class="fa-solid fa-bowl-rice fs-3"></i>
                </div>
                <div class="mx-2"></div>
                <div>
                  <h6>Lorem Ipsum</h6>
                  <small class="text-secondary">Makan Malam</small>
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
