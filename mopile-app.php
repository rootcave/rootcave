<!DOCTYPE html>
<html lang="en" ng-app="rootCave">

    <!-- head start -->
    <rchead></rchead>
    <!-- head End -->

<!--    <rchead></rchead>-->
<body data-ng-controller="aboutCtrl">

    <!-- Header Start ---->
    <header class="header" id="mopile">
        <!-- navigation Start -->
        <rcnav></rcnav>
        <!-- navigation End -->
        <div class="container padding">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Mopile App</h2>
                    <p>
                        ABOUT Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                    </p>
                    <a href="#" class="btn btn-primary">Get started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header ---->

    <section class="three-mob">
        <div class="container">
            <div class="row">
                <img class="img-responsive" src="assets/images/Mob.jpg">
            </div>
        </div>
    </section>

    <section class="lob-icons white">
        <div class="container">
            <div class="row">
                <ul class="icons-mop">
                    <li><span class="flaticon-technology-2"></span></li>
                    <li><span><span class="flaticon-material"></span></li>
                    <li><span class="flaticon-technology"></span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mopile-appl padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-ng-repeat="items in mopileProduct">
                    <div class="app-mop">
                        <div class="col-xs-4">
                            <img class="img-responsive" src="assets/images/{{items.mockup}}">
                        </div>
                        <div class="col-xs-6">
                            <p>
                                {{items.description}}
                            </p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
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
    <script src="assets/js/script.js"></script>
    <script src="assets/js/template.js"></script>


</body>
</html>
