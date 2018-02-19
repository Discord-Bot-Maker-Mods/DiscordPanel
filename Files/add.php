<?php 
	 include_once('dbconnect.php');
	 if(isset($_POST) && $_POST['users'] != ''){
	 	$user = $_POST['users'];
	 	
		$query = "INSERT INTO tblbugs VALUES('','$user')";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully added";
		 	echo json_encode($data);
		 	//echo "Successfully to added";
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>