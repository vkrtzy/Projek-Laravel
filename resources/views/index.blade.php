<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Laksamana Sehat | Portal Utama</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    @include('navbar')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <div class="banner-main">
                    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                        <source src="images/videoweb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle text-center">
                    <h2 class="text-light" style="font-size: 2rem; text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.9);">Selamat Datang di Pusat Pelayanan Kesehatan Bandar Laksamana</h2>
                    <div class="mt-3">
                        <a href="{{ route('auth.login') }}" class="btn btn-primary btn-lg">Masuk</a>
                        <a href="{{ route('auth.register') }}" class="btn btn-primary btn-lg ms-2">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5 mb-5">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('index')}}" class="text-light">Beranda</a></li>
                        <li><a href="{{ url('dokter') }}" class="text-light">Dokter</a></li>
                        <li><a href="{{ url('services') }}" class="text-light">Pelayanan</a></li>
                        <li><a href="{{ url('auth.login') }}" class="text-light">Rujukan</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mt-5 mb-5">
                    <h5>Kontak</h5>
                    <address class="text-light">
                        Kecamatan Bandar Laksamana<br>
                        Kabupaten Bengkalis, 28762<br>
                        Indonesia
                    </address>
                </div>
                <div class="col-lg-4 mt-5 mb-5">
                    <img src="{{ asset('/img/logopuskesmas.png') }}" alt="Logo Bengkalis Sehat" class="img-fluid mb-3" style="max-height: 80px;">
                    <p class="text-light">Bandlak Sehat merupakan website yang berdedikasi untuk memberikan pelayanan kesehatan terhadap warga di kecamatan Bandar Laksamana. Kami berkomitmen untuk selalu membantu warga agar lebih mudah untuk berobat.</p>
                </div>
            </div>
        </div>
    </footer>

    <footer class="bg-body-tertiary text-center py-3">
        <div class="container">
            <p class="text-dark">&copy; 2024 Bandlak Sehat. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>