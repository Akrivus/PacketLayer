<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1  ="ID";
	$cl2  ="CPE_date";
	$cl3  ="CPE_name";
	$cl4  ="Technician1_name";
	$cl5  ="Technician1_start";
	$cl6  ="Technician1_stop";
	$cl7  ="Technician1_hours";
	$cl8  ="Technician2_name";
	$cl9  ="Technician2_start";
	$cl10 ="Technician2_stop";
	$cl11 ="Technician2_hours";
	$cl12 ="Technician3_name";
	$cl13 ="Technician3_start";
	$cl14 ="Technician3_stop";
	$cl15 ="Technician3_hours";
	$cl16 ="Technician4_name";
	$cl17 ="Technician4_start";
	$cl18 ="Technician4_stop";
	$cl19 ="Technician4_hours";
	$cl20 ="Technician5_name";
	$cl21 ="Technician5_start";
	$cl22 ="Technician5_stop";
	$cl23 ="Technician5_hours";
	$cl24 ="Technician6_name";
	$cl25 ="Technician6_start";
	$cl26 ="Technician6_stop";
	$cl27 ="Technician6_hours";
	$cl28 ="Technician7_name";
	$cl29 ="Technician7_start";
	$cl30 ="Technician7_stop";
	$cl31 ="Technician7_hours";
	$cl32 ="Technician8_name";
	$cl33 ="Technician8_start";
	$cl34 ="Technician8_stop";
	$cl35 ="Technician8_hours";
	$cl36 ="System_log";
	$cl37 ="NTP";
	$cl38 ="SSH";
	$cl39 ="SNMP";
	$cl40 ="GPS";
	$cl41 ="Timezone";
	$cl42 ="User_pass";
	$cl43 ="Host";
	$cl44 ="Scrn_sht";
	$cl45 ="Rate";
	$cl46 ="Labeling";
	$cl47 ="Pics";
	$cl48 ="Max_capacity_circ";
	$cl49 ="Notes";
	//all the values 
	$vl1 = $_POST['vl1']; //ID
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
	$vl26 =$_POST['vl26'];
	$vl27 =$_POST['vl27'];
	$vl28 =$_POST['vl28'];
	$vl29 =$_POST['vl29'];
	$vl30 =$_POST['vl30'];
	$vl31 =$_POST['vl31'];
	$vl32 =$_POST['vl32'];
	$vl33 =$_POST['vl33'];
	$vl34 =$_POST['vl34'];
	$vl35 =$_POST['vl35'];
	if(empty($_POST['vl36'])){
		$vl36 = "";
	}else {
		$vl36 =$_POST['vl36'];
	}
	if(empty($_POST['vl37'])){
		$vl37 = "";
	}else {
		$vl37 =$_POST['vl37'];
	}
	if(empty($_POST['vl38'])){
		$vl38 = "";
	}else {
		$vl38 =$_POST['vl38'];
	}
	if(empty($_POST['vl39'])){
		$vl39 = "";
	}else {
		$vl39 =$_POST['vl39'];
	}
	if(empty($_POST['vl40'])){
		$vl40 = "";
	}else {
		$vl40 =$_POST['vl40'];
	}
	if(empty($_POST['vl41'])){
		$vl41 = "";
	}else {
		$vl41 =$_POST['vl41'];
	}
	if(empty($_POST['vl42'])){
		$vl42 = "";
	}else {
		$vl42 =$_POST['vl42'];
	}
	if(empty($_POST['vl43'])){
		$vl43 = "";
	}else {
		$vl43 =$_POST['vl43'];
	}
	if(empty($_POST['vl44'])){
		$vl44 = "";
	}else {
		$vl44 =$_POST['vl44'];
	}
	if(empty($_POST['vl45'])){
		$vl45 = "";
	}else {
		$vl45 =$_POST['vl45'];
	}
	if(empty($_POST['vl46'])){
		$vl46 = "";
	}else {
		$vl46 =$_POST['vl46'];
	}
	if(empty($_POST['vl47'])){
		$vl47 = "";
	}else {
		$vl47 =$_POST['vl47'];
	}
	if(empty($_POST['vl48'])){
		$vl48 = "";
	}else {
		$vl48 =$_POST['vl48'];
	}
	if(empty($_POST['vl49'])){
		$vl49 = "";
	}else {
		$vl49 =$_POST['vl49'];
	}

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createCPE($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23, $cl24, $cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29 ,$cl30 ,$cl31, $cl32, $cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39 ,$cl40 ,$cl41 ,$cl42 ,$cl43,$cl44 ,$cl45 ,$cl46 ,$cl47 ,$cl48 ,$cl49,  $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49);

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

