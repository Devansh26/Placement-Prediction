<!DOCTYPE html>
<html>
<head>
	<title>XIE</title>
	<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="../css/modal.css" rel="stylesheet">	
	<link href="../css/tabled.css" rel="stylesheet">
	<link rel="stylesheet" href="toast/style.css">
	<style type="text/css">
		.container{
			color: white;
			font-size: 1.0em;
		}
	</style>
</head>
<body>

<?php
extract($_POST);
if(isset($update))
{
	$sel=array();
	$i=0;
	if(!empty($_POST['dept'])){			
		foreach($dept as $selected){
			$sel[$i]=$selected;
			$i++;
		}
		if($i==1){
			if($sel[0]=='IT'){
				$dept=1;
			}elseif($sel[0]=='CS'){
				$dept=2;
			}elseif($selected=='EXTC'){
				$dept=3;
			}else{}
		}elseif($i==2){
			if($sel[0]=='IT' && $sel[1]=='CS'){
				$dept=4;
			}elseif($sel[0]=='IT' && $sel[1]=='EXTC'){
				$dept=5;
			}elseif($sel[0]=='CS' && $sel[1]=='EXTC'){
				$dept=6;
			}	
		}elseif($i==3){
			$dept=7;
		}else{}				
	}else{
		$dept=8;
	}
	mysqli_query($conn,"update placement set company_name='$sub',date_of_placement='$date',description='$details',dept_code='$dept',criteria_program='$program',criteria_cgpa='$cgpa' ,form_link='$link' where placement_id='".$_GET['placement_id']."'");
$message="Drive Updated";
echo "<script> window.onload = function() {
     		myFunction();
 		}; </script>";

//$err="<font color='blue'>Notice updated </font>";

}

//select old notice

$q=mysqli_query($conn,"select * from placement where placement_id='".$_GET['placement_id']."'");
$res=mysqli_fetch_array($q);

?>
<div class="container">
<center>
<h2>UPDATE NOTICE</h2>
</center>
<br>
<form method="post">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>



	<div class="row">
		<div class="col">Company Name</div>
		<div class="col">
		<input type="text" name="sub" value="<?php echo $res['company_name']; ?>" class="form-control"/></div>
	</div>

	<br>


	<div class="row">
		<div class="col">Drive Date</div>
		<div class="col">
		<input type="Date" name="date" value="<?php echo $res['date_of_placement']; ?>" class="form-control"/></div>		
	</div>
	<br>

	<div class="row">
		<div class="col">Enter Details</div>
		<div class="col">
		<textarea name="details" class="form-control"></textarea></div>
	</div>

	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	

  	<div class="row">
		<div class="col">Does Company Have any Criteria ?</div>
		<div class="col">
			<a class="btn" href="#openmodal">YES</a>
		</div>
	</div>
	
	<div id="openmodal" class="modal-window">
  	<div>
	    <a href="#mainn" title="Close" class="modal-close">Close</a>
	    <h1>Criteria</h1>
	    <div>	  	    	
	    	   			    	 	
	    	<input type="number" name="program" value="<?php echo $res['criteria_program']; ?>" min="0" max="13" class="form-control"/>
	    	<br><br>
	    	<input type="number" name="cgpa" value="<?php echo $res['criteria_cgpa']; ?>" min="0" max="9" class="form-control"/>
	    	<?php 	    		
				/*$sql=mysqli_query($conn,"select name,email from users");
				while($r=mysqli_fetch_array($sql))
				{
					echo "<option value='".$r['email']."'>".$r['name']."</option>";
				}*/
			?>			
			
	    </div>
	    <br>
	    <!--<center><input type="submit" name="submit" value="Submit" class="btn btn-success"></center>-->
	    </div>
	</div>

	<br>


	<div class="row">
		<div class="col">Google Form(Link)</div>
		<div class="col">
		<input type="text" name="link" value="<?php echo $res['form_link']; ?>" class="form-control"/></div>		
	</div>
	<br>

	<div class="row">
		<div class="col">Departments</div>
		<div class="col">
			<div class="custom-control custom-checkbox custom-control-inline">
		  		<input type="checkbox" name="dept[]" class="custom-control-input" id="IT" value="IT">
		  		<label class="custom-control-label" for="IT">IT</label>
			</div>

			<div class="custom-control custom-checkbox custom-control-inline">
		  		<input type="checkbox" name="dept[]" class="custom-control-input" id="CS" value="CS">
		  		<label class="custom-control-label" for="CS">CS</label>
			</div>

			<div class="custom-control custom-checkbox custom-control-inline">
		 		<input type="checkbox" name="dept[]" class="custom-control-input" id="EXTC" value="EXTC"> 
		  		<label class="custom-control-label" for="EXTC">EXTC</label>
			</div>
		</div>		
	</div>

	<br>
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-5"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Drive" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
		</div>
		

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
</body>
</html>