<?php
	$server = "localhost";
	$username = "musiciny_beta";
	$password = "Cu7[yl~Zo?=K";
	$db = "musiciny_beta";

	$conn = new mysqli($server,$username, $password, $db);
	//var_dump($conn);
	if($conn->connect_errno > 0){
		die("Connection Failed");
	}
?>