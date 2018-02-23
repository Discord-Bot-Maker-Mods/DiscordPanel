<?php
include('../Template/config.php');
?>
<?php

	$conn = new mysqli($server,$username, $password, $db);
	//var_dump($conn);
	if($conn->connect_errno > 0){
		die("Connection Failed");
	}
?>