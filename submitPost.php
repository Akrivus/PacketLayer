<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = $_POST['cl1'];
	$cl2 = $_POST['cl2'];
	$cl3 =$_POST['cl3'];
	$cl4 =$_POST['cl4'];
	$cl5 =$_POST['cl5'];
	$cl6 =$_POST['cl6'];
	$cl7 =$_POST['cl7'];
	$cl8 =$_POST['cl8'];
	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];
	$vl6 =$_POST['vl6'];
	$vl7 =$_POST['vl7'];
	$vl8 =$_POST['vl8'];

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createPost($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8);
        
    if($response[0] != 'yes')  {
		$response['message']='Could not add team';
	}
	if ($response[1]->num_rows > 0) {
				// output data of each row
				while($row = $response[1]->fetch_assoc()) {
					echo json_encode($row);

				}
			} else {
				echo ("0 results");
			}
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}

echo json_encode($response);