<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = "ID";
	$cl2 = "Existing_infrastructure";
	$cl3 ="Radio_survey";
	$cl4 ="TX_radio";
	$cl5 ="RX_radio";
	$cl6 ="Existing_sector";
	$cl7 ="Throughput";
	$cl8 ="RSSI";
	$cl9 ="Parts_list	";
	$cl10 ="Notes";
	$cl11 ="Dist_install_labor";
	$cl12 ="CPE_install_labor";
	$cl13 ="Salesperson";
	$cl14 ="Customer_name";
	$cl15 ="Date";
	$cl16 ="Address";
	$cl17 ="Bandwidth_req";
	$cl18 ="Distribution";
	$cl19 ="Onsite_survey";
	$cl20 ="Visual_survey";
	$cl21 ="Num_people";
	//all the values 
	$vl1 = $_POST['vl1'];
	if(empty($_POST['vl2'])){
		$vl2 = "";
	}else {
		$vl2 =$_POST['vl2'];
	}	
	if(empty($_POST['vl3'])){
		$vl3 = "";
	}else {
		$vl3 =$_POST['vl3'];
	}
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];
	if(empty($_POST['vl6'])){
		$vl6 = "";
	}   else {
	$vl6 =$_POST['vl6'];
	}
	$vl7 =$_POST['vl7'];
	$vl8 =$_POST['vl8'];
	if(empty($_POST['vl9'])){
		$vl9 = "";
	}else {
		$vl9 =$_POST['vl9'];
	}
	if(empty($_POST['vl10'])){
		$vl10 = "";
	}else {
		$vl10 =$_POST['vl10'];
	}
	$vl11 =$_POST['vl11'];
	$vl12 =$_POST['vl12'];
	$vl13 =$_POST['vl13'];
	$vl14 =$_POST['vl14'];
	if(empty($_POST['vl15'])){
		$vl15 = "";
	}else {
		$vl15 =$_POST['vl15'];
	}
	$vl16 =$_POST['vl16'];
	$vl17 =$_POST['vl17'];
	if(empty($_POST['vl18'])){
		$vl18 = "";
	}else {
		$vl18 =$_POST['vl18'];
	}
	if(empty($_POST['vl19'])){
		$vl19 = "";
	}else {
		$vl19 =$_POST['vl19'];
	}
	if(empty($_POST['vl20'])){
		$vl20 = "";
	}else {
		$vl20 =$_POST['vl20'];
	}
	$vl21 =$_POST['vl21'];
	
	
    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
    $response = $db->createPlotting($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 , $cl13, $cl14, $cl15, $cl16, $cl17, $cl18, $cl19, $cl20, $cl21, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12, $vl13, $vl14, $vl15, $vl16, $vl17, $vl18, $vl19, $vl20, $vl21);
        
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

