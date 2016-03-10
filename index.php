    <?php include ('assets/php/head.php'); ?>


    <!-- Header Start ---->
    <header class="header" id="header">
        <!-- navigation Start -->
        <?php include ('assets/php/navigation.php'); ?>
        <!-- navigation End -->
    </header>
    <!-- Header ---->

    <section class="products-kind white">
        <div class="container text-center">
           <div class="row">
               <h1>
                   Products
               </h1>
           </div>
            <div class="row">
                <div class="col-sm-6" data-ng-repeat="items in products">
                    <div class="name-k">
                        <span class="{{items.icon}}"></span>
                        <h2>{{items.title}}</h2>
                        <p>
                            {{items.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="aboutme padding">
        <div class="container text-center">
            <div class="row">
                <img class="img-responsive" src="assets/images/Logo.png">

                <p>
                    ABOUT Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                    Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                </p>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-3" data-ng-repeat="items in about">
                    <div class="about-box">
                        <i class="{{items.icon}}"></i>
                        <h3>{{items.title}}</h3>
                        <p>{{items.description}}</p>
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
                        <button type="button" class="btn btn-primary">Get Started</button>
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

    <section class="mobile padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mopile App</h3>
                    <p>
                        Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                    </p>
                    <button type="button" class="btn btn-primary">Get Started</button>
                </div>

                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>

    <section class="anytime padding">
        <div class="container">
            <div class="row">
                <img class="img-responsive" src="assets/images/map.png">
            </div>
            <div class="row white text-center">
                <div class="col-sm-4" data-ng-repeat="any in anytime">
                    <div class="box-any">
                        <img class="img-responsive" src="assets/images/{{any.icon}}">
                        <h3>{{any.title}}</h3>
                        <p>
                            {{any.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='clients padding text-center'>
        <div class="container">
            <div class="row">
                <h2>Clients</h2>
            </div>
            <div class="row">
                <div class="col-sm-4" data-ng-repeat="client in clients">
                    <img class="img-responsive" src="assets/images/{{client.clinetLogo}}">
                </div>


            </div>
        </div>
    </section>


    <!-- footer start -->
    <?php include ('assets/php/footer.php'); ?>


