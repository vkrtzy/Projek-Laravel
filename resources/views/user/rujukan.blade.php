<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Laksamana Sehat | Rujukan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="130px" height="80px"></img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('user.home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.dokter') }}">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.services') }}">Pelayanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.rujukan') }}">Rujukan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container mt-3">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="container">
        <h4 class="mb-3 text-center">Silahkan Ajukan Rujukan</h4><br> 
        <form action="{{ route('postTambahRujukan') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" required value="{{ Auth::user()->name }}">
                <span class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label">No. KTP</label>
                <input type="text" class="form-control" name="noktp" required value="{{ Auth::user()->noktp }}" readonly>
                <span class="text-danger">
                    @error('noktp')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" required value="{{ old('alamat') }}"></textarea>
                <span class="text-danger">
                    @error('alamat')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Keluhan</label>
                <textarea class="form-control" rows="3" name="keluhan" required value="{{ old('keluhan') }}"></textarea>
                <span class="text-danger">
                    @error('keluhan')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" required value="Bandar Laksamana" readonly>
                <span class="text-danger">
                    @error('kecamatan')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-4">
                <label class="form-label">Desa</label>
                <select class="form-select" name="desa" required value="{{ old('desa') }}">
                    <option selected>Silahkan pilih desa</option>
                    <option>Api-api</option>
                    <option>Bukit Kerikit</option>
                    <option>Parit I api-api</option>
                    <option>Sepahat</option>
                    <option>Tanjung leban</option>
                    <option>Temiang</option>
                    <option>Tenggayun</option>
                </select>
                <span class="text-danger">
                    @error('desa')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-2">
                <label class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kodepos" required value="28762" readonly>
                <span class="text-danger">
                    @error('kodepos')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-12 mb-4">
                <button type="submit" class="btn btn-primary mt-3">Kirim Rujukan</button>
                <a class="btn btn-primary mt-3" href="{{ route('user.hasilRujukan') }} " role="button">Hasil Rujukan</a>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-light mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 mt-5 mb-5">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('user.home') }}" class="text-light">Beranda</a></li>
                        <li><a href="{{ route('user.dokter') }}" class="text-light">Dokter</a></li>
                        <li><a href="{{ route('user.services') }}" class="text-light">Pelayanan</a></li>
                        <li><a href="{{ route('user.rujukan') }}" class="text-light">Rujukan</a></li>
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