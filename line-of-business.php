<?php
include "config.php";
 include ($includes.'head.php');
 include ('loading.php');
?>

    <!-- Header Start ---->
    <header id="lineOfBusniness" class="header">
        <!-- navigation Start -->
        <?php include ($includes.'navigation.php'); ?>
        <!-- navigation End -->
        <div class="p-overlay"></div>
        <div class="container white">
            <div class="row" style="margin:200px auto 0;">
                <div class="col-sm-5">
                    <div class="lob-box">
                        <h2>line Of Busniness</h2>
                        <p>
                            Root Cave LOB are set of critical web applications that are vital to running an enterprise. LOB applications are usually large programs that contain a number of integrated capabilities and tie into databases and database management systems. 
                        </p>
                        <a href="#products" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="lob-box">
                        <img class="img-responsive" src="<?php echo $img_lob_teaser ;?>crm.png">
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header ---->

    <section class="products padding white" data-ng-controller="aboutCtrl" id="products">
        <div class="container-fluid">
            <div class="row" ng-repeat="items in lobProduct track by $index" ng-if="$index % 2 == 0">
                <div class="col-sm-6" ng-repeat="i in [$index, $index + 1]"
               ng-if="lobProduct[i]">
                    <div class="product">
                        <div class="col-sm-6">
                            <img src="<?php echo $img_lob_teaser; ?>{{lobProduct[i].mockup}}" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <h2>{{lobProduct[i].title}}</h2>
                            <p>
                                {{lobProduct[i].tDesc}}
                            </p>
                            <a href="product.php?id={{lobProduct[i].id}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include ($includes.'footer.php'); ?>
