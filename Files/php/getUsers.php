<?php
 	include_once('dbconnect.php');
	$query2 = "SELECT * FROM tblusers";
	$result = $conn->query($query2);
	$arr;
	$i = 0;
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			 $arr[$i]['id'] = $row['id'];
			 $arr[$i]['user'] = $row['user'];
			 $i++;
		}
		$data['status'] = 1;
		$data['dataSet'] = $arr;
		echo json_encode($data);		
	}else{
		$data['data'] = array('msg' => "No records", 'status' => 0);
		echo json_encode($data);
	}
			

?>