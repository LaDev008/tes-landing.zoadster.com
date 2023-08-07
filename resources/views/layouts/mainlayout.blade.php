<!doctype html>
<html lang="en">

<head>
    <title>Livedraw Sydney, Singapore, Hongkong Tercepat | </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('css.style')
    @livewireStyles
</head>

<body class="g-0 container-fluid bg-black">
    <header class="row g-0">
        <div
            class="d-flex justify-content-center align-items-center flex-column-reverse flex-lg-column col-12 col-lg-8 text-center mx-auto mt-lg-3 gap-lg-4">
            <a href="{{ route('home') }}">
                <img src="{{ $page->logo }}" alt="Logo Nana4D" class="main-logo d-none d-lg-block">
            </a>
            <label class="main-title">Livedraw Togel Online SDY, SGP dan HK Tercepat Di Indonesia</label>
            <nav class="navbar navbar-dark  sticky-top w-100 navbar-expand-lg fs-4 bg-gradient border_semi_round">
                <div class="container-fluid position-relative d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="d-lg-none">
                        <img src="{{ $page->logo }}" alt="Logo Nana4D" height="60px">
                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mainNavbar" aria-controls="mainNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark text-start" tabindex="-1" id="mainNavbar"
                        aria-labelledby="mainNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="{{ route('home') }}">
                                <img src="{{ $page->logo }}" alt="" height="40px">
                            </a>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Livedraw</a>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                        <a class="dropdown-item text-white"
                                            href="{{ route('livedraw.sydney') }}">Livedraw Sydney</a>
                                        <a class="dropdown-item text-white"
                                            href="{{ route('livedraw.singapore') }}">Livedraw Singapore</a>
                                        <a class="dropdown-item text-white"
                                            href="{{ route('livedraw.hongkong') }}">Livedraw Hongkong<a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data</a>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                        <a class="dropdown-item text-white" href="{{ route('data.sydney') }}">Data
                                            Sydney</a>
                                        <a class="dropdown-item text-white" href="{{ route('data.singapore') }}">Data
                                            Singapore</a>
                                        <a class="dropdown-item text-white" href="{{ route('data.hongkong') }}">Data
                                            Hongkong</a>
                                        <a class="dropdown-item text-white" href="{{ route('data.macau') }}">Data
                                            Macau</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                        href="{{ route('prediction') }}">Prediksi</a>
                                </li>

                                <li class="nav-item ms-auto">
                                    <a href="{{ route('login') }}" class="nav-link register-button">
                                        LOGIN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="d-flex flex-column gap-2 gap-lg-4 mt-2 px-2 px-lg-0">
        @yield('content')
    </main>

    <div class="separator mt-2">&nbsp;</div>
    <article class="bg-dark col-12 p-4">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et excepturi asperiores, ratione suscipit
            quae
            expedita explicabo porro? Aperiam incidunt sunt eveniet ab qui inventore quaerat voluptate quam laboriosam
            dignissimos?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos laboriosam cupiditate quisquam maxime
            suscipit aliquid laborum fuga modi tempora praesentium.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem at distinctio minima, fugiat sit eveniet
            sequi tenetur debitis perspiciatis! Odio voluptas earum sed numquam praesentium qui quam saepe sit rerum.
        </p>
    </article>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

    @livewireScripts
</body>

</html>
