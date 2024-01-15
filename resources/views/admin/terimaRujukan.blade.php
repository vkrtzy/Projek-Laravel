<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin | Penerimaan Rujukan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/quill/quill.snow.css" rel="stylesheet">
    <link href="/quill/quill.bubble.css" rel="stylesheet">
    <link href="/remixicon/remixicon.css" rel="stylesheet">
    <link href="/simple-datatables/style.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="/img/logopuskesmas.png" alt="">
                <span class="d-none d-lg-block">{{ Auth::user()->name }}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route ("admin.home") }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('admin.dokter') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Tambah Dokter</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('admin.services') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Tambah Pelayanan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{ route('admin.rujukan') }}">
                    <i class="bi bi-journal-text"></i><span>Hasil Rujukan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{ route('admin.stats') }}">
                    <i class="bi bi-journal-text"></i><span>Statistik</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('logout') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Logout</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li>
        </ul>

    </aside>


    <main id="main" class="main">

        <div>
            <h1>Penerimaan Rujukan</h1>
            <div class="container">
                <div class="container mt-3">
                    @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Tanggapan</h5>
                                <form action="{{ route('postTerimaRujukan') }}" method="POST" enctype="multipart/form-data">
                                    @foreach($data as $hasil)
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label class="text-secondary mb-2">Nama</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="name" required value="{{ $hasil->name }}">
                                        <span class="text-danger">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">No KTP</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="noktp" required value="{{ $hasil->noktp }}">
                                        <span class="text-danger">
                                            @error('noktp')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Keluhan</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="keluhan" required value="{{ $hasil->keluhan }}">
                                        <span class="text-danger">
                                            @error('keluhan')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Alamat</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="alamat" required value="{{ $hasil->alamat }}">
                                        <span class="text-danger">
                                            @error('alamat')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Kecamatan</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="kecamatan" required value="{{ $hasil->kecamatan }}">
                                        <span class="text-danger">
                                            @error('kecamatan')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Desa</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="desa" required value="{{ $hasil->desa }}">
                                        <span class="text-danger">
                                            @error('desa')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">No Antrian</label>
                                        <input type="number" class="form-control border border-secondary form-control" name="noantrian" required value="{{ old('noantrian') }}">
                                        <span class="text-danger">
                                            @error('noantrian')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="col-md-4">
                                        <label class="form-label">Dokter</label>
                                        <select class="form-select" name="dokter" required value="{{ old('dokter') }}">
                                            <option selected>Pilih Dokter</option>
                                            <option>Dr. Norafreyeni</option>
                                            <option>Dr. Nenni Triana Nana</option>
                                            <option>Dr. Sulastri Susanti</option>
                                            <option>Dr. Edi Sudarto</option>
                                            <option>Dr. Fauziah</option>
                                            <option>Dr. Ratih</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('dokter')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="col-md-4">
                                        <label class="form-label">Ruangan</label>
                                        <select class="form-select" name="ruangan" required value="{{ old('ruangan') }}">
                                            <option selected>Pilih Ruangan</option>
                                            <option>Ruangan pemeriksaan umum</option>
                                            <option>Ruangan pemeriksaan khusus</option>
                                            <option>Ruangan tindakan dan gawat darurat</option>
                                            <option>Ruangan KIA, KB dan imunisasi</option>
                                            <option>Ruangan kesehatan gigi dan mulut</option>
                                            <option>Ruangan persalinan</option>
                                            <option>Ruangan kesehatan anak dan imunisasi</option>
                                            <option>Ruangan rawat inap</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('ruangan')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Waktu</label>
                                        <input type="time" class="form-control border border-secondary form-control" name="jam" value="{{ old('jam') }}">
                                        <span class="text-danger">
                                            @error('jam')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-5">Beri Tanggapan</button>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
            </div>
        </div>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/apexcharts/apexcharts.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/chart.js/chart.umd.js"></script>
    <script src="/echarts/echarts.min.js"></script>
    <script src="/quill/quill.min.js"></script>
    <script src="/simple-datatables/simple-datatables.js"></script>
    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>

</body>

</html>