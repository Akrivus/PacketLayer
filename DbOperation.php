<?php
 
class DbOperation
{
    private $conn;
	public $last_id = '';
 
    //Constructor
    function __construct()
    {
		
        require_once dirname(__FILE__) . '/config.php';
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }


	public function createSales($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24)
    {
        $stmt = $this->conn->prepare("INSERT INTO Sales(".$cl1.",". $cl2.",".$cl3.",".$cl4.",".$cl5.",".$cl6.",".$cl7.",".$cl8.",".$cl9.",".$cl10.",".$cl11.",".$cl12.",".$cl13.",".$cl14.",".$cl15.",".$cl16.",".$cl17.",".$cl18.",".$cl19.",".$cl20.",".$cl21.",".$cl22.",".$cl23.",".$cl24." ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
			$sql = "SELECT * FROM Sales where ID = ".$last_id;
			$result = $this->conn->query($sql);
			return ['yes', $last_id, $result ];
		} else {
			return ['no'];
		}
	}
	
	public function createCPE($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25,$cl26,$cl27, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27)
    {
        $stmt = $this->conn->prepare("INSERT INTO CPE(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.",".$cl26.",".$cl27.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
			$sql = "SELECT * FROM CPE where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createCustomer($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25,$cl26,$cl27,$cl28,$cl29,$cl30, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27,$vl28,$vl29,$vl30)
    {
        $stmt = $this->conn->prepare("INSERT INTO Customer(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.",".$cl26.",".$cl27.",".$cl28.",".$cl29.",".$cl30.") values(?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?)");
        $stmt->bind_param("isssssssssssssssssssssssssssss",$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27,$vl28,$vl29,$vl30);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Customer where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createDistribution($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25,$cl26,$cl27, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27)
    {
        $stmt = $this->conn->prepare("INSERT INTO Distribution(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.",".$cl26.",".$cl27.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Distribution where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	public function createInstallation($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20)
    {
        $stmt = $this->conn->prepare("INSERT INTO Installation(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 );
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Installation where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createOnsite($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25)
    {
        $stmt = $this->conn->prepare("INSERT INTO Onsite(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Onsite where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createPlotting($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 )
    {
        $stmt = $this->conn->prepare("INSERT INTO Plotting(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssssssss",$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Plotting where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createPost($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8)
    {
        $stmt = $this->conn->prepare("INSERT INTO Post(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8.") values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Post where ID = ".$vl1;
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createUser($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5)
    {
        $stmt = $this->conn->prepare("INSERT INTO User(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .") values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5);
        $result = $stmt->execute();
		$last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
			$sql = "SELECT UserID, ".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 ." FROM User where UserID = ".$last_id;
			$result = $this->conn->query($sql);
			return ['yes', $last_id, $result ];
		} else {
			return ['no'];
		}
    }
	
	public function search($query)
	{
		$sql = "SELECT ID, Salesperson, Sales_Date, Customer_name_1, Customer_name_2, Address, Phone FROM Sales WHERE Salesperson LIKE '%". $query ."%' OR Sales_Date LIKE '%". $query ."%' OR Customer_name_1 LIKE '%". $query ."%' OR Customer_name_2 LIKE '%". $query ."%' OR Address LIKE '%". $query ."%' OR Phone LIKE '%". $query ."%';";
		$result = $this->conn->query($sql);
		return $result;
	}
	
	public function psub($tb, $ID)
	{
		
	}
}