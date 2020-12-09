<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('grafika/icon.png') }}" />

    <meta name="description" content="KW Energy Solutions - to firma, w której stawiamy na optymalizację i zrównoważony rozwój. Dla Nas tworzenie 
        rozwiązań zgodnych z potrzebami rynku jest potężną siłą zapewniającą oszczędności energii, węgla, wody, a w konsekwencji 
        duże oszczędności co się przekłada na zysk." />
    <meta name="author" content="Damian Bohonos" />
    <meta name="copyright" content="Copyright owner" />
    <meta name="keywords"
        content="Panele fotowoltaiczne, Fotowoltaika, Farmy energetyczne, projekty farm fotowoltaicznych, bilans zerowy, 
        energetyka, rozwiązania energetyczne, dystrybucja energii, oświetlenia led, energia czynna, inteligentne liczniki" />
    <meta name="robots" content="follow" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> KW Energy Solutions</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

    <!-- FLICKITY -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel=" stylesheet " href=" https://unpkg.com/flickity-fullscreen@1/fullscreen.css ">
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src=" https://unpkg.com/flickity-fullscreen@1/fullscreen.js "> </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-md py-1" id="nav1">
            <div class="container">
                <div class="col-sm-6 col-12">
                    <div class="row justify-content-center">
                        <img src="grafika/logo.png" alt="logo" style="height: 100px" />
                    </div>
                </div>

                <div class="col-sm-6 col-12">
                    <div class="row justify-content-center">
                        <img src="grafika/techion.png" alt="logo" style="height: 100px" />
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-sm navbar-light bg-white py-0 sticky-top" id="nav2">
            <div class="container">
                <button class="navbar-toggler my-3 ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item py-2 px-3">
                            <a href="{{ url('/') }}" class="nav-link font-weight-bold text-center">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="{{ url('/#about') }}" class="nav-link font-weight-bold text-center">
                                <i class="fas fa-building"></i> O nas
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="{{ url('/#implementation') }}" class="nav-link font-weight-bold text-center">
                                <i class="fas fa-tools"></i> Realizacje
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="{{ url('/#contact') }} " class="nav-link font-weight-bold text-center">
                                <i class="fas fa-envelope"> </i> Kontakt
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="mt-auto">
        <p class="text-center m-0 py-3"> &copy;2020 KW Energy Solutions.
            Wszelkie
            prawa
            zastrzeżone. </p>
    </footer>
</body>

</html>