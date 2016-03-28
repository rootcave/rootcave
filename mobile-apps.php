<?php
include "config.php";
include ($includes.'head.php');
include ('loading.php');
?>
<style>
    h1 {
        font-size: 75px;
        color: #448BB6;
    }
</style>

<!-- Header Start ---->
<header class="header" id="mopile">
    <!-- navigation Start -->
    <?php include($includes.'navigation.php'); ?>
    <!-- navigation End -->

    <div class="container padding">
        <div class="row" style="margin:150px auto 0">
            <div class="col-sm-6">
                <h2>Mopile App</h2>
                <h1>COMING SOON</h1>
            </div>
        </div>
    </div>
</header>
<!-- Header ---->

<style>
<?php include ($includes.'navigation.php'); ?>
.coming-soon {
    background: url('assets/img/mobile-app-promo-01.jpg');
    height: 100%;
    background-size: cover;
}
</style>
<div class="coming-soon">

</div>
<!-- footer start -->
<?php include($includes.'footer.php'); ?>
