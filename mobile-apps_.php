<?php
    include 'config.php';
    include($includes.'head.php');
    include ('loading.php');
?>

<!-- Header Start ---->
<header class="header" id="mopile">
    <!-- navigation Start -->
    <?php include($includes.'navigation.php'); ?>
    <!-- navigation End -->
    <div class="p-overlay"></div>
    <div class="container padding">
        <div class="row" style="margin:150px auto 0">
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

<section class="mopile-appl padding products">
    <div class="container white">
        <div class="row">
            <div class="col-sm-6" data-ng-repeat="items in mobileProduct">
                <div class="app-mop">
                    <div class="col-xs-5">
                        <img class="img-responsive" ng-src="<?php echo $img; ?>{{items.mockup}}">
                    </div>
                    <div class="col-xs-7">
                        <h2>{{items.title}}</h2>
                        <p>
                            {{items.description}}
                        </p>
                        <a href="mob-app.php?id={{items.id}}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- start footer -->
<?php include($includes.'footer.php'); ?>
