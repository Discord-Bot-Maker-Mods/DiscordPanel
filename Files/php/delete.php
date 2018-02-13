<?php 
	 include_once('dbconnect.php');
	 if(isset($_POST) && $_POST['users'] != ''){
	 	$id = $_POST['users'];

		$query = "DELETE FROM tblusers WHERE id=$id";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully Deleted";
		 	echo json_encode($data);
		 }else{
		 	echo "Failed to delete";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>