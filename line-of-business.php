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
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        </p>
                        <button type="button" class="btn btn-primary">Learn More</button>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="lob-box">
                        <img class="img-responsive" src="<?php echo $img_lob_crm; ?>head.png">
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header ---->

    <section class="products padding white" data-ng-controller="aboutCtrl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" data-ng-repeat="product in lobProduct">
                    <div class="product">
                        <div class="col-sm-6">
                            <img src="<?php echo $img; ?>Computer/{{product.mockup}}" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <h2>{{product.title}}</h2>
                            <p>
                                {{product.tDesc}}
                            </p>
                            <a href="product.php?id={{product.id}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include ($includes.'footer.php'); ?>
