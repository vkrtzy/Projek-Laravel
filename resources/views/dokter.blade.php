<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Laksamana Sehat | Dokter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
@include('navbar')
<br><br>
    <div class="container mt-5">
        <h3 class="text-center">Dokter Ahli</h3>
        <p class="text-center">Temukan Dokter Ahli</p><br><br>
        @foreach ($dokter as $dokter)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img style="width: 100%" src="{{ asset('/images/' . $dokter->gambar) }}" alt="foto dokter">
                        </div>
                        <div class="col-md-8">
                            <p class="fw-bold">Nama: <span class="fw-normal"> {{ $dokter->name }} </span></p>
                            <p class="fw-bold">Kontak: <span class="fw-normal"> {{ $dokter->email }} </span></p>
                            <p class="fw-bold">Spesialis: <span class="fw-normal"> {{ $dokter->spesialis }} </span></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
<footer class="bg-dark text-light mt-5">
    <div class="container mt-5">
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