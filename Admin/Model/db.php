<?php
	
	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "agriculture_domain";

	function getConnection(){
	   global $host;
	   global $dbuser;
	   global $dbpass;
	   global $dbname;
		$con = mysqli_connect($host , $dbuser , $dbpass , $dbname);
		return $con;
	}
	


?>