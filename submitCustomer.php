<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = "ID";   //ID
	$cl2 = "POC_alt1_name";
	$cl3 = "POC_alt1_title";
	$cl4 = "POC_alt1_phone";
	$cl5 = "POC_alt1_email";
	$cl6 = "POC_alt2_name";
	$cl7 = "POC_alt2_title";
	$cl8 = "POC_alt2_phone";
	$cl9 = "POC_alt2_email";
	$cl10 ="POC_alt3_name";
	$cl11 ="POC_alt3_title";
	$cl12 ="POC_alt3_phone";
	$cl13 ="POC_alt3_email";
	$cl14 ="POC_alt4_name";
	$cl15 ="POC_alt4_title";
	$cl16 ="POC_alt4_phone";
	$cl17 ="POC_alt4_email";
	$cl18 ="Customer_notes";
	$cl19 ="Building_ownership";
	$cl20 ="Multitenant";
	$cl21 ="Property_name";
	$cl22 ="Building_owners";
	$cl23 ="Property_mng_co";
	$cl24 ="POC1_Building_name";
	$cl25 ="POC1_Building_email";
	$cl26 ="POC1_Building_phone";
	$cl27 ="Notes";
	$cl28 ="POC2_Building_email";
	$cl29 ="POC2_Building_name";
	$cl30 ="POC2_Building_phone";
	//all the values 
	$vl1 = $_POST['vl1'];    //ID
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
	$vl24 =$_POST['vl24'];
	$vl25 =$_POST['vl25'];
	$vl26 =$_POST['vl26'];
	if(empty($_POST['vl27'])){
		$vl27 = "";
	}else {
		$vl27 =$_POST['vl27'];
	}
	$vl28 =$_POST['vl28'];
	$vl29 =$_POST['vl29'];
	$vl30 =$_POST['vl30'];

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createCustomer($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25,$cl26,$cl27,$cl28,$cl29,$cl30, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27,$vl28,$vl29,$vl30);
	
	if($response[0] != 'yes')  {
		$response['message']='Could not add team';
	}
	if ($response[1]->num_rows > 0) {
				// output data of each row
				echo '
				<html><head></head><body>
				<button onclick="history.go(-1);">Back </button>
				</body></html>
				';
				while($row = $response[1]->fetch_assoc()) {
					//echo json_encode($row);
					echo "<br>";
					echo "ID: " .$row["ID"] . "<br>";
					echo "POC_alt1_name: " .$row["POC_alt1_name"] . "<br>";
					echo "POC_alt1_title: " .$row["POC_alt1_title"] . "<br>";
					echo "POC_alt1_phone: " .$row["POC_alt1_phone"] . "<br>";
					echo "POC_alt1_email: " .$row["POC_alt1_email"] . "<br>";
					echo "POC_alt2_name: " .$row["POC_alt2_name"] . "<br>";
					echo "POC_alt2_title: " .$row["POC_alt2_title"] . "<br>";
					echo "POC_alt2_phone: " .$row["POC_alt2_phone"] . "<br>";
					echo "POC_alt2_email: " .$row["POC_alt2_email"] . "<br>";
					echo "POC_alt3_name: " .$row["POC_alt3_name"] . "<br>";
					echo "POC_alt3_title: " .$row["POC_alt3_title"] . "<br>";
					echo "POC_alt3_phone: " .$row["POC_alt3_phone"] . "<br>";
					echo "POC_alt3_email: " .$row["POC_alt3_email"] . "<br>";
					echo "POC_alt4_name: " .$row["POC_alt4_name"] . "<br>";
					echo "POC_alt4_title: " .$row["POC_alt4_title"] . "<br>";
					echo "POC_alt4_phone: " .$row["POC_alt4_phone"] . "<br>";
					echo "POC_alt4_email: " .$row["POC_alt4_email"] . "<br>";
					echo "Customer_notes: " .$row["Customer_notes"] . "<br>";
					echo "Building_ownership: " .$row["Building_ownership"] . "<br>";
					echo "Multitenant: " .$row["Multitenant"] . "<br>";
					echo "Property_name: " .$row["Property_name"] . "<br>";
					echo "Building_owners: " .$row["Building_owners"] . "<br>";
					echo "Property_mng_co: " .$row["Property_mng_co"] . "<br>";
					echo "POC1_Building_name: " .$row["POC1_Building_name"] . "<br>";
					echo "POC1_Building_email: " .$row["POC1_Building_email"] . "<br>";
					echo "POC1_Building_phone: " .$row["POC1_Building_phone"] . "<br>";
					echo "Notes: " .$row["Notes"] . "<br>";
					echo "POC2_Building_email: " .$row["POC2_Building_email"] . "<br>";
					echo "POC2_Building_name: " .$row["POC2_Building_name"] . "<br>";
					echo "POC2_Building_phone: " .$row["POC2_Building_phone"] . "<br>";
					
				}
			} else {
				echo ("0 results");
			}
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}

