<?php
	
    include('scripts/connect_db.php');

	session_start();

	$check=$_SESSION['username'];

	$session=mysqli_query($conn,"SELECT username FROM admins WHERE username='$check' ")or die(mysql_error());

	$row=mysqli_fetch_array($session);

	$login_session=$row['username'];

	if(!isset($login_session)) {
		$user_msg = 'Please Login First!';
		header('location: login.php?user_msg='.$user_msg.'');
	}

?>