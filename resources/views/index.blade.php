@extends('layouts.nav')

@section('content')

<!-- Front image -->

<section class="position-relative" id="welcome">
    <!-- <div
           class="bgImage"
           style="background-image: url('grafika/welcome2.jpg')"
         ></div>
         <div class="darkening"></div>
         -->
    <div class="h-100 w-100 row mx-auto justify-content-center align-items-center">
        <div class="text-center" id="welcomeText">
            <p class="text">Nowoczesne rozwiązania energetyczne</p>
            <div class="dash mx-auto my-sm-4 my-3"></div>
            <p class="text2" id="text1">Bilans zerowy</p>
            <p class="text2" id="text2">Farmy i instalacje fotowoltaiczne</p>
            <p class="text2" id="text3">
                Optymalizacja kosztów energii elektrycznej
            </p>
            <p class="text2" id="text4">
                Development oraz projekty farm fotowoltaicznych
            </p>
        </div>
    </div>
</section>

<!-- About -->

<section id="about" class="pb-5">
    <h1 class="text-center py-5 font-weight-bold">
        <b style="color: #942127">-</b> O NAS <b style="color: #942127">-</b>
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-10 row p-sm-0 p-2">
                <div class="col-12 col-sm-6">
                    <p class="text-justify mb-5 show-on-scroll aboutTextOpacity1">
                        <b>KW Energy Solutions</b> - to firma, w której stawiamy na
                        optymalizację i zrównoważony rozwój. Dla Nas tworzenie rozwiązań
                        zgodnych z potrzebami rynku jest potężną siłą zapewniającą
                        oszczędności energii, węgla, wody, a w konsekwencji duże
                        oszczędności co się przekłada na zysk.
                    </p>
                    <p class="text-center text-sm-left show-on-scroll aboutTextOpacity1">
                        <b>Naszymi głównymi zagadnieniami są:</b> <br /><b style="color: #942127">-</b>
                        Energia czynna <br /><b style="color: #942127">-</b> Kompensacja
                        mocy biernej <br /><b style="color: #942127">-</b> Dystrybucja
                        energii elektrycznej <br /><b style="color: #942127">-</b>
                        Aukcje on-line <br /><b style="color: #942127">-</b> Paliwo
                        gazowe <br /><b style="color: #942127">-</b> Inteligentne
                        liczniki <br /><b style="color: #942127">-</b> OZE
                        <br />
                        <b style="color: #942127">-</b> Przetargi <br />
                        <b style="color: #942127">-</b>
                        Służebność <br /><b style="color: #942127">-</b> Usługi prawne
                        <br /><b style="color: #942127">-</b> Oświetlenie LED <br /><b style="color: #942127">-</b>
                        Audyty energetyczne
                    </p>
                </div>

                <div class="col-sm-6 col-12 show-on-scroll aboutImageOpacity">
                    <div class="h-100 row justify-content-sm-end justify-content-center align-items-center">
                        <img src="grafika/techionTransparent.png" alt="Logo techion" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="implementation" class="pb-5">
    <h1 class="text-center py-5 font-weight-bold">
        <b style="color: #942127">-</b> REALIZACJE
        <b style="color: #942127">-</b>
    </h1>
    <div class="container mt-5">
        <p class="text-center mb-0 pb-4 show-on-scroll textBottomAnim"> Instalacje fotowoltaiczne</p>
        <p class="text-center mb-0 pb-4 show-on-scroll textBottomAnim"> Farmy fotowoltaiczne</p>
        <p class="text-center mb-0 pb-4 show-on-scroll textBottomAnim"> Redukcja kosztów</p>
        <p class="text-center mb-0 pb-4 show-on-scroll textBottomAnim"> Sprzedaż energii</p>

        <!-- Flickity HTML init -->
        <div class="carousel mb-5">
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/IMG_7115.jpg" alt="Panele fotowoltaiczne">
            </div>
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/IMG_7116.jpg" alt="Układanie paneli fotowoltaicznych">
            </div>
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/zdjecie1.jpeg" alt="Przygotowanie paneli fotowoltaicznych">
            </div>
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/IMG_7120.jpg" alt="Budowa paneli fotowoltaicznych">
            </div>
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/zdjecie2.jpeg" alt="Stelaż pod panele fotowoltaiczne">
            </div>
            <div class="carousel-cell">
                <img src="grafika/strona_główna_realizacje/zdjecie3.jpeg" alt="Pole paneli fotowoltaicznych">
            </div>
        </div>

        <div class="row justify-content-center text-uppercase">
            <a href="{{ url('galeria') }}" class="btn btn-lg mt-3" id="galleryButton"> galeria </a>
        </div>

    </div>
</section>


<script>
    var $carousel = $('.carousel').flickity({
   // options
   contain: true,
   fullscreen: true,
   percentPosition: false,
   lazyLoad: 1,
   });
   
   var $imgs = $carousel.find('.carousel-cell img');
   // get transform property
   var docStyle = document.documentElement.style;
   var transformProp = typeof docStyle.transform == 'string' ?
   'transform' : 'WebkitTransform';
   // get Flickity instance
   var flkty = $carousel.data('flickity');
   
   $carousel.on( 'scroll.flickity', function() {
   flkty.slides.forEach( function( slide, i ) {
     var img = $imgs[i];
     var x = ( slide.target + flkty.x ) * -1/3;
     img.style[ transformProp ] = 'translateX(' + x  + 'px)';
   });
   });
   
</script>

<section id="contact" class="position-relative">
    <h1 class="text-center py-5 font-weight-bold">
        <b style="color: #942127">-</b> KONTAKT
        <b style="color: #942127">-</b>
    </h1>
    <div class="container">

        <div class="bgImage" style="background-image: url('grafika/welcome.jpg')"></div>
        <div class="darkening"></div>

        <div id="info" class="pt-5">
            <p class="show-on-scroll opacityShow">
                <i class="fas fa-envelope-open"></i> &nbsp;
                biuro@kw-energy-solutions.pl
            </p>
            <p class="show-on-scroll opacityShow">
                <i class="fas fa-envelope-open"></i> &nbsp;
                lukasz@kw-energy-solutions.pl
            </p>
            <p class="show-on-scroll opacityShow">
                <i class="fas fa-envelope-open"></i> &nbsp;
                tadeusz@kw-energy-solutions.pl
            </p>
            <p class="show-on-scroll opacityShow">
                <i class="fas fa-envelope-open"></i> &nbsp;
                dariusz@kw-energy-solutions.pl
            </p>
            <p class="show-on-scroll opacityShow"><i class="fas fa-phone"></i> &nbsp; 880 111 960</p>
            <p class="show-on-scroll opacityShow"><i class="fas fa-phone"></i> &nbsp; 513 352 583</p>
            <p class="show-on-scroll opacityShow"><i class="fas fa-phone"></i> &nbsp; 531 007 015</p>
        </div>


        <form action="{{ url('/sendEmail') }}" method="POST" name="emailSend">
            @csrf
            <p>Napisz do nas teraz</p>
            @if ($message = Session::get('send'))
            <div class="alert alert-success alert-block mt-3 text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block mt-3 text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <input type="email" name="email" placeholder="Twój email" id="email" required /><br />
            <div class="valid" id="emailValid"></div>

            <input type="text" name="title" placeholder="Tytuł wiadomości" id="title" required /><br />
            <div class="valid" id="titleValid"></div>

            <textarea placeholder="Treść wiadomości" name="text" id="text" required></textarea>
            <div class="valid" id="textValid"></div>

            <button id="submit" value="Submit" name="formSubmit">
                WYŚLIJ WIADMOŚĆ
            </button>
        </form>
    </div>
    </div>
</section>

<script src="{{ url('js/script.js') }}"> </script>

@endsection