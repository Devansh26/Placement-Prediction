<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from placement where placement_id='$nid'");

header('location:index.php?page=placement');

?>