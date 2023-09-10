@extends('layouts.guest')
@section('title', 'Login')

@section('content')
    <section class="" style="overflow-x: hidden" id="login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="header px-5">
                    <img src="{{ asset('assets/img/logo-main.png') }}" class="mt-3 mx-auto d-block " width="100px">
                    <h1 class="fw-bold mx-5 mt-2 text-center mb-4" id="headerText"><span class="text-main">Selamat</span>
                        Datang</h1>
                    @if (session('message'))
                        <div class="row d-flex justify-content-center m-0">
                            <div class="col-8">
                                <div class="alert {{ session('message') == 'success' ? 'alert-success' : 'alert-danger' }} alert-dismissible fade show"
                                    role="alert">
                                    {{ session('message') == 'success' ? 'Email berhasil terkirim' : 'Email tidak ditemukan' }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('send_email.forgot_password') }}" method="POST"
                        class="row d-flex justify-content-center">
                        @csrf
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email"
                                    class="border-main rounded-3 form-control @error('email') is-invalid @enderror"
                                    id="forgot_password" placeholder="Masukkan Email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn rounded-3 button-main w-100 text-white" type="submit">Kirim Email</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-color" id="login-left">
                    <img src="{{ asset('assets/img/bgGlass.png') }}" style="width: 100vh; right: 0;">
                </div>
            </div>
        </div>
    </section>
@endsection


@push('js-libraries')
    <script>
        var password = document.getElementById('loginPass');
        var eye = document.getElementById('eye');
        var icon = document.getElementById('icon');


        eye.addEventListener('click', () => {
            if (password.type == 'password') {
                password.type = 'text';
                icon.setAttribute('icon', 'iconamoon:eye-off')
            } else {
                password.type = 'password';
                icon.setAttribute('icon', 'uiw:eye-o')
            }
        })
    </script>
@endpush
