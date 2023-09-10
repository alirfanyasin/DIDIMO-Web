@extends('layouts.app')
@section('title', 'Periksa gula darah dan detak jantung')

@section('content')
  <div class="container" id="periksa">
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card border-0 rounded-3">
          <div class="card-body py-4">
            <h4 class="fw-semibold text-center mb-4">Hasil Gula Darah</h4>
            <h1 class="text-center fw-bold text-main" style="font-size: 70px">{{ $data->gula_darah }}</h1>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 rounded-3">
          <div class="card-body py-4">
            <h4 class="fw-semibold text-center mb-4">Hasil Detak Jantung</h4>
            <h1 class="text-center fw-bold text-main" style="font-size: 70px">{{ $data->detak_jantung }}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center mt-4">
      <div class="col-md-2 d-flex justify-content-center">
        <form action="/app/checkup/cancel/{{ $data->id }}" method="POST" class="w-100">
          @csrf
          <div class="d-grid">
            <button type="submit" class="btn btn-primary border-0">Batal</button>
          </div>
        </form>

      </div>
      <div class="col-md-2 d-flex justify-content-center">
        <form action="/app/checkup/reset/{{ $data->id }}" method="POST" class="w-100">
          @csrf
          <div class="d-grid">
            <button type="submit" class="btn btn-dark border-0">Reset</button>
          </div>
        </form>

      </div>
      <div class="col-md-2">
        <div class="d-grid">
          <a href="/app/dashboard" class="btn btn-success border-0">Simpan</a>
        </div>
      </div>
    </div>

  </div>
@endsection
