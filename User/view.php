<?php 
session_start();
include('../connection.php');

if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}
 $un=$_SESSION["username"];
 $q=" select name from files where email='$un' ";
 $result=mysqli_query($conn,$q);
if(mysqli_num_rows($result)>0){
 	while($r=mysqli_fetch_assoc($result)){ 		
 		//echo $r['name'];
 		$file = 'uploads/'.$r['name'];
		$filename = $r['name'];
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($file));
		header('Accept-Ranges: bytes');
		@readfile($file);
 	}
}
?>