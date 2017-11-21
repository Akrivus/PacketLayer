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
	$cl9 =$_POST['cl9'];
	$cl10 =$_POST['cl10'];
	$cl11 =$_POST['cl11'];
	$cl12 =$_POST['cl12'];
	$cl13 =$_POST['cl13'];
	$cl14 =$_POST['cl14'];
	$cl15 =$_POST['cl15'];
	$cl16 =$_POST['cl16'];
	$cl17 =$_POST['cl17'];
	$cl18 =$_POST['cl18'];
	$cl19 =$_POST['cl19'];
	$cl20 =$_POST['cl20'];
	$cl21 =$_POST['cl21'];
	$cl22 =$_POST['cl22'];
	$cl23 =$_POST['cl23'];
	$cl24 =$_POST['cl24'];
	$cl25 =$_POST['cl25'];
	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];
	$vl6 =$_POST['vl6'];
	$vl7 =$_POST['vl7'];
	$vl8 =$_POST['vl8'];
	$vl9 =$_POST['vl9'];
	$vl10 =$_POST['vl10'];
	$vl11 =$_POST['vl11'];
	$vl12 =$_POST['vl12'];
	$vl13 =$_POST['vl13'];
	$vl14 =$_POST['vl14'];
	$vl15 =$_POST['vl15'];
	$vl16 =$_POST['vl16'];
	$vl17 =$_POST['vl17'];
	$vl18 =$_POST['vl18'];
	$vl19 =$_POST['vl19'];
	$vl20 =$_POST['vl20'];
	$vl21 =$_POST['vl21'];
	$vl22 =$_POST['vl22'];
	$vl23 =$_POST['vl23'];
	$vl24 =$_POST['vl24'];
	$vl25 =$_POST['vl25'];

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createOnsite($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25);
        
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