<?php 
    session_start();
    include('../connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>XIE</title>
    
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
    <link href="../css/tabled.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    
	   <link rel="stylesheet" href="toast/style.css">

    <style type="text/css">
        .capital{
            text-transform:uppercase;
        }
        .tab {
            padding-left: 140px;
        }
        .container{
          color: white;
          font-size: 1.1em;
        }
    </style>

	
</head>
<body>
  <?php include('navbar.php'); ?>
    
<?php
$message="";
extract($_POST);
if(isset($update))
{
	$status = $_POST["status"];
	mysqli_query($conn,"update users set status='$status' where id='".$_GET['id']."'");
	$message="Status Updated";
	echo "<script> window.onload = function() {
     		myFunction();
 		}; </script>";
//$err="<font color='blue'>Notice updated </font>";

}

//select old notice

$q=mysqli_query($conn,"select * from users where id='".$_GET['id']."'");
$res=mysqli_fetch_array($q);

?>
<div class="container">
<br><br><br><br>
<center>
<h2>Update Status Of <?php echo $res['name']; ?>(Currently <?php echo $res['status']; ?>)</h2>
</center>
<br>
<form method="post">

	<div class="row"></div>


	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-2">Status:</div>
		<div class="col-sm-5">			
			<select class="form-control" id="select_1" name="status">
    			<option value="Unplaced">Unplaced</option>
    			<option value="Placed">Placed</option>
			</select>
		</div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>

	
	<br>
		<center>
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
		</div>
		</center>

</form>
</div>
<div id="snackbar">
	<?php echo $message; ?>
</div>

<script>	
function myFunction(msg) {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<br><br><br>


</body>
</html>