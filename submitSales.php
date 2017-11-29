<?php
 
//creating response array
$response = array();
 

if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = "Salesperson"; 
	$cl2 = "Sales_Date";
	$cl3 = "Customer_name";
	$cl4 = "Address";
	$cl5 = "Phone";
	$cl6 = "POC_name";
	$cl7 = "POC_title";
	$cl8 = "POC_phone";
	$cl9 = "POC_email";
	$cl10 ="Cold_call";
	$cl11 ="POC_reseller_name";
	$cl12 ="POC_reseller_org";
	$cl13 ="POC_reseller_phone";
	$cl14 ="POC_reseller_email";
	$cl15 ="POC_reseller_fee";
	$cl16 ="Internet";
	$cl17 ="Bandwidth_req";
	$cl18 ="IP_ammount";
	$cl19 ="Bandwidth_current";
	$cl20 ="Current_provider";
	$cl21 ="Current_monthly_charge";
	$cl22 ="Current_technology";
	$cl23 ="TowerCoverage";
	$cl24 ="Notes";
	$cl25 ="Reseller";
	$cl26 ="Repeat_";
	$cl27 ="Google";
	$cl28 ="BB_now";
	$cl29 ="Walkin";
	$cl30 ="Unk";
	$cl31 ="Referral";
	$cl32 ="Public_ips";
	$cl33 ="Telephone";
	$cl34 ="Hosting";
	$cl35 ="Web_dev";
	$cl36 ="Domain_name_svcs";
	$cl37 ="Managed_services";
	$cl38 ="Consulting";
	$cl39 ="Backup_internet";
	$cl40 ="Serviceability";
	$cl41 ="Quote";
	$cl42 ="Contract_ex";
	$cl43 ="Setup_fee_receipt";
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
	if(empty($_POST['vl10'])){
    $vl10 = "";
}   else {
	$vl10 = $_POST['vl10'];
}
	$vl11 =$_POST['vl11'];
	$vl12 =$_POST['vl12'];
	$vl13 =$_POST['vl13'];
	$vl14 =$_POST['vl14'];
	$vl15 =$_POST['vl15'];
	if(empty($_POST['vl16'])){
		$vl16 = "";
	}   else {
	$vl16 =$_POST['vl16'];
	}
	if(empty($_POST['vl17'])){
		$vl17 = "";
	}else {
		$vl17 =$_POST['vl17'];
	}
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
	if(empty($_POST['vl21'])){
		$vl21 = "";
	}else {
		$vl21 =$_POST['vl21'];
	}
	if(empty($_POST['vl22'])){
		$vl22 = "";
	}else {
		$vl22 =$_POST['vl22'];
	}
	if(empty($_POST['vl23'])){
		$vl23 = "";
	}else {
		$vl23 =$_POST['vl23'];
	}
	if(empty($_POST['vl24'])){
		$vl24 = "";
	}else {
		$vl24 =$_POST['vl24'];
	}
	if(empty($_POST['vl25'])){
		$vl25 = "";
	}else {
		$vl25 =$_POST['vl25'];
	}
	if(empty($_POST['vl26'])){
		$vl26 = "";
	}else {
		$vl26 =$_POST['vl26'];
	}
	if(empty($_POST['vl27'])){
		$vl27 = "";
	}else {
		$vl27 =$_POST['vl27'];
	}
	if(empty($_POST['vl28'])){
		$vl28 = "";
	}else {
		$vl28 =$_POST['vl28'];
	}
	if(empty($_POST['vl29'])){
		$vl29 = "";
	}else {
		$vl29 =$_POST['vl29'];
	}
	if(empty($_POST['vl30'])){
		$vl30 = "";
	}else {
		$vl30 =$_POST['vl30'];
	}
	if(empty($_POST['vl31'])){
		$vl31 = "";
	}else {
		$vl31 =$_POST['vl31'];
	}
	if(empty($_POST['vl32'])){
		$vl32 = "";
	}else {
		$vl32 =$_POST['vl32'];
	}
	if(empty($_POST['vl33'])){
		$vl33 = "";
	}else {
		$vl33 =$_POST['vl33'];
	}
	if(empty($_POST['vl34'])){
		$vl34 = "";
	}else {
		$vl34 =$_POST['vl34'];
	}
	if(empty($_POST['vl35'])){
		$vl35 = "";
	}else {
		$vl35 =$_POST['vl35'];
	}
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

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
	$response = $db->createSales($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23, $cl24, $cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29 ,$cl30 ,$cl31, $cl32, $cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39 ,$cl40 ,$cl41 ,$cl42 ,$cl43,  $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 );
    
	if($response[0] != 'yes')  {
		$response['message']='Could not add team';
	}
	else if ($response[2]->num_rows > 0) {
				// output data of each row
				while($row = $response[2]->fetch_assoc()) {
					echo json_encode($row);
				}
			} else {
				echo ("0 results");
			}
}

