<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hasil Rujukan</title>
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
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('/img/logopuskesmas.png') }}" alt="">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user.home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Hasil Rujukan</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main container-z mt-4">
    <br><br>
        <h2 class="d-lg-none">Hasil Rujukan</h2>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">No Antrian</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $index => $hasil_rujukan)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $hasil_rujukan->name }}</td>
                        <td>{{ $hasil_rujukan->keluhan }}</td>
                        <td>{{ $hasil_rujukan->noantrian }}</td>
                        <td>{{ $hasil_rujukan->dokter }}</td>
                        <td>{{ $hasil_rujukan->ruangan }}</td>
                        <td>{{ $hasil_rujukan->jam }}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="/user/cetakRujukan/{{ $hasil_rujukan->id }}">Cetak Rujukan</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

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
