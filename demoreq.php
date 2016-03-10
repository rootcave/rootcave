<!DOCTYPE html>
<html lang="en" ng-app="rootCave">

    <!-- head start -->
    <rchead></rchead>
    <!-- head End -->

<!--    <rchead></rchead>-->
<body>

    <!-- Header Start ---->
    <header class="header" id="demoreq">
        <!-- navigation Start -->
        <rcnav></rcnav>
        <!-- navigation End -->
    </header>
    <!-- Header ---->

    <section class="contact-us padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form" action="" method="post">
                        <h2>Request a Demo</h2>
                        <input type="text" class="form-control" placeholder="Name.." name="name" required>
                        <input type="tel" class="form-control" placeholder="Phone.." name="tel" required>
                        <input type="email" class="form-control" placeholder="Email.." name="email" required>
                        <input type="text" class="form-control" placeholder="Subject.." name="subject" required>
                        <textarea class="textarea" placeholder="Message"></textarea>
                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                    </form>
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
