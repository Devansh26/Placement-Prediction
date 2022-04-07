<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
    if(isset($_SESSION['username'])){
        $user=$_SESSION['username'];
    }
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
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
    <!-- nav -->
        <?php include ('navbar.php'); ?>
    <!-- //nav -->

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
                <div class="col-lg-6 content-right-bottom text-left">
                    <img src="images/learn.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 content-left-bottom entry-w3layouts-info text-left pl-lg-4">
                    <h5 class="mt-1">Online Workshops </h5>
                    <h4>Limitless learning, more possibilities</h4>
                    <p class="mt-2 text-left">The Team of Training and placement officer organize various seminars which are provided by various field experts of various renonwed companies on modern technologies required in today's market.</p>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="exp">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Live the experience</h3>
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
                    <p class="mt-2 text-left">The Pre-placement talk is a seminar which is conducted by every company before commencing the placement drive. In this seminar,the company representatives talk about various opportuinities and previlledges the company offers to its employees and what kind of things or results the expect from their recruits.</p>

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
                    <p class="mt-2 text-left">The placement drive of the companies differ from company to company. There are uptil 4 rounds among which the Aptitude Round, The Technical Quiz Round, The Coding Round, The HR Round. Each offer students various amount of salary package and recruitment rounds of that company differ according to the package offered by the company</p>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/last-content-->
    <section class="last-content text py-5">
        <div class="container py-md-3 text-center">
            <div class="last-w3pvt-inner-content px-lg-5">
                <h3 class="mb-4 tittle-w3layouts">Get started with <span>Placement </span> Process!</h3>
                <p class="px-lg-5">It is time to get started with the placement process.</p>
                <div class="buttons mt-md-4 mt-3">                    
                    <a href="error.php" class="btn btn-default">Get Started</a>                                                                          
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
                            <img class="group list-group-image img-fluid" src="images/app.jpg" alt="">
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
                    <img src="images/sai.jpg" alt=" " class="img-fluid">
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

    <!--footer-->
        <?php include ('footer.php'); ?>
    <!--//footer-->
</body>

</html>
