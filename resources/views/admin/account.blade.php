@extends('layouts.app')
@section('title', ' - Akun Saya')

@section('content')
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="card border-0">
          <div class="card-body d-flex justify-content-center text-center my-3">
            <div class="">
              <div class="border-1 border rounded-pill d-flex justify-content-center align-items-center p-2"
                style="width: 80px; height: 80px;">
                <img src="{{ asset('assets/img/photo-user.png') }}" alt="" class="w-100">
              </div>

              <div>
                <h3>Irfan Yasin</h3>
                <p class="text-center">Pasien</p>
              </div>
              <div>
                <div class="mb-2">
                  <label for=""></label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
