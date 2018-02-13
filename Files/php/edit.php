<?php 
	 include_once('dbconnect.php');
	 if(isset($_POST) && $_POST['users'] != ''){
	 	$newUser = $_POST['users'];
	 	$newId = $_POST['id'];

		$query = "UPDATE tblusers SET user='$newUser' WHERE id='$newId'";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully edited";
		 	echo json_encode($data);
		 }else{
		 	echo "Failed to edit";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>