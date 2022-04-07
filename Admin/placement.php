<!DOCTYPE html>
<html>
<head>
	<title>Placement</title>
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
$message="";
extract($_POST);

if(isset($add))
{
	if($program==""){		
		$program=0;
	}
	if($program==""){
		$cgpa=0;
	}

	if($details=="" || $sub=="" || $link=="" || $date==""){
		$message="Fields not filled";
		echo "<script> window.onload = function() {
     		myFunction();
 		}; </script>";
 		
 		//echo "<script> window.location.href = '#mainn' ; </script>";
	}

	else{		
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
		mysqli_query($conn,"insert into placement values('','$sub','$date','$details','$dept',now(),'$program','$cgpa','$link')");

		$message="Drive Added Successfully";
		echo "<script> window.onload = function() {
     		myFunction();
 		}; </script>";
		//$err="<font color='green'>Notice added Successfully</font>";	
		
		
	}
}

?>


<center><h2>Campus Drive</h2></center>
<br><br>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Company Name</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control" required=""></div>
	</div>
	

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Date Of Placememt</div>
		<div class="col-sm-5">
		<input type="Date" name="date" class="form-control" required=""></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Description of company</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control" required=""></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	

	<div class="row">
		<div class="col-sm-4">Does Company Have any Criteria ?</div>
		<div class="col-sm-5">
			<a class="btn" href="#openmodal">YES</a>
		</div>
	</div>
	
  	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
  
	<div id="openmodal" class="modal-window">
  	<div>
	    <a href="#mainn" title="Close" class="modal-close">Close</a>
	    <h1>Criteria</h1>
	    <div>	  	    	
	    	   			    	 	
	    	<input placeholder="Programing(Out of 15)" type="number" name="program" value="" min="0" max="13" class="form-control"/>
	    	<br><br>
	    	<input placeholder="CGPA(Out of 10)" type="number" name="cgpa" value="" min="0" max="9" class="form-control"/>
	    	
	    </div>
	    <br>
	    <!--<center><input type="submit" name="submit" value="Submit" class="btn btn-success"></center>-->
	    </div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Google Form(Link)</div>
		<div class="col-sm-5">
		<input type="text" name="link" class="form-control" required=""></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Departments</div>
		<div class="col-sm-5">
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

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
		<center>
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>		
		<input type="reset" class="btn btn-success"/>		
		</center>
	

</form>	
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