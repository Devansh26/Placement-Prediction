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
    <title>Provision Education Category Bootstrap Responsive web Template | About :: W3layouts</title>
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
    <div class="main-content inner" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <!-- nav -->
                <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                    <div id="logo">
                        <h1><a href="index.php">Placement</a></h1>
                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="aboutus.php">About Us</a></li>                        
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="#exp" class="drop-text">Experience</a></li>
                                <li><a href="#team" class="drop-text">Professors</a></li>      
                                <li><a href="#test" class="drop-text">Reviews</a></li>
                                <li><a href="course.html" class="drop-text">Courses</a></li>

                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
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
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="about">
        <div class="container py-md-4">
            <div class="row banner-grids">
                <div class="col-md-6 content-right-bottom text-left">
                    <img src="images/x.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 content-left-bottom entry-w3layouts-info text-left pl-lg-4">
                    <h5 class="mt-1">Online Workshops</h5>
                    <h4>Limitless learning, more possibilities</h4>
                    <p class="mt-2 text-left">The Team of Training and placement officer organize various seminars which are provided by various field experts of various renonwed companies on modern technologies required in today's market..</p>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!-- /team-content -->
    <section class="team-content py-5" id="team">
        <div class="container py-md-5 text-center">
            <h3 class="tittle-w3layouts two">Experienced Professors</h3>
            <div class="row team-grids text-center mt-md-5 mt-4">
                <div class="col-lg-4 team-main">

                    <div class="team-img"><img src="../images/sai.jpg" alt="news image" class="img-fluid"> </div>
                    <div class="team-info">

                        <h4>SaiVasudatta</h4>
                        <small>Associate Professor</small>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>


                </div>

                <div class="col-lg-4 team-main">
                    <div class="team-info">

                        <h4>Devansh Shah</h4>
                        <small>Assistant Instructor</small>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>

                    <div class="team-img"><img src="../images/devansh.jpg" alt="news image" class="img-fluid"> </div>


                </div>

                <div class="col-lg-4 team-main">

                    <div class="team-img"><img src="../images/rohan.jpg" alt="news image" class="img-fluid"> </div>
                    <div class="team-info">

                        <h4>Rohan Vaidya</h4>
                        <small>Assistant Instructor</small>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>


                </div>

            </div>

        </div>
    </section>
    <!-- //team-content -->

    <!--/last-content-->
    <section class="last-content text py-5">
        <div class="container py-md-3 text-center">
            <div class="last-w3pvt-inner-content px-lg-5">
                <h3 class="mb-4 tittle-w3layouts">Get started with <span>Placement </span> Process!</h3>
                <p class="px-lg-5">It is time to get started with the placement process.</p>
                <div class="buttons mt-md-4 mt-3">
                    <a href="apply.html" class="btn btn-default">Get Started</a>
                    
                </div>
            </div>
        </div>
    </section>
    <!--//last-content-->
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="exp">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">What We Provide</h3>
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <img src="images/x.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">Placement Environment</h5>
                    <h4>Placement cell</h4>
                    <p class="mt-2 text-left">The Placement Cell comprises of a TPO team which are student volunteers. They coordinates the placement activity in the campus for students in the our final year of their programme of study. They update placement websites like admin that is Training and Placement Officer.The Training and placement officer initiates dialogues with companies in various cities, and organizes interviews on campus for the convenience of students. It also has a list of companies where our alumni have been placed.</p>

                </div>

            </div>
            <div class="row mid-grids my-lg-5 py-lg-5">

                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">Pre-placement Talk</h5>
                    <h4>Get to know where you are going to workplace environment</h4>
                    <p class="mt-2 text-left"> The Pre-placement talk is a seminar which is conducted by every company before commencing the placement drive. In this seminar,the company representatives talk about various opportuinities and previlledges the company offers to its employees and what kind of things or results the expect from their recruits.</p>

                </div>
                <div class="col-md-5 content-w3pvt-img">
                    <img src="images/x.jpg" alt="" class="img-fluid">
                </div>

            </div>
            <div class="row mid-grids">
                <div class="col-md-5 content-w3pvt-img">
                    <img src="images/x.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">Actual Placement drive of a company.</h5>
                    <h4>Community of opportunities</h4>
                    <p class="mt-2 text-left"> The placement drive of the companies differ from company to company. There are uptil 4 rounds among which the Aptitude Round, The Technical Quiz Round, The Coding Round, The HR Round. Each offer students various amount of salary package and recruitment rounds of that company differ according to the package offered by the company</p>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/testimonials-->
    <section class="testimonials py-5" id="test">
        <div class="container py-3">
            <h3 class="tittle-w3layouts text-center mt-3">See what people are saying</h3>
            <div class="testimonials_grid mx-auto text-center row px-lg-5 mt-5">

                <div class="col-md-3 testi_grid text-md-center">
                    <img src="images/Sai.jpg" alt=" " class="img-fluid">
                </div>
                <div class="col-md-9 testi_grid text-left">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <p class="sub-test pr-lg-5">Got placed in first recruitment drive which was conducted by Cape Gemini due to the guidance provided by the TPO sir and our Department staff. secured a good package.
                        <h5>Sai Vasudatta</h5>
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
                <a href="index.html">
                    Placement
                </a>
            </h2>
            <!-- //logo -->
            <!-- address -->
            <div class="contact-left-footer mt-md-4">
                <ul>
                    <li>
                        <p>
                            <span class="fa fa-map-marker mr-2"></span>Policeman Colony, Mahim West
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
                <p class="text-da">© 2019 Provision. All rights reserved | Design by
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
