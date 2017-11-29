<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = "ID";
	$cl2 = "Install_due";
	$cl3 = "Install_date";
	$cl4 = "Install_time";
	$cl5 = "Installers_needed";
	$cl6 = "IPs_needed";
	$cl7 = "Bandwidth";
	$cl8 = "Customer_pIP_range";
	$cl9 = "VLAN";
	$cl10 ="pIP_Gateway";
	$cl11 ="pIP_subnet";
	$cl12 ="CPE_prIP";
	$cl13 ="Access_point_IP	";
	$cl14 ="AP_subnet";
	$cl15 ="AP_gateway";
	$cl16 ="Customer_technical_POC_name";
	$cl17 ="Customer_technical_POC_phone";
	$cl18 ="Customer_technical_POC_email";
	$cl19 ="Special";
	$cl20 ="Additional_instructions";
	$cl21 ="Faculty_technical_POC_name";
	$cl22 ="Faculty_technical_POC_phone";
	$cl23 ="Faculty_technical_POC_email";
	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];
	$vl6 =$_POST['vl6'];
	$vl7 =$_POST['vl7'];
	$vl8 =$_POST['vl8'];
	if(empty($_POST['vl9'])){
		$vl9 = "";
	}else {
		$vl9 =$_POST['vl9'];
	}
	$vl10 =$_POST['vl10'];
	$vl11 =$_POST['vl11'];
	$vl12 =$_POST['vl12'];
	$vl13 =$_POST['vl13'];
	$vl14 =$_POST['vl14'];
	$vl15 =$_POST['vl15'];
	$vl16 =$_POST['vl16'];
	$vl17 =$_POST['vl17'];
	$vl18 =$_POST['vl18'];
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
	$vl22 =$_POST['vl22'];
	$vl23 =$_POST['vl23'];
	
    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
    $response = $db->createInstallation($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20,$cl21 , $cl22 ,$cl23, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20,$vl21 , $vl22 ,$vl23);
    
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

