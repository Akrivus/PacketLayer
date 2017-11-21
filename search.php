<?php
 
//creating response array
$response = [];
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //the search
	$query = $_POST['query'];
	

    //including the db operation file
    require_once 'DbOperation.php';
 
    $db = new DbOperation();
 
    //inserting values
	$response = $db->search($query);
	
	if ($response->num_rows > 0) {
			// output data of each row
			$res = [];
			while($row = $response->fetch_assoc()) {
				echo json_encode($row);
				//echo json_encode("ID: ".$row["ID"].". Salesperson: ".$row["Salesperson"].". Sales Date: ".$row["Sales_Date"].". Customer Name: ".$row["Customer_name_1"]." ".$row["Customer_name_2"].". Address: ".$row["Address"].". Phone: ".$row["Phone"]."<br>");
				$res[] = $row["ID"];
			}
		echo json_encode($res);	
		} else {
			echo ("0 results");
		}
	
	
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}
