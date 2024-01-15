<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="100px" height="60px"></img>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">            
                <img src="{{ asset('/img/logopuskesmas.png') }}" alt="logo bengkalis sehat" width="100px" height="60px"></img>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dokter') }}">Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('services') }}">Pelayanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.login') }}">Rujukan</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>

    