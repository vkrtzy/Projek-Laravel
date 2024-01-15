<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Laksamana Sehat | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .banner-main {
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 90%;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="banner-main">
        <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="200px" height="110px"></img>

        <div class="container mt-3">
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="card-title text-center">Login</h3>
                    <form action="{{ route('postLogin') }}" method="POST">
                        @csrf
                        <div class="form-group mt-4">
                            <label class="text-secondary">Email Anda</label>
                            <input type="email" class="form-control border border-secondary form-control-lg" name="email" required value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                        <div class="form-group mt-1">
                            <label class="text-secondary">Password Anda</label>
                            <input type="password" class="form-control border border-secondary form-control-lg" name="password">
                            <span class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="form-control btn btn-primary mt-5">Login</button>
                    </form>
                    <p class="mt-2 text-center">Belum punya akun? <a href="{{ route('auth.register') }}" style="text-decoration: none">Ayo buat akun!</a></p>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>

</html>