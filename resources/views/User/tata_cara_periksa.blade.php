@extends('layouts.app')
@section('title', 'Tata cara melakukan pemeriksaan')

@section('content')
  <div class="container">
    <div class="row mt-3 d-flex justify-content-center align-items-center">
      <div class="col-md-4">
        <img src="{{ asset('assets/img/character-07.png') }}" alt="" class="w-100">
      </div>
      <div class="col-md-8">
        <h2 class="fw-semibold">Tatacara melakukan pemeriksaan</h2>
        <ul>
          <li class="fs-5">Klik tombol <b>Lakukan Pemeriksaan</b> di bawah ini</li>
          <li class="fs-5">Masukkan salah satu jari ke dalam alat pengecekan</li>
          <li class="fs-5">Klik tombol <b>Simpan</b> untuk menyimpan hasil pengecekan</li>
          <li class="fs-5">Klik tombol <b>Reset</b> untuk mengulang dan tidak penyimpan hasil pemeriksaan</li>
        </ul>


        <form action="/app/checkup/start" method="POST" class="w-100">
          @csrf
          <button type="submit"
            class="text-decoration-none d-inline-block text-secondary mt-3 btn-hero border-0 bg-transparent">
            <div class="bg-white p-2 rounded-pill shadow fw-semibold px-2 d-flex align-items-center">
              <div class="mx-3">Lakukan Pemeriksaan</div>
              <span class="bg-main rounded-pill d-inline-block d-flex align-items-center justify-content-center"
                style="padding: 3px 13px; font-size: 17pt;">></span>
            </div>
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection
