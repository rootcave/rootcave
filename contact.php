<?php
    if(isset($_POST['submit'])){
        $to = "info@rootcave.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $subject = "Request a Demo";
        $subject2 = "Copy of your form submission";
        $message =  "<br>" . $name . " " . $tel . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<?php
include 'config.php';
include($includes.'head.php');
 include ('loading.php');
?>

    <!-- Header Start ---->
    <header class="header" id="contact">
        <!-- navigation Start -->
        <?php include($includes.'navigation.php'); ?>
        <!-- navigation End -->
    </header>
    <!-- Header ---->

    <section class="contact-us padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="border-right:1px solid #ddd">
                    <form class="form" action="" method="post">
                        <h2>Contact Us</h2>
                        <input type="text" class="form-control" placeholder="Name.." name="name" required>
                        <input type="tel" class="form-control" placeholder="Phone.." name="tel" required>
                        <input type="email" class="form-control" placeholder="Email.." name="email" required>
                        <input type="text" class="form-control" placeholder="Subject.." name="subject" required>
                        <textarea class="textarea" placeholder="Message" name="message"></textarea>
                        <div class="g-recaptcha" data-sitekey="6LdTyxsTAAAAAOpOslBQiWIm4d7Za9xwhVqxrwPN"></div>

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">

                    </form>
                </div>

                <div class="col-sm-6">
                   <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer start -->
    <?php include($includes.'footer.php'); ?>
