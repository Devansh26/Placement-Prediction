<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from users where id='$nid'");

header('Location:manage_users.php?del=success');

?>