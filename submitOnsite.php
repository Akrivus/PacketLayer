<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //getting values

	//all the columns 
	$cl1 = "ID";
	$cl2 = "Survery_date";
	$cl3 = "Survery_time";
	$cl4 = "Survery_POC";
	$cl5 = "Surveyor_name";
	$cl6 = "Dist_visibility";
	$cl7 = "Dist_1";
	$cl8 = "Dist_1_direction";
	$cl9 = "Dist_2";
	$cl10 ="Dist_2_direction";
	$cl11 ="Dist_3";
	$cl12 ="Dist_3_direction";
	$cl13 ="Skid";
	$cl14 ="Other_comm_equip";
	$cl15 ="PRS";
	$cl16 ="Roof_acess";
	$cl17 ="Building_penetration";
	$cl18 ="Cable_path";
	$cl19 ="Demarc_location";
	$cl20 ="CPE_mount";
	$cl21 ="Single";
	$cl22 ="Roof";
	$cl23 ="Num_of_installers";
	$cl24 ="ToughCable";
	$cl25 ="Notes   ";
	$cl26 ="Unistrut";
	$cl27 ="J_bracket";
	$cl28 ="Existing";
	$cl29 ="Other";
	$cl30 ="Other_Isp";
	$cl31 ="Multifloor";
	$cl32 ="Single_story";
	$cl33 ="Multitenant";
	$cl34 ="Strip_mall";
	$cl35 ="Warehouse";
	$cl36 ="Plant";
	$cl37 ="Mounting";
	$cl38 ="Penetration";
	$cl39 ="Cable";
	$cl40 ="Demarc";
	$cl41 ="CPE";
	$cl42 ="Customer";
	$cl43 ="Power";
	$cl44 ="Indoor";
	$cl45 ="Roof_skid";
	$cl46 ="Rubber";
	$cl47 ="Cinder";
	$cl48 ="Pipe";
	$cl49 ="Unistrut_";
	$cl50 ="U_clamps";
	$cl51 ="Bolts";
	$cl52 ="Self";
	$cl53 ="Tapcons";
	$cl54 ="Coax";
	$cl55 ="Zip";
	$cl56 ="Anchor";
	$cl57 ="Wood";
	$cl58 ="Lag";
	$cl59 ="Metal";
	$cl60 ="Hammer";
	$cl61 ="Fish";
	$cl62 ="Fishing";
	$cl63 ="Router";
	$cl64 ="Switch";
	$cl65 ="Power_s";
	$cl66 ="Fiber_l";
	$cl67 ="Fiber_e";
	$cl68 ="Misc1";
	$cl69 ="Misc2";
	$cl70 ="Misc3";

	//all the values 
	$vl1 = $_POST['vl1'];
	$vl2 = $_POST['vl2'];
	$vl3 =$_POST['vl3'];
	$vl4 =$_POST['vl4'];
	$vl5 =$_POST['vl5'];
	if(empty($_POST['vl6'])){
		$vl6 = "";
	}else {
		$vl6 =$_POST['vl6'];
	}	$vl7 =$_POST['vl7'];
	$vl8 =$_POST['vl8'];
	$vl9 =$_POST['vl9'];
	$vl10 =$_POST['vl10'];
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
	$vl18 =$_POST['vl18'];
	$vl19 =$_POST['vl19'];
	$vl20 =$_POST['vl20'];
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
	$vl26 =$_POST['vl26'];
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
	$vl29 =$_POST['vl29'];
	$vl20 =$_POST['vl20'];
	$vl30 =$_POST['vl30'];
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
////////////////////////////////////
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
/////////////////////////////////////////
	if(empty($_POST['vl50'])){
		$vl50 = "";
	}else {
		$vl50 =$_POST['vl50'];
	}
	if(empty($_POST['vl51'])){
		$vl51 = "";
	}else {
		$vl51 =$_POST['vl51'];
	}
	if(empty($_POST['vl52'])){
		$vl52 = "";
	}else {
		$vl52 =$_POST['vl52'];
	}
	if(empty($_POST['vl53'])){
		$vl53 = "";
	}else {
		$vl53 =$_POST['vl53'];
	}
	if(empty($_POST['vl54'])){
		$vl54 = "";
	}else {
		$vl54 =$_POST['vl54'];
	}
	if(empty($_POST['vl55'])){
		$vl55 = "";
	}else {
		$vl55 =$_POST['vl55'];
	}
	if(empty($_POST['vl56'])){
		$vl56 = "";
	}else {
		$vl56 =$_POST['vl56'];
	}
	if(empty($_POST['vl57'])){
		$vl57 = "";
	}else {
		$vl57 =$_POST['vl57'];
	}
	if(empty($_POST['vl58'])){
		$vl58 = "";
	}else {
		$vl58 =$_POST['vl58'];
	}
	if(empty($_POST['vl59'])){
		$vl59 = "";
	}else {
		$vl59 =$_POST['vl59'];
	}
//////////////////////////////////
	if(empty($_POST['vl60'])){
		$vl60 = "";
	}else {
		$vl60 =$_POST['vl60'];
	}
	if(empty($_POST['vl61'])){
		$vl61 = "";
	}else {
		$vl61 =$_POST['vl61'];
	}
	if(empty($_POST['vl62'])){
		$vl62 = "";
	}else {
		$vl62 =$_POST['vl62'];
	}
	if(empty($_POST['vl63'])){
		$vl63 = "";
	}else {
		$vl63 =$_POST['vl63'];
	}
	if(empty($_POST['vl64'])){
		$vl64 = "";
	}else {
		$vl64 =$_POST['vl64'];
	}
	if(empty($_POST['vl65'])){
		$vl65 = "";
	}else {
		$vl65 =$_POST['vl65'];
	}
	if(empty($_POST['vl66'])){
		$vl66 = "";
	}else {
		$vl66 =$_POST['vl66'];
	}
	if(empty($_POST['vl67'])){
		$vl67 = "";
	}else {
		$vl67 =$_POST['vl67'];
	}
	$vl68 =$_POST['vl68'];
	$vl69 =$_POST['vl69'];
	$vl70 =$_POST['vl70'];
	
    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values

    $response = $db->createOnsite($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24 ,$cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29,$cl30 ,$cl31 ,$cl32 ,$cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39,$cl40 ,$cl41 ,$cl42 ,$cl43 ,$cl44 ,$cl45 ,$cl46 ,$cl47 ,$cl48 ,$cl49,$cl50 ,$cl51 ,$cl52 ,$cl53 ,$cl54 ,$cl55 ,$cl56 ,$cl57 ,$cl58 ,$cl59,$cl60 ,$cl61 ,$cl62 ,$cl63 ,$cl64 ,$cl65 ,$cl66 ,$cl67 ,$cl68 ,$cl69,$cl70 , $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24 ,$vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29,$vl30 ,$vl31 ,$vl32 ,$vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49,$vl50 ,$vl51 ,$vl52 ,$vl53 ,$vl54 ,$vl55 ,$vl56 ,$vl57 ,$vl58 ,$vl59,$vl60 ,$vl61 ,$vl62 ,$vl63 ,$vl64 ,$vl65 ,$vl66 ,$vl67 ,$vl68 ,$vl69,$vl70);
        
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

