<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
    include('../connection.php');
    $user= $_SESSION['username'];
    $sql=mysqli_query($conn,"select * from users where email='$user' ");
    $users=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>XIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
    <style type="text/css">
        .capital{
            text-transform:uppercase;
        }
    </style>
</head>

<body>
    <!-- main -->
    <div class="main-content" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <!-- nav -->
                <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                    <div id="logo">
                        <h1><a href="index.html">Placement</a></h1>
                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Notifications<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Notifications <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="notice.php?page=notification" class="drop-text">Notifications</a></li>
                                <li><a href="notice.php?page=drive" class="drop-text">Drive</a></li>
                                <li><a href="notice.php?page=update_profile" class="drop-text">Update Profile</a></li>
                                <li><a href="notice.php?page=update_password" class="drop-text">Update Password</a></li>                                
                            </ul>
                        </li>
                        <li><a href="../aboutus.php">About Us</a></li>                                            
                        <li><a href="../contact.php">Contact Us</a></li>
                        <?php
                        if(isset($_SESSION['username'])){ ?>
                            <li class="capital"><?php echo $_SESSION['username']; ?></li>
                            <li><a href="../logout.php">LogOut</a></li>
                        <?php }else{ ?>                            
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Login <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Login <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="User/login.php" class="drop-text">User Login</a></li>
                                <li><a href="Admin/login.php" class="drop-text">Admin Login</a></li>                                
                            </ul>
                        </li>
                        <?php } ?>
                        <li>
                            <p class="w3pvt-phone">
                                <span class="fa fa-phone mr-2"></span>+91 7715976760
                            </p>
                        </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!-- banner -->
        <div class="banner-content-w3pvt">
            <div class="banner-w3layouts-info text-center">
                <h3>Xavier's Engineering Placement Portal</h3>                
            </div>
            <div class="move-top text-center mt-3">                
            <a href="#page" class="move-top"><span class="fa fa-angle-double-down" aria-hidden="true"></span></a>
            </div>
        </div>

        <!-- //banner -->
    </div>
    <!-- //main -->
    <!-- /entry -->
    <div class="entry-w3pvt-main py-5">
        <div class="container px-lg-5 py-md-3">
            <div class="entry-w3layouts-info">
                <h4>Xavier's Placement Drives</h4>
                <p>The TPO team at Xavier's Institute of Technology thrive to provide best placement opportunities to our students from various renowned and well known companies which have achieved a stronghold in the Engineering Industry by developing remarkable and innovative products for the consumer, thus enabling a lifetime learning experience of working in such companies for our students.</p>
            </div>
        </div>
    </div>
    <!-- //entry -->
    <section id="page"></section>
    <br><br>

    <div class="container" id="main1">
        <?php 
        @$page=  $_GET['page'];
          if($page!="")
          {
            
            if($page=="notification")
            {
                include('notification.php');
            
            }
            if($page=="drive")
            {
                include('drive.php');

            }
            if($page=="update_profile")
            {
                include('update_profile.php');
            
            }
            if($page=="update_profile_pic")
            {
                include('update_profile_pic.php');
            
            }
          }
          else
          {
          include('notification.php');
          ?>
          <!-- container end-->
           
          
          <h1 class="page-header">Dashboard</h1>
          
          
<?php } ?>

    </div>

    <br><br>

    <!--/last-content-->
    <section class="last-content text py-5">
        <div class="container py-md-3 text-center">
            <div class="last-w3pvt-inner-content px-lg-5">
                <h3 class="mb-4 tittle-w3layouts">Get started with <span>Placement </span> Process!</h3>
                <p class="px-lg-5">It is time to get started with the placement process.</p>
                <div class="buttons mt-md-4 mt-3">
                    <a href="apply.php" class="btn btn-default">Get Started</a>
                    
                </div>
            </div>
        </div>
    </section>
    <!--//last-content-->
    <section class="ab-info-main py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Skills Required by companies</h3>
            <div id="products" class="row view-group my-lg-5 my-4">
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="images/g1.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Programming</h4>
                            <p class="group inner list-group-item-text">
                                Programming is understanding a program and building pseudo code for the same.</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="images/g2.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Coding</h4>
                            <p class="group inner list-group-item-text">
                                The companies expect the candidate to have basic knowledge of mainstream programming languages like Python, Java, HTML5, JavaScript</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="images/g3.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Aptitude</h4>
                            <p class="group inner list-group-item-text">
                                Almost every company's 1st Round is an Aptitude. It is an quetionnaire
                                that contains math problems, verbal sections, pattern interpretation sections.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row text-center mt-lg-5 mt-4 pt-5" id="stats">
                <div class="col-sm-4">
                    <div class="counter">
                        <h3 class="count-title">1500</h3>
                        <p class="count-text ">Support</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter two">
                        <h3 class="count-title">1700</h3>
                        <p class="count-text ">Happy Hours</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter">
                        <h3 class="count-title">11900</h3>
                        <p class="count-text ">Project Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//-->
    <!--/testimonials-->
    <section class="testimonials py-5" id="test">
        <div class="container py-3">
            <h3 class="tittle-w3layouts text-center mt-3">See what people are saying</h3>
            <div class="testimonials_grid mx-auto text-center row px-lg-5 mt-5">

                <div class="col-md-3 testi_grid text-md-center">
                    <img src="../images/sai.jpg" alt=" " class="img-fluid">
                </div>
                <div class="col-md-9 testi_grid text-left">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <p class="sub-test pr-lg-5">Got placed in first recruitment drive which was conducted by Cape Gemini due to the guidance provided by the TPO sir and our Department staff. secured a good package.
                        <h5>Saivasuddata</h5>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!-- footer -->
    <footer class="footer-content text-center py-5">
        <div class="container py-md-3">
            <!-- logo -->
            <h2 class="logo2 text-center">
                <a href="index.php">
                    Placement
                </a>
            </h2>
            <!-- //logo -->
            <!-- address -->
            <div class="contact-left-footer mt-md-4">
                <ul>
                    <li>
                        <p>
                            <span class="fa fa-map-marker mr-2"></span>Policeman Colony, Mahim west
                        </p>
                    </li>
                    <li class="mx-4">
                        <p>
                            <span class="fa fa-phone mr-2"></span>+91 7715976760
                        </p>
                    </li>
                    <li>
                        <p class="text-wh">
                            <span class="fa fa-envelope-open mr-2"></span>
                            <a href="mailto:info@example.com">datta1281998@gmail.com</a>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- //address -->
            <!-- social icons -->
            <div class="footer-w3pvt-copy-social my-4">
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook-square"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fa fa-twitter-square"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span class="fa fa-google-plus-square"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fa fa-linkedin-square"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-rss-square"></span>
                        </a>
                    </li>
                    <li class="ml-2">
                        <a href="#">
                            <span class="fa fa-pinterest-square"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //social icons -->
            <!-- copyright -->
            <div class="w3layouts-copy text-center">
                <p class="text-da">© 2019 Placement. All rights reserved | Design by
                    <a href="http://w3layouts.com/">Devansh Shah, Sai Vasudatta, Rohan Vaidya</a>
                </p>
            </div>
            <!-- //copyright -->
            <!-- move top icon -->
			 <div class="move-top text-center mt-3">
            <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
			</div>
			<!-- //move top icon -->
        </div>
    </footer>
    <!-- //footer -->




</body>

</html>
