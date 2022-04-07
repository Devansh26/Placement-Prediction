<?php
	if(isset($_GET['resume'])){
		$name=$_GET['resume'];
		$file = '../User/uploads/'.$name;
		$filename = $name;
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($file));
		header('Accept-Ranges: bytes');
		@readfile($file);

	}

?>