<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password | {{ $data_email['name'] }}</title>
    <style>
        a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 10px;
            background: #006aff;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Halo {{ $data_email['name'] }}</h1> <br>
    <p>Silahkan klik tombol di bawah ini untuk memperbarui passwod Anda</p>
    <a href="http://localhost:8000/update-password/{{ base64_encode($data_email['id']) }}">Click Here</a>
</body>

</html>
