<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkalis Sehat | Dokter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
@include('navbar')
<div class="container">
    <h3 class="text-center mt-5">Dokter Ahli</h3>
    <p class="text-center">Temukan Dokter Ahli</p>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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