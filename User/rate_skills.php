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

    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="../notify/style.css">

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
    </div>

    <br><br>
    <div id="main1">
    <center>
        <h1>Please Rate You Self Honestly!</h1>
        <h1>Predict Your Placement for <?php echo $_GET['company'];?></h1>
    </center>
    <br><br><br>
    
    <div class="container">
    <form id="res" name="form1" method="POST">

        <div class="row">
            <div class="col-lg-6 form-group">
                <label>Quantative</label>
                <input class="form-control" type="number" name="quants" placeholder="Out of 15"required="">
            </div>
            <div class="col-lg-6 form-group">
                <label>Logical Reasoning</label>
                <input class="form-control" type="number" name="logical" placeholder="Out of 15" required="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 form-group">
                <label>Verbal</label>
                <input class="form-control" type="number" name="verbal" placeholder="Out of 15" required="">
            </div>
            <div class="col-lg-6 form-group">
                <label>Networking</label>
                <input class="form-control" type="number" name="network" placeholder="Out of 15"required="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 form-group">
                <label>CC</label>
                <input class="form-control" type="number" name="cc" placeholder="Out of 15" required="">
            </div>
            <div class="col-lg-6 form-group">
                <label>WS</label>
                <input class="form-control" type="number" name="ws" placeholder="Out of 15" required="">
            </div>                            
        </div>

        <div class="row">
            <div class="col-lg-6 form-group">
                <label>QA</label>
                <input class="form-control" type="number" name="qa" placeholder="Out of 15" required="">
            </div>
            <div class="col-lg-6 form-group">
                <label>DA</label>
                <input class="form-control" type="number" name="da" placeholder="Out of 15" required="">
            </div>                                    
        </div>
        
        <div class="row">
            <div class="col-lg-6 form-group">
                <label>ARTIFICIAL INTELLIGENCE</label>
                <input class="form-control" type="number" name="ai" placeholder="Out of 15" required="">
            </div>                                        
        </div>
                            
                            
        <center><input type="submit" name="submit" class="btn submit mt-3" value="Apply Now"></center>    
        <div id="Notifications"></div>

    </form>
    </div>  
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    

    
            
            <?php                                
            if(isset($_POST['submit'])){

                $quants = $_POST['quants'];
                $logical = $_POST['logical'];
                $verbal = $_POST['verbal'];
                $network = $_POST['network'];
                $cc = $_POST['cc'];
                $ws = $_POST['ws'];
                $qa = $_POST['qa'];
                $da = $_POST['da'];
                $ai = $_POST['ai'];

                $sql="UPDATE placement_data_1 
                SET 
                Quants='$quants', LR='$logical', 
                Verbal='$verbal', 
                Networking='$network', 
                CC='$cc', WS='$ws', 
                QA='$qa', DA='$da',
                AI ='$ai' 
                where email='$user'";
                $retval = mysqli_query($conn,$sql);
                if(!$retval){
                    echo $conn->error;
                }
                //$conn->query("insert into placement_data_1(quants,logical,verbal,program,cgpa,network,cc,ws,qa,da,ai) values('$quants', '$logical', '$verbal', '$program', '$cgpa', '$network', '$cc', '$ws', '$qa', '$da', '$ai')");
            
                
                //$output='1';
                $command = escapeshellcmd("python test/logistic_regression_my.py $user");
                $output = shell_exec($command);            
                //$output=file_get_contents("http://localhost:1234/Placement/User/test/logistic_regression_my.py $user");
                //echo $output;                            
                //echo "<script> toastr.info('".$output."') </script>";
                $r1='Placed';
                $r2='NotPlaced';                                                          
                if($output == $r1){
                    echo "<script> toastr.success('You have chances to be placed') </script>";
                }elseif($output == $r2){                    
                    echo "<script> toastr.info('Sorry But You dont have chance to be placed') </script>";
                }else{                    
                    echo "<script> toastr.error('No Result Try again Please') </script>";
                }                                 
            } 
            ?>                                 
                                             

    </script>
    <!--Notification -->
    <script  src="../notify/script.js"></script>
    <!-- \\ notification -->

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