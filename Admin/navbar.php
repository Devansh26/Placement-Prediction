<!DOCTYPE html>
<html>
<head>
	<title>XIE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta charset="utf-8" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

	<link rel="stylesheet" href="style/style.css">
	<style type="text/css">
		a{text-decoration: none;}
		ul.fill a {
  			transition: all 2s;
		}
 		ul.fill a:after {
		  text-align: left;
		  content: '.';
		  margin: 0;
		  opacity: 0;
		}
		ul.fill a:hover {
		  color: #fff;
		  z-index: 1;
		}
		ul.fill a:hover:after {
		  z-index: -10;
		  animation: fill 1s forwards;
		  -webkit-animation: fill 1s forwards;
		  -moz-animation: fill 1s forwards;
		  opacity: 1;
		}
	</style>
</head>
<body>
	<header>      
      <label class="labelMenu"><i class="fa fa-bars"></i></label>      
      <label class="title"><a href="#">Placement</a></label>
    </header>    
    <div class="menu">      
      <h1></h1>        
        <nav>
          <ul class="fill">
            <a href="#">
              <?php
                if(isset($_SESSION['username'])){ ?>
                  <li class="icone1"><i class="fas fa-user-circle"></i></li>
                  <li><?php echo $_SESSION['username']; ?></li>
                <?php }else{ ?>                            
                <script type="text/javascript">
                    window.location.href='../index.php';
                    alert("Login Required");
                </script>
              <?php } ?>
            </a>
          </ul>
            <ul>
                <a href="index.php">
                    <li class="icone1"><i class="fa fa-home"></i></li>
                    <li>Home</li>
                </a>
                <a href="manage_users.php">
                    <li class="icone1"><i class="fa fa-users"></i></li>
                    <li>Manage Users</li> 
                </a>
                <a href="../User/Aptitude/admin.php">
                    <li class="icone1"><i class="fa fa-cog"></i></li>
                    <li>Quiz Management</li>
                </a>
            </ul>
            <ul>
                <a href="index.php?page=notification">
                    <li class="icone1"><i class="fa fa-bell"></i></li>
                    <li>Notifications</li> 
                </a>
                <a href="index.php?page=placement">
                    <li class="icone1"><i class="fa fa-location-arrow"></i></li>
                    <li>on_Campus Placements</li> 
                </a>
            </ul>            
            <ul>
                <?php
                    if(isset($_SESSION['username'])){ ?>       
                        <a href="../logout.php">
                            <li class="icone1"><i class="fa fa-angle-right"></i></li>
                            <li>LogOut</li>
                        </a>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="opacMenu"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    
      $(document).ready
      (
        function()
        {
          $('.labelMenu').click
          (
            function()
            {
               $('.menu').css('left', 0);
               $('.opacMenu').fadeIn();
            }
          )
          
          $('.opacMenu').click
          (
            function()
            {
               $('.menu').css('left', '-205px');
               $('.opacMenu').fadeOut();
            }
          )
        }
      )
    </script>
</body>
</html>