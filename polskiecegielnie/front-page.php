<?php get_header(); ?>

<main col-sm-12 >

    <figure class="col-md-12 banner row">
        <a href="/index.php/o-nas" class="thumbnail">
            <img class="col-md-9" src="<?php bloginfo('stylesheet_directory'); ?>/images/baners/pic1.png">
            <figcaption class=""col-md-3>
                <h3>Witamy na portalu POLSKA CEGŁA</h3>
                <p>Zapraszamy do portalu wiedzy o materiałach budowlanych, technologiach wykonywania ścian 
                    oraz prezentacji tradycyjnych wyrobów budowlanych od sprawdzonych i wybranych producentów
                    certyfikowanych marką Polska Cegła.</p>
            </figcaption>
        </a>
    </figure>
    <div class="panel">
        <div class="row ">
            <div class=" col-md-3">
                <a href="/index.php/zapytaj-eksperta" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/question.png">
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1">
                <a href="/index.php/jak-zamowic" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/how_order.png">
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1">
                <a href="/index.php/artykuly" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/simple_choose.png">
                </a>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="jumbotron jumbotron-two row" >
            <div class="col-md-offset-9 col-md-3">
                <h1>Hello, world!</h1>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>

            </div>

        </div>

        <div class="row ">
            <div class=" col-md-3">
                <a href="/index.php/artykuly/tylko-cegla-ceramiczna-jest-ponadczasowa-zdrowa-ekologiczna-ognioodporna-naturalna-sprawdzona-zawsze-modna" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/Ryszard_Belak.png">
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1">
                <a href="index.php/artykuly/jak-zbudowac-dom-z-ceramiki-budowlanej-ryszard-belak-artur-stawski" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/Artur_Stawski.png">
                </a>
            </div>
            <div class=" col-md-3 col-md-offset-1">
                <a href="/index.php/artykuly" class="thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/simple_choose.png">
                </a>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="jumbotron jumbotron-three row" >
            <div class="col-md-offset-9 col-md-3">
                <h1>Hello, world!</h1>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>

            </div>

        </div>
        <div class="panel">
            <div id="map"></div>
            <div id="save-widget">
                <strong>Google Sydney</strong>
                <p>We’re located on the water in Pyrmont, with views of the Sydney Harbour Bridge, The
                    Rocks and Darling Harbour. Our building is the greenest in Sydney. Inside, we have a
                    "living wall" made of plants, a tire swing, a library with a nap pod and some amazing
                    baristas.</p>
            </div>
            <script>
                /*
                 * This sample uses a custom control to display the SaveWidget. Custom
                 * controls can be used in place of the default Info Window to create a
                 * custom UI.
                 * This sample uses a Place ID to reference Google Sydney. Place IDs are
                 * stable values that uniquely reference a place on a Google Map and are
                 * documented in detail at:
                 * https://developers.google.com/maps/documentation/javascript/places#placeid
                 */

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: {lat: -33.8666, lng: 151.1958},
                        mapTypeControlOptions: {
                            mapTypeIds: [
                                google.maps.MapTypeId.ROADMAP,
                                google.maps.MapTypeId.SATELLITE
                            ],
                            position: google.maps.ControlPosition.BOTTOM_LEFT
                        }
                    });

                    var widgetDiv = document.getElementById('save-widget');
                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

                    // Append a Save Control to the existing save-widget div.
                    var saveWidget = new google.maps.SaveWidget(widgetDiv, {
                        place: {
                            // ChIJN1t_tDeuEmsRUsoyG83frY4 is the place Id for Google Sydney.
                            placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4',
                            location: {lat: -33.866647, lng: 151.195886}
                        },
                        attribution: {
                            source: 'Google Maps JavaScript API',
                            webUrl: 'https://developers.google.com/maps/'
                        }
                    });

                    var marker = new google.maps.Marker({
                        map: map,
                        position: saveWidget.getPlace().location
                    });
                }

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiIOcLl1FMZf7kMQYEyMo_SAj5tqhSdf4&callback=initMap&signed_in=true" async defer>
            </script>
        </div>
    </div>
</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
?>
