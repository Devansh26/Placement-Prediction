<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>XIE</title>
    
    <style type="text/css">
        .capital{
            text-transform:uppercase;
        }
    </style>
</head>

<body>
    <!-- nav -->
        <?php include ('navbar.php'); ?>
    <!-- //nav -->

    <!-- banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Contact Us</h3>
            <div class="comment-top mt-5 row">                
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <form action="#" method="post">
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="number" placeholder="" required="">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Write Message</label>
                            <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                        </div>
                        <button type="submit" class="btn submit mt-3">Submit</button>
                    </form>
                </div>

            </div>

            <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>XIE
                                <br>Policeman Colony, Mahim West </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">devansh981226@gmail.com</a>
                            <br>
                            <a href="mailto:info@example.com">datta1281998@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p>+91 7715976760</p>
                            <p>+91 8451900026</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="map-fo mt-lg-5 mt-4">                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15085.681813108262!2d72.841687!3d19.0452429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38854a716f0ca945!2sXavier%20Institute%20of%20Engineering!5e0!3m2!1sen!2sin!4v1600664903379!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </section>
    <!-- //banner-bottom -->

    <!--footer-->
        <?php include ('footer.php'); ?>
    <!--//footer-->
</body>

</html>
