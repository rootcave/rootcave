
    <?php include ('assets/php/head.php'); ?>

    <!-- Header Start ---->
    <header class="header" id="product">
        <!-- navigation Start -->
        <?php include ('assets/php/navigation.php'); ?>
        <!-- navigation End -->
    </header>
    <!-- Header ---->
    <section class="lob-icons white">
        <div class="container">
            <ul class="icons">
                <li><span class="flaticon-technology-2"></span><h3>Responsive</h3></li>
                <li><span><span class="flaticon-material"></span><h3>Networking</h3></li>
                <li><span class="flaticon-technology"></span><h3>Support</h3></li>
            </ul>
        </div>
    </section>

    <section class="product-name padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="name-box">
                        <h2>Product Name</h2>
                        <p>
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        </p>
                        <button type="button" class="btn btn-primary">ASk For trial</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="name-box">
                        <img class="img-responsive" src="assets/images/Mac.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-l padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="l-box">
                        <p class="white">
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        </p>
                        <button type="button" class="btn btn-primary">Learn More</button>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="l-box">

                        <img class="img-responsive" src="assets/images/PcColl.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product-detial padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-ng-repeat="detial in Product">
                    <div class="prdct-d">
                        <img class="img-responsive" src="assets/images/Computer/{{detial.mockup}}">
                        <p>
                            {{detial.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include ('assets/php/footer.php'); ?>
