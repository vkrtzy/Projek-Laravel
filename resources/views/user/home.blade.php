<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Laksamana Sehat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <div class="banner-main">
                    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                        <source src="{{ asset('/images/videoweb.mp4') }}" type="video/mp4">
                    </video>
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="130px" height="80px"></img>
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                        <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="130px" height="80px"></img>
                                    </h5>
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
                </div>
                <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle text-center">
                    <h2 class="text-light" style="font-size: 2rem; text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.9);">Selamat Datang {{ Auth::user()->name }} di Pusat Pelayanan Kesehatan Bandar Laksamana</h2>
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
                        <li><a href="{{ url('index') }}" class="text-light">Beranda</a></li>
                        <li><a href="{{ url('dokter') }}" class="text-light">Dokter</a></li>
                        <li><a href="{{ url('services') }}" class="text-light">Pelayanan</a></li>
                        <li><a href="{{ url('rujukan') }}" class="text-light">Rujukan</a></li>
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
    <script>
        function scrollDown() {
            window.scrollBy({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        }
    </script>


</body>

</html>