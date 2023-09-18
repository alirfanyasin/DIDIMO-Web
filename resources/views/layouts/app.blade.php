<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DIDIMO - @yield('title')</title>

  {{-- Favicon --}}
  <link rel="icon" href="/assets/img/logo-main.png">

<<<<<<< HEAD
    {{-- CSS Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- JQuery  --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- CSS Landing Page --}}
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
=======
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
>>>>>>> 80644fc7f117a10bf4d766bfcc8c5a2f4e1e2ca9
</head>

<body>

  {{-- Navbar start --}}
  <x-navbar.navbar />
  {{-- Navbar end --}}

  {{-- Content start --}}
  @yield('content')
  {{-- Content end --}}

<<<<<<< HEAD
    {{-- JS Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="DataTables/datatables.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/b-2.4.1/fc-4.3.0/fh-3.4.0/r-2.5.0/sr-1.3.0/datatables.min.css" rel="stylesheet">


    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
=======
  {{-- JS Bootstrap 5 --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  {{-- Font Awesome --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
>>>>>>> 80644fc7f117a10bf4d766bfcc8c5a2f4e1e2ca9

  @stack('js-libraries')
</body>

</html>