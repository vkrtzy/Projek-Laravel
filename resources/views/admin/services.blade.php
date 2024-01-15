<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Pelayanan</title>
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
        <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('admin.services') }}">
          <i class="bi bi-menu-button-wide"></i><span>Tambah Pelayanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{ route('admin.rujukan') }}">
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
    <div>
        <a class="btn btn-success" href="{{ route('admin.tambahLayanan') }}" style="text-decoration: none;">Tambah Data +</a>    
    </div>

  </main>
  <body>
  <table class="table" style="width: 73%; border-collapse: collapse; left: 10px; margin-left: 310px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">isi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $layanan)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                <img style="width: 150px" src="{{ asset('/images/' . $layanan->gambar) }}" alt="foto layanan">
                </td>
                <td scope="row">{{ $layanan->judul }}</td>
                <td>{{ $layanan->isi }}</td>
                <td>
                  <a class="btn btn-outline-danger" href="/admin/deleteLayanan/{{ $layanan->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </body>
  

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