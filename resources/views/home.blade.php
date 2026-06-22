<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Hello World</h1>
        <p>Selamat datang di aplikasi Laravel!</p>
        
        <div class="home-actions">
            <a href="{{ url('/register') }}" class="btn">Registrasi Akun Baru</a>
        </div>
    </div>
</body>
</html>
