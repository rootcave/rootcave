<?php
    if(isset($_POST['submit'])){
        $to = "sales@rootcave.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $subject = "Request a Demo" . $_POST['product'];
        $subject2 = "Copy of your form submission";
        $message = $subject . "<br>" . $name . " " . $tel . " wrote the following:" . "\n\n" . $_POST['message'];
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
    <header class="header" id="demoreq">
        <!-- navigation Start -->
        <?php include($includes.'navigation.php'); ?>
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
                        <select name="product">
                          <option value="volvo">Volvo</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                        <textarea class="textarea" placeholder="Message" name="message"></textarea>
                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                    </form>
                </div>

            </div>
        </div>
    </section>


    <?php include($includes.'footer.php'); ?>
