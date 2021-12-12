<?php 

	$des = "../Asset".$_FILES["myfile"]["name"];

	$src = $_FILES["myfile"]["tmp_name"];

	move_uploaded_file($src, $des);
		
	
?>