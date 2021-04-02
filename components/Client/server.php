<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "stonks";
	$conection = new mysqli($host,$user,$password,$db);
		if ($conection->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
		}
	
?>