<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1  ="ID";
	$cl2  ="Customer_pIP_range";
	$cl3  ="Default_gate";
	$cl4  ="Subnet";
	$cl5  ="Cacti";
	$cl6  ="IPAM";
	$cl7  ="Bill";
	$cl8  ="Bandwidth";
	$cl9  ="Payable";
	$cl10 ="Contract_f";
	$cl11 ="U_spreadsht";
	$cl12 ="U_payable";
	$cl13 ="Four";
	$cl14 ="Email";
	$cl15 ="Ticket";
	$cl16 ="U_contact";
	$cl17 ="Map";
	$cl18 ="Survey";
	$cl19 ="IP_info";
	$cl20 ="Linkedin";
	$cl21 ="Commencement";
	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	if(empty($_POST['vl5'])){
		$vl5 = "";
	}else {
		$vl5 =$_POST['vl5'];
	}
	if(empty($_POST['vl6'])){
		$vl6 = "";
	}else {
		$vl6 =$_POST['vl6'];
	}
	if(empty($_POST['vl7'])){
		$vl7 = "";
	}else {
		$vl7 =$_POST['vl7'];
	}
	if(empty($_POST['vl8'])){
		$vl8 = "";
	}else {
		$vl8 =$_POST['vl8'];
	}
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
	if(empty($_POST['vl11'])){
		$vl11 = "";
	}else {
		$vl11 =$_POST['vl11'];
	}
	if(empty($_POST['vl12'])){
		$vl12 = "";
	}else {
		$vl12 =$_POST['vl12'];
	}
	if(empty($_POST['vl13'])){
		$vl13 = "";
	}else {
		$vl13 =$_POST['vl13'];
	}
	if(empty($_POST['vl14'])){
		$vl14 = "";
	}else {
		$vl14 =$_POST['vl14'];
	}
	if(empty($_POST['vl15'])){
		$vl15 = "";
	}else {
		$vl15 =$_POST['vl15'];
	}
	if(empty($_POST['vl16'])){
		$vl16 = "";
	}else {
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

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createPost($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21);
        
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
					echo "ID: " . $row["ID"] . "<br>";
					echo "Customer_pIP_range: " . $row["Customer_pIP_range"] . "<br>";
					echo "Default_gate: " . $row["Default_gate"] . "<br>";
					echo "Subnet: " . $row["Subnet"] . "<br>";
					echo "Cacti: " . $row["Cacti"] . "<br>";
					echo "IPAM: " . $row["IPAM"] . "<br>";
					echo "Bill: " . $row["Bill"] . "<br>";
					echo "Bandwidth: " . $row["Bandwidth"] . "<br>";
					echo "Payable: " . $row["Payable"] . "<br>";
					echo "Contract_f: " . $row["Contract_f"] . "<br>";
					echo "U_spreadsht: " . $row["U_spreadsht"] . "<br>";
					echo "U_payable: " . $row["U_payable"] . "<br>";
					echo "Four: " . $row["Four"] . "<br>";
					echo "Email: " . $row["Email"] . "<br>";
					echo "Ticket: " . $row["Ticket"] . "<br>";
					echo "U_contact: " . $row["U_contact"] . "<br>";
					echo "Map: " . $row["Map"] . "<br>";
					echo "Survey: " . $row["Survey"] . "<br>";
					echo "IP_info: " . $row["IP_info"] . "<br>";
					echo "Linkedin: " . $row["Linkedin"] . "<br>";
					echo "Commencement: " . $row["Commencement"] . "<br>";
					
				}
			} else {
				echo ("0 results");
			}
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}

