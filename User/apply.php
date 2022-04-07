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
    $sql=mysqli_query($conn,"select * from users where name='$user' ");
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
                            </ul>
                        </li>
                        <li><a href="aboutus.php">About Us</a></li>
                        
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
        
        <!-- banner -->
        <div class="banner-content-w3pvt">
            <div class="banner-w3layouts-info text-center">
                <h3>Xavier's Engineering Placement Portal</h3>                
            </div>
            <div class="move-top text-center mt-3">                
            <a href="#main1" class="move-top"><span class="fa fa-angle-double-down" aria-hidden="true"></span></a>
            </div>
        </div>
        <!-- //banner -->
        <br><br><br>
    </div>
    <!-- //main -->
    <!-- banner-bottom -->
    <div id="main1">
        <br>
        <h3 class="tittle-w3layouts two text-center mb-lg-5">Classify Your Result</h3>            
        <?php
            $sql1 = "SELECT * FROM placement_data_1 where email='".$user."'";
            $retval = mysqli_query($conn,$sql1);                        
            if($retval){
                $numberAffectedRow = mysqli_num_rows($retval);
                $result=mysqli_fetch_array($retval);
                if($numberAffectedRow>0){
                    include('results.php');
                }else{ ?>
                    <button class="btn submit mt-3">Apply Now</button><br>
                    <a class="btn submit mt-3" href="Aptitude/index.php?level=0">Easy</a>
                    <a class="btn submit mt-3" href="Aptitude/index.php?level=1">Hard</a>  
                <?php }?>
            <?php }else{
                echo("Error description: " . mysqli_error($conn));
            }
        ?>            
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    

    <script  src="script.js"></script>

    <br><br><br>
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
                            <span class="fa fa-phone mr-2"></span>+91 7715976760.
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