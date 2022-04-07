<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Login</title>  
  <link rel="stylesheet" href="../login/dist/style.css">

  <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->    

    <link rel="stylesheet" href="../login/style.css">
    <link rel="stylesheet" href="../login/css/style.css">

    <!-- font-awesome icons -->
    <style type="text/css">
      .topleft {
        position: absolute;
        top: 8px;
        left: 16px;
        font-size: 22px;
      }
      .topleft a{
        color: white;
        font-style: 'Roboto';
        font-weight: bold;
        font-style: italic;
        text-decoration: none;
      }
    </style>
    
</head>
<body>
  
  <!-- Background -->   
    <canvas id="canvas"></canvas>
    <script  src="style/index.js"></script>
  <!-- Background Over-->
<div class="topleft">
    <a href="../index.php">Placement</a>
  </div>
  <br><br><br>
<div class="cont"> 
        <div class="form">
          <form action="#" method="post">
            <h1>Login</h1>
            <input type="text"
                   class="user"
                   placeholder="Username" name="username"/>
            <input type="password" 
                   class="pass"
                   placeholder="Password" name="password" />
            <button class="login" type="submit" name="sb">Login</button>
          </form>
        </div>
        </div>

<?php
//echo "string";
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','placement');
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

if(isset($_POST['sb'])){
  $user = $_POST['username'];
  $pass = $_POST['password']; 
  $sql = "SELECT name FROM users where email='".$user."' AND password='".$pass."'";
$retval = mysqli_query($conn,$sql);
if($retval){
  $numberAffectedRow = mysqli_num_rows($retval);
  if($numberAffectedRow>0){
  //$result="true";
  //echo "true";
  session_start();
  $_SESSION['username']=$user;
  ?>
  <script type="text/javascript">
    window.location.href='index.php';
    //alert("Login Required");
  </script>     
  <?php} 
  else{
    ?><script type="text/javascript">
      window.location.href='index.php';
      alert("Wrong Username/password");
    </script>
    <?php
      //echo "Wrong";
      //header("Location:index.php");
      //echo("Login unsuccessfully");
  }
}
else{
  ?><script type="text/javascript">
      window.location.href='login.php';
      alert("Wrong Username/password");
    </script>
  <?php
  }
}

mysqli_close($conn);
?>

</body>
</html>