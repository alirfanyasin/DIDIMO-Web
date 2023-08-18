@extends('layouts.guest')
@section('title', 'Register')

@section('content')
    <section class="" style="overflow-x: hidden" id="login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="header px-5">
                    <img src="{{ asset('assets/img/logo-main.png') }}" class="mt-3 mx-auto d-block " width="100px">
                    <h1 class="fw-bold mx-5 mt-2 text-center" id="headerText"><span class="text-main">Selamat</span>
                        Datang</h1>

                    <form action="{{ route('register') }}" method="POST" class="row d-flex justify-content-center mt-5">
                        @csrf
                        <div class="col-md-8">
                            <div>
                                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text"
                                    class="border-main rounded-3 form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Masukkan Email" name="name" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="loginEmail" class="form-label mt-3 fw-semibold">Email</label>
                                <input type="email"
                                    class="border-main rounded-3 form-control @error('email') is-invalid @enderror"
                                    id="loginEmail" placeholder="Masukkan Email" name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative">
                                <label for="loginPass" class="form-label mt-3 fw-semibold">Password</label>
                                <input type="password" id="loginPass"
                                    class="border-main rounded-3 form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password" aria-describedby="passwordHelpBlock" name="password">

                                <span id="eye">
                                    <iconify-icon icon="uiw:eye-o" id="icon" class="text-secondary"></iconify-icon>
                                </span>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn rounded-3 button-main w-100 text-white mt-5" type="submit">Daftar</button>
                        </div>
                    </form>

                    <div class="row mt-5">
                        <div class="col text-center">
                            <p class="fs-10 mb-0">Sudah punya akun? <a href="{{ route('login') }}"
                                    class="fs-10 text-main">Masuk</a>
                            </p>
                            <p class="fs-10 ">━━━━ atau masuk dengan ━━━━</p>
                            <a href=""><svg class=".icon-link bg-color rounded-pill"
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                    height="30" viewBox="0 0 48 48" aria-hidden="true">
                                    <path fill="#FFC107"
                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                    </path>
                                    <path fill="#FF3D00"
                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                    </path>
                                    <path fill="#4CAF50"
                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                    </path>
                                    <path fill="#1976D2"
                                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                    </path>
                                </svg>
                                <use xlink:href=""></use>
                                </svg>
                            </a>
                        </div>
                    </div>
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
