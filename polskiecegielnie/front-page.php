<?php get_header(); ?>

<main class="container" >

    <div class="banner-first container">


        <div class="description col-md-5 col-md-offset-7 pull-right">

            <h2><b>Witamy na portalu POLSKA CEGŁA</b></h2>
            <p>Zapraszamy do portalu wiedzy o materiałach budowlanych, technologiach wykonywania ścian 
                oraz prezentacji tradycyjnych wyrobów budowlanych od sprawdzonych i wybranych producentów
                certyfikowanych marką Polska Cegła.</p>
            <a href="/index.php/o-nas" class="btn more col-md-4 col-md-offset-8">
                <strong>Więcej ></strong>
            </a>

        </div>
    </div>


    <div class="container">
        <div class="row ">
            <div class=" col-md-3 tile">
                <h2 class="text-center">Masz pytanie?</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/question.png"/>
                <a href="/index.php/zapytaj-eksperta" class="btn more col-md-4 col-md-offset-8">
                    <strong>Więcej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center">Jak zamówić</h2>
                <img  class="container" src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/how_order.png"/> 
                <p class="text-center">Tu dowiesz się jak zamówić produkty</p>
                <a href="/index.php/jak-zamowic" class="btn more col-md-4 col-md-offset-8">
                    <strong>Więcej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center ">Prosty wybór</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/simple_choose.png"/>
                <a href="/index.php/artykuly" class="btn more col-md-4 col-md-offset-8" >
                    <strong>Więcej ></strong>
                </a>
            </div>
        </div>
    </div>
    <div class="banner-second container">


        <div class="description col-md-5 col-md-offset-7">

            <h2><b>Porady</b></h2>
            <p>Tutaj poradzimy jaką wybrać cegłe oraz jak zbudować dom</p>
            <a href="/index.php/o-nas" class="btn more col-md-4 col-md-offset-8">
                Więcej > 
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
                    <strong>Więcej ></strong>
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
                    <strong>Więcej ></strong>
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1 tile">
                <h2 class="text-center ">Prosty wybór</h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafelki_bez_tekstu/simple_choose.png"/>
                <a href="/index.php/artykuly" class="btn more col-md-4 col-md-offset-8" >
                    <strong>Więcej ></strong>
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
                            {pos: {lat: 50.753836, let: 22.1004131}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://cerbud.aden.pl/CMS/IMGB/192_logo_cerbud.jpg" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Krajowe Zrzeszenie Producentów Materiałów Budowlanych CERBUD</strong><br />37–470  Zaklików<br /> ul. Słubickiego 27<br /><br /><a target="_blank" href="http://www.cerbud.org.pl/">http://www.cerbud.org.pl/</a><br /><a href="mailto:zrzeszenie@cerbud.org.pl">zrzeszenie@cerbud.org.pl</a><br /></div>'},
                            {pos: {lat: 51.4529037734842, let: 19.6805799007416}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://cerbud.aden.pl/CMS/IMGB/149_jarosty_logo.png" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Jarosty</strong><br />97-310 Moszczenica<br /> Jarosty Małe, ul. Miła 56<br /><br /><a target="_blank" href="http://www.jarosty.pl">http://www.jarosty.pl</a><br /><a href="mailto:biuro@jarosty.pl">biuro@jarosty.pl</a><br /></div>'},
                            {pos: {lat: 51.0743661034925, let: 20.2408808517456}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://www.ceradbud.pl/images/stories/ceradbud_logo16.png" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>CERADBUD Sp.j.</strong><br />26-230 Radoszyce<br /> ul. Mickiewicza 22<br /><br /><a target="_blank" href="http://www.ceradbud.pl">http://www.ceradbud.pl</a><br /><a href="mailto:biuro@ceradbud.pl">biuro@ceradbud.pl</a><br /></div>'},
                            {pos: {lat: 50.9210403772086, let: 22.1970069408417}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://hoffmanowska.pl/images/naglowek_hoff.png" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Hoffmanowska</strong><br />23-200 Kraśnik<br /> Spławy Pierwsze, Ostrowiecka 54<br /><br /><a target="_blank" href="www.hoffmanowska.pl">www.hoffmanowska.pl</a><br /><a href="mailto:info@hoffmanowska.pl">info@hoffmanowska.pl</a><br /></div>'},
                            {pos: {lat: 52.6378742279435, let: 20.3457260731384}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://cegielnia-szerominek.pl/images/szerominek.gif" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia  Szerominek</strong><br />09-100 Szerominek<br /> Spokojna 6<br /><br /><a target="_blank" href="http://www.cegielnia-szerominek.pl">http://www.cegielnia-szerominek.pl</a><br /><a href="mailto:biuro@cegielnia-szerominek.pl">biuro@cegielnia-szerominek.pl</a><br /></div>'},
                            {pos: {lat: 50.5113674361143, let: 21.6041241170799}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Siedleszczany Łabuda K.i M. s.c.</strong><br />39-450 Baranów Sandomierski<br /> Siedleszczany<br /><br /><a target="_blank" href="http://cegielniasiedleszczany.pl">http://cegielniasiedleszczany.pl</a><br /><a href="mailto:kawecka_k@op.pl">kawecka_k@op.pl</a><br /></div>'},
                            {pos: {lat: 50.9040287030055, let: 22.2559627243286}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://www.iv.pl/images/81867258114620580750.png" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia CEKOBUD s.c.</strong><br />23-206 Słodków Pierwszy 173<br /> Stróża<br /><br /><a target="_blank" href="www.cekobud.pl">www.cekobud.pl</a><br /><a href="mailto:cekobud@wp.pl">cekobud@wp.pl</a><br /></div>'},
                            {pos: {lat: 50.6084321876595, let: 22.0228887723831}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="/CMS/IMGB/363_logo.gif" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Stalowa Wola</strong><br />37-464 Stalowa Wola<br /> ul. Sandomierska 157  (zakład ul. Ziołowa)<br /><br /><a target="_blank" href="http://www.cegielnia.stalowa-wola.pl">http://www.cegielnia.stalowa-wola.pl</a><br /><a href="mailto:cegielnia@pro.onet.pl">cegielnia@pro.onet.pl</a><br /></div>'},
                            {pos: {lat: 52.6585024972833, let: 20.3263431787491}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://cegielnia-arcelin.pl/portal/thumb_dfbdc785765c.jpeg" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Mechaniczna ST.Morawski i s-ka</strong><br />09-100 Arcelin<br /> Arcelin<br /><br /><a target="_blank" href="http://cegielnia-arcelin.pl/">http://cegielnia-arcelin.pl/</a><br /><a href="mailto:cegielniaarcelin@op.pl">cegielniaarcelin@op.pl</a><br /></div>'},
                            {pos: {lat: 50.648589721709, let: 20.848274230957}, description: '<div style="width:350px; height:120px;"><img alt="logo" src=" ../../CMS/IMGB/295_cegielnia_logo.jpg" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Zbigniew Długosz</strong><br />26-015 Pierzchnica<br /> Drugnia 4<br /><br /><a target="_blank" href="http://cegielniadlugosz.pl">http://cegielniadlugosz.pl</a><br /><a href="mailto:zdlugosz@op.pl">zdlugosz@op.pl</a><br /></div>'},
                            {pos: {lat: 50.899066581758, let: 22.1645749098847}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://www.trojanowscy.krasnik.pl/pics/main/logo.jpg" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Cegielnia Trojanowscy</strong><br />23-200 Kraśnik<br /> Spławy II 22<br /><br /><a target="_blank" href="www.trojanowscy.krasnik.pl">www.trojanowscy.krasnik.pl</a><br /><a href="mailto:biuro@trojanowscy.krasnik.pl">biuro@trojanowscy.krasnik.pl</a><br /></div>'},
                            {pos: {lat: 50.9271067150396, let: 22.1871042251587}, description: '<div style="width:350px; height:120px;"><img alt="logo" src="http://polskacegla.pl/CMS/IMGB/428_Ceramika_KUFEL_logo orgi.JPG" style="margin: 5px 15px 15px 15px; max-height: 50px; max-width: 280px; float: left;" /><strong>Ceramika Kufel</strong><br />23-200 Kraśnik<br /> Suchynia, ul. Podmiejska 12<br /><br /><a target="_blank" href="http://www.ceramika-kufel.pl">http://www.ceramika-kufel.pl</a><br /><a href="mailto:cegielnia@ceramika-kufel.pl">cegielnia@ceramika-kufel.pl</a><br /></div>'}
                        ];
                for (var a = 0, len = dataTable.length; a < len; a++) {
                    var rec = dataTable[a],
                            pos = rec.pos;

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos.lat, pos.let),
                        map: map,
                        title: rec.description
                    });
                    marker.addListener('click', function () {
                        var infowindow = new google.maps.InfoWindow({
                            content: this.title
                        });
                        infowindow.open(map, this);
                    });
                }
            }
        </script>
    </div>
</main>

<?php
get_footer();
?>
