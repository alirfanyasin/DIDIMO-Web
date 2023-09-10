<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DIDIMO - @yield('title')</title>

  {{-- Favicon --}}
  <link rel="icon" href="/assets/img/logo-main.png">

  {{-- JQUERY --}}

  {{-- CSS Bootstrap 5 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  {{-- JQuery  --}}
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  {{-- CSS Landing Page --}}
  <link rel="stylesheet" href="/assets/css/app.css" />

  @stack('css-libraries')
</head>

<body>

  {{-- Navbar start --}}
  <x-navbar.navbar />
  {{-- Navbar end --}}

  {{-- Content start --}}
  @yield('content')
  {{-- Content end --}}

  {{-- JS Bootstrap 5 --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  {{-- Font Awesome --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

  @stack('js-libraries')
</body>

</html>
