<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkalis Sehat | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<center>
<img src="{{ asset('assets/img/logo.png') }}" alt="logo bengkalis sehat" width="300px" height="300px"></img>
</center>
<div class="container d-flex justify-content-center align-itemscenter">
    <div class="card" style="width: 35%">
        <div class="card-body p-4">
            <h3 class="card-title text-center">Login</h3>
        <form>
        @csrf
        <div class="form-group mt-4">
            <label class="text-secondary">Email Anda</label>
            <input type="email" class="form-control border bordersecondary form-control-lg" name="email"><br>
        </div>
        <div class="form-group mt-1">
            <label class="text-secondary">Password Anda</label>
            <input type="password" class="form-control border border-secondary form-control-lg" name="password">
        </div>
            <button type="submit" class=" form-control btn btn-primary mt-5">Login</button>
        </form>
        <p class="mt-2 text-center">Belum punya akun? <a href="{{ route('auth.register') }}" style="text-decoration: none">Ayo buat akun!</a></p>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>