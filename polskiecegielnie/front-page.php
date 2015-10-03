<?php get_header(); ?>

<main class="container" >

    <div class="banner-first container">


        <div class="description col-md-5 col-md-offset-7 pull-right">

            <h2><b>Witamy na portalu POLSKA CEGŁA</b></h2>
            <p>Zapraszamy do portalu wiedzy o materiałach budowlanych, technologiach wykonywania ścian 
                oraz prezentacji tradycyjnych wyrobów budowlanych od sprawdzonych i wybranych producentów
                certyfikowanych marką Polska Cegła.</p>
            <a href="/index.php/o-nas" class="btn more col-md-4 col-md-offset-8">
                <strong>wiecej ></strong>
            </a>

        </div>
    </div>


    <div class="container">
        <div class="row ">
            <div class=" col-md-3 tile">
                <h2 class="text-center">Masz pytanie?</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/question.png"/>
                <a href="/index.php/zapytaj-eksperta" class="btn more col-md-4 col-md-offset-8">
                    <strong>wiecej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center">Jak zamówić</h2>
                <img  class="container" src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/how_order.png"/> 
                <p class="text-center">Tu dowiesz się jak zamówić produkty</p>
                <a href="/index.php/jak-zamowic" class="btn more col-md-4 col-md-offset-8">
                    <strong>wiecej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center ">Prosty wybor</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/simple_choose.png"/>
                <a href="/index.php/artykuly" class="btn more col-md-4 col-md-offset-8" >
                    <strong>wiecej ></strong>
                </a>
            </div>
        </div>
    </div>
    <div class="banner-second container">


        <div class="description col-md-5 col-md-offset-7">

            <h2><b>Porady</b></h2>
            <p>Tutaj poradzimy jaką wybrać cegłe oraz jak zbudować dom</p>
            <a href="/index.php/o-nas" class="btn more col-md-4 col-md-offset-8">
                wiecej > 
            </a>

        </div>
    </div>

    <div class="panel">


        <div class="row ">
            <div class=" col-md-3 tile">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/Ryszard Belak.png">

                <h2>Ryszard Belak</h2>
                <p>
                    <img src="http://i.imgur.com/uoHCjSK.png" style="height: 2em; background-color: rgba(235, 78, 21,1)"/>
                <quote>Tylko cegła ceramiczna, jest pondczasowa, zdrowa, ekologoczna,  ognioodporna, naturalna, sprawdzona i zawsze modna</quote>
                <img src="http://i.imgur.com/m3HnqqU.png" style="height: 2em; background-color: rgba(235, 78, 21,1)"/>

                </p>
                <a href="/index.php/artykuly/tylko-cegla-ceramiczna-jest-ponadczasowa-zdrowa-ekologiczna-ognioodporna-naturalna-sprawdzona-zawsze-modna" class="btn more col-md-4 col-md-offset-8" >
                    <strong>wiecej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/ArturStawski.png">
                <h2>Artur Stawski</h2>
                <p>
                    <img src="http://i.imgur.com/uoHCjSK.png" style="height: 2em; background-color: rgba(235, 78, 21,1)"/>

                <quote>Jak zbudować dom z ceramiki budowlanej</quote>
                <img src="http://i.imgur.com/m3HnqqU.png" style="height: 2em; background-color: rgba(235, 78, 21,1)"/>
                </p>
                <a href="index.php/artykuly/jak-zbudowac-dom-z-ceramiki-budowlanej-ryszard-belak-artur-stawski" class="btn more col-md-4 col-md-offset-8" >
                    <strong>wiecej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center ">Prosty wybor</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/simple_choose.png"/>
                <a href="/index.php/artykuly" class="btn more col-md-4 col-md-offset-8" >
                    <strong>wiecej ></strong>
                </a>
            </div>
        </div>
    </div>
    <div class="banner-third container">


        <div class="description col-md-5 col-md-offset-7">
            <h2>Kontakt</h2>
            <h4>Adresy:</h4>
            <p><strong>Siedziba Zrzeszenia:</strong><br/>
                37 – 470 Zaklików<br/>
                ul. Słubickiego 27<br/><br/>

                <strong>Biuro Zrzeszenia:</strong><br/>
                23 – 200 Kraśnik<br/>
                Plac Wolności 3<br/><br/>
            </p>
            <h4>Telefony kontaktowe:</h4>
            <p>tel. 81/825-05-31<br/>
                tel. 81/825-38-31<br/><br/>

                E-mail: zrzeszenie@cerbud.org.pl
            </p>

        </div>
    </div>

    <div class="container"> 

        <style type="text/css">
            #map-canvas {

                width:    100%;
                height:   500px;

            }
        </style>

        <div id="map-canvas"></div><!-- #map-canvas -->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true"></script>

        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', gmaps_results_initialize);
            /**
             * Renders a Google Maps centered on Atlanta, Georgia. This is done by using
             * the Latitude and Longitude for the city.
             *
             * Getting the coordinates of a city can easily be done using the tool availabled
             * at: http://www.latlong.net
             *
             * @since    1.0.0
             */
            function gmaps_results_initialize() {
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 7,
                    center: new google.maps.LatLng(51.897, 20.644),
                });

                var dataTable =
                        [
                            {pos: {lat: 50.753836, let: 22.1004131}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fcerbud.aden.pl%2FCMS%2FIMGB%2F192_logo_cerbud.jpg%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3EKrajowe%20Zrzeszenie%20Producent%C3%B3w%20Materia%C5%82%C3%B3w%20Budowlanych%20CERBUD%3C%2Fstrong%3E%3Cbr%20%2F%3E37%E2%80%93470%20%20Zaklik%C3%B3w%3Cbr%20%2F%3E%20ul.%20S%C5%82ubickiego%2027%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.cerbud.org.pl%2F%22%3Ehttp%3A%2F%2Fwww.cerbud.org.pl%2F%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Azrzeszenie%40cerbud.org.pl%22%3Ezrzeszenie%40cerbud.org.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 51.4529037734842, let: 19.6805799007416}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fcerbud.aden.pl%2FCMS%2FIMGB%2F149_jarosty_logo.png%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Jarosty%3C%2Fstrong%3E%3Cbr%20%2F%3E97-310%20Moszczenica%3Cbr%20%2F%3E%20Jarosty%20Ma%C5%82e%2C%20ul.%20Mi%C5%82a%2056%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.jarosty.pl%22%3Ehttp%3A%2F%2Fwww.jarosty.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Abiuro%40jarosty.pl%22%3Ebiuro%40jarosty.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 51.0743661034925, let: 20.2408808517456}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fwww.ceradbud.pl%2Fimages%2Fstories%2Fceradbud_logo16.png%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECERADBUD%20Sp.j.%3C%2Fstrong%3E%3Cbr%20%2F%3E26-230%20Radoszyce%3Cbr%20%2F%3E%20ul.%20Mickiewicza%2022%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.ceradbud.pl%22%3Ehttp%3A%2F%2Fwww.ceradbud.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Abiuro%40ceradbud.pl%22%3Ebiuro%40ceradbud.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.9210403772086, let: 22.1970069408417}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fhoffmanowska.pl%2Fimages%2Fnaglowek_hoff.png%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Hoffmanowska%3C%2Fstrong%3E%3Cbr%20%2F%3E23-200%20Kra%C5%9Bnik%3Cbr%20%2F%3E%20Sp%C5%82awy%20Pierwsze%2C%20Ostrowiecka%2054%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22www.hoffmanowska.pl%22%3Ewww.hoffmanowska.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Ainfo%40hoffmanowska.pl%22%3Einfo%40hoffmanowska.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 52.6378742279435, let: 20.3457260731384}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fcegielnia-szerominek.pl%2Fimages%2Fszerominek.gif%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20%20Szerominek%3C%2Fstrong%3E%3Cbr%20%2F%3E09-100%20Szerominek%3Cbr%20%2F%3E%20Spokojna%206%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.cegielnia-szerominek.pl%22%3Ehttp%3A%2F%2Fwww.cegielnia-szerominek.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Abiuro%40cegielnia-szerominek.pl%22%3Ebiuro%40cegielnia-szerominek.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.5113674361143, let: 21.6041241170799}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Siedleszczany%20%C5%81abuda%20K.i%20M.%20s.c.%3C%2Fstrong%3E%3Cbr%20%2F%3E39-450%20Baran%C3%B3w%20Sandomierski%3Cbr%20%2F%3E%20Siedleszczany%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fcegielniasiedleszczany.pl%22%3Ehttp%3A%2F%2Fcegielniasiedleszczany.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Akawecka_k%40op.pl%22%3Ekawecka_k%40op.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.9040287030055, let: 22.2559627243286}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fwww.iv.pl%2Fimages%2F81867258114620580750.png%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20CEKOBUD%20s.c.%3C%2Fstrong%3E%3Cbr%20%2F%3E23-206%20S%C5%82odk%C3%B3w%20Pierwszy%20173%3Cbr%20%2F%3E%20Str%C3%B3%C5%BCa%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22www.cekobud.pl%22%3Ewww.cekobud.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Acekobud%40wp.pl%22%3Ecekobud%40wp.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.6084321876595, let: 22.0228887723831}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22%2FCMS%2FIMGB%2F363_logo.gif%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Stalowa%20Wola%3C%2Fstrong%3E%3Cbr%20%2F%3E37-464%20Stalowa%20Wola%3Cbr%20%2F%3E%20ul.%20Sandomierska%20157%20%20%28zak%C5%82ad%20ul.%20Zio%C5%82owa%29%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.cegielnia.stalowa-wola.pl%22%3Ehttp%3A%2F%2Fwww.cegielnia.stalowa-wola.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Acegielnia%40pro.onet.pl%22%3Ecegielnia%40pro.onet.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 52.6585024972833, let: 20.3263431787491}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fcegielnia-arcelin.pl%2Fportal%2Fthumb_dfbdc785765c.jpeg%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Mechaniczna%20ST.Morawski%20i%20s-ka%3C%2Fstrong%3E%3Cbr%20%2F%3E09-100%20Arcelin%3Cbr%20%2F%3E%20Arcelin%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fcegielnia-arcelin.pl%2F%22%3Ehttp%3A%2F%2Fcegielnia-arcelin.pl%2F%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Acegielniaarcelin%40op.pl%22%3Ecegielniaarcelin%40op.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.648589721709, let: 20.848274230957}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22%20..%2F..%2FCMS%2FIMGB%2F295_cegielnia_logo.jpg%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Zbigniew%20D%C5%82ugosz%3C%2Fstrong%3E%3Cbr%20%2F%3E26-015%20Pierzchnica%3Cbr%20%2F%3E%20Drugnia%204%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fcegielniadlugosz.pl%22%3Ehttp%3A%2F%2Fcegielniadlugosz.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Azdlugosz%40op.pl%22%3Ezdlugosz%40op.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.899066581758, let: 22.1645749098847}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fwww.trojanowscy.krasnik.pl%2Fpics%2Fmain%2Flogo.jpg%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECegielnia%20Trojanowscy%3C%2Fstrong%3E%3Cbr%20%2F%3E23-200%20Kra%C5%9Bnik%3Cbr%20%2F%3E%20Sp%C5%82awy%20II%2022%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22www.trojanowscy.krasnik.pl%22%3Ewww.trojanowscy.krasnik.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Abiuro%40trojanowscy.krasnik.pl%22%3Ebiuro%40trojanowscy.krasnik.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'},
                            {pos: {lat: 50.9271067150396, let: 22.1871042251587}, description: '%3Cdiv%20style%3D%22width%3A350px%3B%20height%3A120px%3B%22%3E%3Cimg%20alt%3D%22logo%22%20src%3D%22http%3A%2F%2Fpolskacegla.pl%2FCMS%2FIMGB%2F428_Ceramika_KUFEL_logo%20orgi.JPG%22%20style%3D%22margin%3A%205px%2015px%2015px%2015px%3B%20max-height%3A%2050px%3B%20max-width%3A%20280px%3B%20float%3A%20left%3B%22%20%2F%3E%3Cstrong%3ECeramika%20Kufel%3C%2Fstrong%3E%3Cbr%20%2F%3E23-200%20Kra%C5%9Bnik%3Cbr%20%2F%3E%20Suchynia%2C%20ul.%20Podmiejska%2012%3Cbr%20%2F%3E%3Cbr%20%2F%3E%3Ca%20target%3D%22_blank%22%20href%3D%22http%3A%2F%2Fwww.ceramika-kufel.pl%22%3Ehttp%3A%2F%2Fwww.ceramika-kufel.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3Ca%20href%3D%22mailto%3Acegielnia%40ceramika-kufel.pl%22%3Ecegielnia%40ceramika-kufel.pl%3C%2Fa%3E%3Cbr%20%2F%3E%3C%2Fdiv%3E'}
                        ];
                console.log("s")
                for (var a = 0, len = dataTable.length; a < len; a++) {
                    var rec = dataTable[a],
                            pos = rec.pos;

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos.lat, pos.let),
                        map: map
                    });
                }
            }
        </script>
    </div>
</main>

<?php
get_footer();
?>
