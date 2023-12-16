<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkalis Sehat | Portal Utama</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
@include('navbar')
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active position-relative">
            <img src="{{ asset('assets/img/puskesmashome.jpg') }}" class="d-block w-100" alt="Puskesmas Tenggayun">
            <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle text-center">
                <h2 class="text-light" style="font-size: 2rem; text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.9);">Selamat Datang di Pusat Pelayanan Kesehatan Tenggayun</h2>
                <p class="text-light" style="font-size: 1.25rem; text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.9);">Silahkan <span>masuk</span> atau <span>daftar</span> untuk melanjutkan pelayanan</p>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-lg">Masuk</a>
                    <a href="#" class="btn btn-primary btn-lg ms-2">Daftar</a>
                </div>
            </div>
        </div>

    </div>
</div>
<footer class="bg-dark text-light mt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 mt-5 mb-5">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-light">Beranda</a></li>
                    <li><a href="{{ url('dokter') }}" class="text-light">Dokter</a></li>
                    <li><a href="{{ url('services') }}" class="text-light">Pelayanan</a></li>
                    <li><a href="{{ url('rujukan') }}" class="text-light">Rujukan</a></li>
                </ul>
            </div>
            <div class="col-lg-4 mt-5 mb-5">
                <h5>Kontak</h5>
                <address class="text-light">
                    Jalan Contoh No. 123<br>
                    Kota Contoh, 12345<br>
                    Indonesia
                </address>
            </div>
            <div class="col-lg-4 mt-5 mb-5">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Bengkalis Sehat" class="img-fluid mb-3" style="max-height: 80px;">
                <p class="text-light">Bengkalis Sehat merupakan website yang berdedikasi untuk memberikan pelayanan kesehatan terhadap warga di kecamatan Bandar Laksamana. Kami berkomitmen untuk selalu membantu warga agar lebih mudah untuk berobat.</p>
            </div>
        </div>
    </div>
</footer>

<footer class="bg-body-tertiary text-center py-3">
    <div class="container">
        <p class="text-dark">&copy; 2023 Bengkalis Sehat. All rights reserved.</p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>