    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-box white">
                        <img class="img-responsive" src="<?php echo $img; ?>Logo_white.png">
                        <ul class="social">
                            <li><a target='_blank' href="https://www.facebook.com/rootcave"><i class="fa fa-facebook"></i></a></li>
                            <li><a target='_blank' href="https://twitter.com/rootcave_team"><i class="fa fa-twitter"></i></a></li>
                            <li><a target='_blank' href="https://www.linkedin.com/company/root-cave"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target='_blank' href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target='_blank' href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>

                        <div class="copy">
                           <br>
                            <p>Copyright @ 2015 - RootCave</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 hidden-xs"></div>
                <div class="col-sm-4">
                    <div class="footer-box white">
                        <h3 class="upper" style="
    margin-left: 45px;" >Reach Us </h3>
                        <ul class="details">
                            <li><i class="fa fa-map-marker"></i>6 Gamal Salem St., from Mosadak St., Dokki, Egypt.</li>
                            <li><i class="fa fa-phone"></i>+(20)100 5399 170</li>
                            <li><i class="fa fa-envelope"></i>info@rootcave.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- JavaScript Files -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>

    <!-- angular js -->
    <script src="<?php echo $js; ?>angular.min.js"></script>
    <script src="<?php echo $js; ?>angular-route.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $js; ?>bootstrap.min.js"></script>
    <script src="<?php echo $js; ?>typeit.min.js"></script>
    <!-- smoth scroll -->
    <script src="<?php echo $js; ?>SmoothScroll.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!-- GOOGLE MAP -->

    <script src="<?php echo $js; ?>bootstrap-formhelpers.min.js" ></script>

    <script src="<?php echo $js; ?>bootstrap-formhelpers-countries.js" ></script>
    <script src="<?php echo $js; ?>bootstrap-formhelpers-countries.en_US.js" ></script>
<!-- COUNTRIES in Form-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- --Captcha -->
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 8,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(29.9773051,31.3105241), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.

            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(29.9773051,31.3105241),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
    <script>
        $("a").click(function() {
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
        });
    </script>

    <script>
        $(window).load(
            function () {
                $(".loading").fadeOut(2000, function () {
                    $(this).parent().fadeOut(2000);
                });
            }
        );

        /*--
            auto typing plugin
        --*/
        $('.typing').typeIt({
            strings: [
                "Tailored to suit your business ",
                "Cloud based Software for your business",
                "Real time Analytics for data driven business decisions"
            ],
            speed: 150,
            breakLines: false,
            loop: true,
            cursor: false
        });
    </script>

    <!-- JavaScript Files -->
    <script src="<?php echo $js; ?>script.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75617051-1', 'auto');
        ga('send', 'pageview');

    </script>

    </body>
</html>
