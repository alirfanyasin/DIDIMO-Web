<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIDIMO - @yield('title')</title>

    {{-- Favicon --}}
    <link rel="icon" href="/assets/img/logo-main.png">

    {{-- CSS Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- CSS Bootstrap icon --}}
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />
    {{-- JQuery  --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- CSS Landing Page --}}
    <link rel="stylesheet" href="/assets/css/login.css" />
</head>

<body>

    {{-- Content start --}}
    @yield('content')
    {{-- Content end --}}

    {{-- JS Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#loginPass');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'loginPass' ?
                'text' : 'loginPass';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>

</body>

</html>