<?php
    include 'config.php';
    include ($includes.'head.php');
    include ('loading.php');
?>


<!-- Header Start ---->
<header class="header" id="header">
    <!-- navigation Start -->
    <?php include ($includes.'navigation.php'); ?>
    <!-- navigation End -->
    <div class="p-overlay"></div>
    <div class="container">
        <div class="row" style="margin:250px auto 150px">
            <div class="col-sm-5">
                <div class="header-cont">

                    <h2 class="typing"></h2>
                    <a class="btn btn-primary" href="#start">Get Started</a>

                </div>
            </div>

            <div class="col-sm-7">
                <div>
                    <img class="img-responsive" src="assets/img/PcColl.png">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header ---->


<section class="aboutme padding white" id=aboutUs>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Root Cave at a glance</h1>

            <p class="text-center" style="width:60%; margin: auto;">
                Root Cave delivers a business application suite for small and medium size companies around the world. , our flexible solutions help you accelerate your business growth. That flexibility allows you to choose to implement the suite on your existing servers or move to a modern cloud implementation. Explore these pages to see why we are now the fastest growing business management solution!
            </p>
            <br><br>
        </div>
        <div class="row" ng-repeat="items in about track by $index" ng-if="$index % 2 == 0">
            <div class="col-sm-6"
               ng-repeat="i in [$index, $index + 1]"
               ng-if="about[i]"
              >
                <div class="about-box">
                    <div class="col-sm-3">
                        <i class="{{about[i].icon}}"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>
                            {{about[i].title}}
                        </h3>
                        <p>
                            {{about[i].description}}
                        </p>
                    </div
                </div>
            </div>
        </div>
    </div>
</section>

<section class="green-l padding" id="start">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="l-box">
                    <h3 class="white">Web App</h3>
                    <p class="white">
                        Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                    </p>
                    <a class="btn btn-primary" href="line-of-business.php">Get Started</a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="l-box">
                    <img class="img-responsive" ng-src="<?php echo $img; ?>PcColl.png">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mobile padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Mobile App</h3>
                <p>
                    Mobile devices are increasingly utilized to access content and interact with brands. So, it is critical that you have a well-designed and solidly executed mobile experience. Root Cave provides clients with brand consistency through and throughout customized mobile websites and applications.
                </p>
                <a href="mobile-apps.php" class="btn btn-primary">Get Started</a>
            </div>

            <div class="col-sm-6">
            </div>
        </div>
    </div>
</section>

<section class='clients padding text-center' id="customers">
    <div class="container">
        <div class="row" >
       <!-- <h1 class="text-center">Customers</h1> -->
        </div>
        <div class="row" ng-repeat="client in clients track by $index" ng-if="$index % 4 == 0">
            <div class="col-sm-3"   ng-repeat="i in [$index,$index +1,$index + 2 , $index + 3]"
               ng-if="clients[i]">
                <img class="img-responsive" ng-src="<?php echo $img_clients ?>/{{clients[i].clientLogo}} " >
            </div>


        </div>
    </div>
</section>


    <!-- footer start -->
    <?php include ($includes.'footer.php'); ?>


