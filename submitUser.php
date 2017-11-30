<?php
 
//creating response array
$response = [];
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = $_POST['cl1'];
	$cl2 = $_POST['cl2'];
	$cl3 =$_POST['cl3'];
	$cl4 =$_POST['cl4'];
	$cl5 =$_POST['cl5'];
	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
	$response = $db->createUser($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5);
	
    if($response[0] != 'yes')  {
		$response['message']='Could not add team';
    }
	if ($response[2]->num_rows > 0) {
				// output data of each row
				while($row = $response[2]->fetch_assoc()) {
					echo json_encode($row);
				}
			} else {
				echo ("0 results");
			}
	
	
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}

