<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('figma/css/style.css') }}">
</head>
<body>

<div class="container-login">

    <div class="login-left">
        <img src="{{ asset('figma/images/image-login.png') }}">
    </div>

    <div class="login-right">

        <div class="logo">
            <img src="{{ asset('figma/images/logo.png') }}">
        </div>

        <div class="login-card">
            <h2>Login</h2>

            @if ($errors->any())
                <p class="error-text">{{ $errors->first() }}</p>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username">

                <label>Kata Sandi</label>
                <input type="password" name="password" placeholder="Masukkan kata sandi">

                <button type="submit" class="btn-login">LOGIN</button>
            </form>

            <p class="register-text">
                Belum punya akun? <a href="/register">Daftar</a>
            </p>
        </div>

    </div>
</div>

</body>
</html>
