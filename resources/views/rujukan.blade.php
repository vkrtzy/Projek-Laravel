<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkalis Sehat | Rujukan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
@include('navbar')
<br><br>
<div class="container">
    <h4 class="mb-3">Silahkan Lengkapi Kolom Untuk Melanjutkan Rujukan</h4>
    <form class="row g-3">
    <div class="col-md-6">
        <label for="nama" class="form-label">Nama</label>
        <input type="type" class="form-control" id="nama" placeholder="Silahkan masukkan nama">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">No. KTP</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Silahkan masukkan nomor KTP">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Silahkan masukkan alamat">
    </div>

    <div class="col-md-6">
        <label for="inputCity" class="form-label">Kecamatan</label>
        <input type="text" class="form-control" id="inputCity" value="Bandar Laksamana">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Desa</label>
        <select id="inputState" class="form-select">
        <option selected>Silahkan pilih desa</option>
        <option>Api-api</option>
        <option>Bukit Kerikit</option>
        <option>Parit I api-api</option>
        <option>Sepahat</option>
        <option>Tanjung leban</option>
        <option>Temiang</option>
        <option>Tenggayun</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputCity" class="form-label">Kode Pos</label>
            <input type="text" class="form-control" id="inputCity" value="28762">
        </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cetak Rujukan</button>
    </div>
    </form>
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