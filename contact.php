<!DOCTYPE html>
<html lang="en" ng-app="rootCave">

    <!-- head start -->
    <rchead></rchead>
    <!-- head End -->

<!--    <rchead></rchead>-->
<body>

    <!-- Header Start ---->
    <header class="header" id="contact">
        <!-- navigation Start -->
        <rcnav></rcnav>
        <!-- navigation End -->
    </header>
    <!-- Header ---->

    <section class="contact-us padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="border-right:1px solid #ddd">
                    <form class="form" action="" method="post">
                        <h2>Contact Us</h2>
                        <input type="text" class="form-control" placeholder="Name.." name="name" required>
                        <input type="tel" class="form-control" placeholder="Phone.." name="tel" required>
                        <input type="email" class="form-control" placeholder="Email.." name="email" required>
                        <input type="text" class="form-control" placeholder="Subject.." name="subject" required>
                        <textarea class="textarea" placeholder="Message"></textarea>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>

                <div class="col-sm-6">
                   <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer start -->
    <rcfooter></rcfooter>
    <!-- footer End -->

    <!-- JavaScript Files -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- angular js -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- smoth scroll -->
    <script src="assets/js/SmoothScroll.js"></script>
    <!-- JavaScript Files -->

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!-- GOOGLE MAP -->
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

    <!-- GOOGLE MAP -->

    <script src="assets/js/script.js"></script>
    <script src="assets/js/template.js"></script>


</body>
</html>