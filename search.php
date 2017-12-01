<?php
 
//creating response array
$response = [];
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //the search
	$query = $_POST['query'];
	

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
	$response = $db->search($query);
	
	if ($response->num_rows > 0) {
		// output data of each row
		$res = [];
		while($row = $response->fetch_assoc()) {
			$res[] = $row;
		}
		echo json_encode($res);	
	} else {
		echo ("[]");
	}
	
	
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}