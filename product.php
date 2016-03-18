
    <?php
    include 'config.php';
    include ($includes.'head.php');
    include ('loading.php');
    $jsondata=file_get_contents("data/data.json");
    $json= json_decode($jsondata,true);
    //echo $json['lobProduct'][0]['id'];


    $id=$_GET['id'];


    ?>

    <!-- Header Start ---->
    <header class="header" id="product">
        <!-- navigation Start -->
        <?php include ($includes.'navigation.php'); ?>
        <!-- navigation End -->
        <div class="p-overlay"></div>
        <div class="container white">
            <div class="row" style="margin:150px auto 0;">
                <div class="col-sm-5" >
                    <div class="name-box" style="padding:50px 0;">
                        <h2><?php echo $json['lobProduct'][$id]['title'];  ?></h2>
                        <p >
                          <?php echo $json['lobProduct'][$id]['description'];  ?>
                        </p>
                        <button type="button" class="btn btn-primary">Ask for trial</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header ---->

    <section class="product-detail padding products">
        <div class="container">
            <div class="row" ng-repeat="items in lobProduct[<?php  echo $id ?>].projectsdetails track by $index" ng-if="$index % 2 == 0">
                <div class="col-md-6"   ng-repeat="i in [$index, $index + 1]"
               ng-if="lobProduct[<?php  echo $id ?>].projectsdetails[i]" >
                    <div class="prdct-d">
                        <img class="img-responsive" src="<?php echo $img; ?>mockups/{{items.mockup_details}}">
                        <p>
                            {{items.description_details}}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include ($includes.'/footer.php'); ?>
