<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
    include('../connection.php');
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
    <link rel="icon" href="../../favicon.ico">    
    

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
                <li><a href="manage_users.php">Manage Users</a></li><li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Notifications <span class="fa fa-angle-down" aria-hidden="true"></span>
                    </label>
                    <a href="#">Notification <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                    <input type="checkbox" id="drop-2" />
                    <ul>
                        <li><a href="index.php?page=notification" class="drop-text">Notification</a></li>
                        <li><a href="index.php?page=placement" class="drop-text">On-Campus Placements</a></li>                                
                    </ul>
                </li>                                            
                <!--<li><a href="index.php?page=notification">Notifications</a></li>-->
                <li><a href="../User/Aptitude/admin.php">Quiz management</a></li>
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
    <br><br>

    <div class="container" id="page">
        <?php 
        @$page=  $_GET['page'];
          if($page!="")
          {
            if($page=="manage_users")
            {
                include('manage_users.php');
            
            }
            
            if($page=="update_password")
            {
                include('update_password.php');
            
            }
            
            if($page=="notification")
            {
                include('display_notification.php');
            
            }
            
            if($page=="placement")
            {
                include('display_drive.php');
            
            }            
            
            if($page=="update_notice")
            {
                include('update_notice.php');
            
            }

            if($page=="update_drive")
            {
                include('update_drive.php');
            
            }
            
            
            
            if($page=="view_users")
            {
                include('view_users.php');
            
            }


            if($page=="add_notice")
            {
                include('add_notice.php');
            
            }

            if($page=="add_drive")
            {
                include('placement.php');
            
            }
          }
          
          else
          {
          ?>
          <!-- container end-->

          <center>
          <h1 class="page-header">Dashboard</h1><br>
          </center>
        
          <div class="row placeholders">
            <div class="col-xs-2 col-sm-2 placeholder">
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/rohan.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Rohan Vaidya</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/devansh.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Devansh Shah</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/sai.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Saivasudatta</h4>
              <span class="text-muted">Something else</span>
            </div>
            
          </div>
          
          <?php } ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../notice/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../notice/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../notice/js/ie10-viewport-bug-workaround.js"></script>

    <br><br>
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
