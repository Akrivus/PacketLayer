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


	public function createSales($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23, $cl24, $cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29 ,$cl30, $cl31 ,$cl32, $cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39 ,$cl40 ,$cl41 ,$cl42 ,$cl43,  $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43)
    {
        $stmt = $this->conn->prepare("INSERT INTO Sales(".$cl1.",". $cl2.",".$cl3.",".$cl4.",".$cl5.",".$cl6.",".$cl7.",".$cl8.",".$cl9.",".$cl10.",".$cl11.",".$cl12.",".$cl13.",".$cl14.",".$cl15.",".$cl16.",".$cl17.",".$cl18.",".$cl19.",".$cl20.",".$cl21.",".$cl22.",".$cl23.",".$cl24.",".$cl25 .",".$cl26 .",".$cl27 .",".$cl28 .",".$cl29 .",".$cl30 .",".$cl31.",".$cl32.",". $cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39 .",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30, $vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43);
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
	
	public function createCPE($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23, $cl24, $cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29 ,$cl30 ,$cl31, $cl32, $cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39 ,$cl40 ,$cl41 ,$cl42 ,$cl43,$cl44 ,$cl45 ,$cl46 ,$cl47 ,$cl48 ,$cl49,  $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49)
    {
        $stmt = $this->conn->prepare("INSERT INTO CPE(".$cl1 .", ". $cl2 .", ".$cl3 .", ".$cl4 .", ".$cl5 .", ".$cl6 .", ".$cl7 .", ".$cl8 .", ".$cl9 .", ".$cl10 .", ".$cl11 .", ".$cl12 .", ".$cl13 .", ".$cl14 .", ".$cl15 .", ".$cl16 .", ".$cl17 .", ".$cl18 .", ".$cl19 .", ".$cl20 .", ".$cl21 .", ".$cl22 .", ".$cl23 .", ".$cl24.", ".$cl25.", ".$cl26.", ".$cl27.",".$cl28 .",".$cl29 .",".$cl30 .",".$cl31.",". $cl32.",". $cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39 .",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43.",".$cl44 .",".$cl45 .",".$cl46 .",".$cl47 .",".$cl48 .",".$cl49.") values(?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, ?, ?)");
		$stmt->bind_param("issssssssssssssssssssssssssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) {
			$sql = "SELECT * FROM CPE where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createCustomer($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24,$cl25,$cl26,$cl27,$cl28,$cl29,$cl30, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27,$vl28,$vl29,$vl30)
    {
        $stmt = $this->conn->prepare("INSERT INTO Customer(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.",".$cl26.",".$cl27.",".$cl28.",".$cl29.",".$cl30.") values(?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?)");
		//echo "INSERT INTO Customer(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24.",".$cl25.",".$cl26.",".$cl27.",".$cl28.",".$cl29.",".$cl30.") values(?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?)";
        $stmt->bind_param("isssssssssssssssssssssssssssss",$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25,$vl26,$vl27,$vl28,$vl29,$vl30);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Customer where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createDistribution($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21 ,$cl22 ,$cl23, $cl24, $cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29 ,$cl30 ,$cl31, $cl32, $cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39 ,$cl40 ,$cl41 ,$cl42 ,$cl43,$cl44 ,$cl45 ,$cl46 ,$cl47 ,$cl48 ,$cl49,  $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49)
    {
        $stmt = $this->conn->prepare("INSERT INTO Distribution(".$cl1 .", ". $cl2 .", ".$cl3 .", ".$cl4 .", ".$cl5 .", ".$cl6 .", ".$cl7 .", ".$cl8 .", ".$cl9 .", ".$cl10 .", ".$cl11 .", ".$cl12 .", ".$cl13 .", ".$cl14 .", ".$cl15 .", ".$cl16 .", ".$cl17 .", ".$cl18 .", ".$cl19 .", ".$cl20 .", ".$cl21 .", ".$cl22 .", ".$cl23 .", ".$cl24.", ".$cl25.", ".$cl26.", ".$cl27.",".$cl28 .",".$cl29 .",".$cl30 .",".$cl31.",". $cl32.",". $cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39 .",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43.",".$cl44 .",".$cl45 .",".$cl46 .",".$cl47 .",".$cl48 .",".$cl49.") values(?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, ?, ?)");
		//echo "INSERT INTO Distribution(".$cl1 .", ". $cl2 .", ".$cl3 .", ".$cl4 .", ".$cl5 .", ".$cl6 .", ".$cl7 .", ".$cl8 .", ".$cl9 .", ".$cl10 .", ".$cl11 .", ".$cl12 .", ".$cl13 .", ".$cl14 .", ".$cl15 .", ".$cl16 .", ".$cl17 .", ".$cl18 .", ".$cl19 .", ".$cl20 .", ".$cl21 .", ".$cl22 .", ".$cl23 .", ".$cl24.", ".$cl25.", ".$cl26.", ".$cl27.",".$cl28 .",".$cl29 .",".$cl30 .",".$cl31.",". $cl32.",". $cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39 .",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43.",".$cl44 .",".$cl45 .",".$cl46 .",".$cl47 .",".$cl48 .",".$cl49.") values(?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, ?, ?)";
		$stmt->bind_param("issssssssssssssssssssssssssssssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24, $vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29 ,$vl30 ,$vl31,$vl32, $vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39 ,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) {
			$sql = "SELECT * FROM Distribution where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	public function createInstallation($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20,$cl21 , $cl22 ,$cl23, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20,$vl21 , $vl22 ,$vl23)
    {
        $stmt = $this->conn->prepare("INSERT INTO Installation(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20.",".$cl21 .",". $cl22 .",".$cl23.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20,$vl21 , $vl22 ,$vl23 );
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Installation where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createOnsite($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19,$cl20 ,$cl21 ,$cl22 ,$cl23 ,$cl24 ,$cl25 ,$cl26 ,$cl27 ,$cl28 ,$cl29,$cl30 ,$cl31 ,$cl32 ,$cl33 ,$cl34 ,$cl35 ,$cl36 ,$cl37 ,$cl38 ,$cl39,$cl40 ,$cl41 ,$cl42 ,$cl43 ,$cl44 ,$cl45 ,$cl46 ,$cl47 ,$cl48 ,$cl49,$cl50 ,$cl51 ,$cl52 ,$cl53 ,$cl54 ,$cl55 ,$cl56 ,$cl57 ,$cl58 ,$cl59,$cl60 ,$cl61 ,$cl62 ,$cl63 ,$cl64 ,$cl65 ,$cl66 ,$cl67 ,$cl68 ,$cl69,$cl70 , $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24 ,$vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29,$vl30 ,$vl31 ,$vl32 ,$vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49,$vl50 ,$vl51 ,$vl52 ,$vl53 ,$vl54 ,$vl55 ,$vl56 ,$vl57 ,$vl58 ,$vl59,$vl60 ,$vl61 ,$vl62 ,$vl63 ,$vl64 ,$vl65 ,$vl66 ,$vl67 ,$vl68 ,$vl69,$vl70)
    {
        $stmt = $this->conn->prepare("INSERT INTO Onsite(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9.",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19.",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24 .",".$cl25 .",".$cl26 .",".$cl27 .",".$cl28 .",".$cl29.",".$cl30 .",".$cl31 .",".$cl32 .",".$cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39.",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43 .",".$cl44 .",".$cl45 .",".$cl46 .",".$cl47 .",".$cl48 .",".$cl49.",".$cl50 .",".$cl51 .",".$cl52 .",".$cl53 .",".$cl54 .",".$cl55 .",".$cl56 .",".$cl57 .",".$cl58 .",".$cl59.",".$cl60 .",".$cl61 .",".$cl62 .",".$cl63 .",".$cl64 .",".$cl65 .",".$cl66 .",".$cl67 .",".$cl68 .",".$cl69.",".$cl70.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        //echo "INSERT INTO Onsite(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9.",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19.",".$cl20 .",".$cl21 .",".$cl22 .",".$cl23 .",".$cl24 .",".$cl25 .",".$cl26 .",".$cl27 .",".$cl28 .",".$cl29.",".$cl30 .",".$cl31 .",".$cl32 .",".$cl33 .",".$cl34 .",".$cl35 .",".$cl36 .",".$cl37 .",".$cl38 .",".$cl39.",".$cl40 .",".$cl41 .",".$cl42 .",".$cl43 .",".$cl44 .",".$cl45 .",".$cl46 .",".$cl47 .",".$cl48 .",".$cl49.",".$cl50 .",".$cl51 .",".$cl52 .",".$cl53 .",".$cl54 .",".$cl55 .",".$cl56 .",".$cl57 .",".$cl58 .",".$cl59.",".$cl60 .",".$cl61 .",".$cl62 .",".$cl63 .",".$cl64 .",".$cl65 .",".$cl66 .",".$cl67 .",".$cl68 .",".$cl69.",".$cl70.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt->bind_param("isssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19,$vl20 ,$vl21 ,$vl22 ,$vl23 ,$vl24 ,$vl25 ,$vl26 ,$vl27 ,$vl28 ,$vl29,$vl30 ,$vl31 ,$vl32 ,$vl33 ,$vl34 ,$vl35 ,$vl36 ,$vl37 ,$vl38 ,$vl39,$vl40 ,$vl41 ,$vl42 ,$vl43 ,$vl44 ,$vl45 ,$vl46 ,$vl47 ,$vl48 ,$vl49,$vl50 ,$vl51 ,$vl52 ,$vl53 ,$vl54 ,$vl55 ,$vl56 ,$vl57 ,$vl58 ,$vl59,$vl60 ,$vl61 ,$vl62 ,$vl63 ,$vl64 ,$vl65 ,$vl66 ,$vl67 ,$vl68 ,$vl69,$vl70);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Onsite where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createPlotting($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 , $cl13, $cl14, $cl15, $cl16, $cl17, $cl18, $cl19, $cl20, $cl21, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12, $vl13, $vl14, $vl15, $vl16, $vl17, $vl18, $vl19, $vl20, $vl21)
    {
        $stmt = $this->conn->prepare("INSERT INTO Plotting(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12.",".$cl13.",". $cl14.",". $cl15.",". $cl16.",". $cl17.",". $cl18.",". $cl19.",". $cl20.",". $cl21.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssssssssssssssss",$vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 , $vl13, $vl14, $vl15, $vl16, $vl17, $vl18, $vl19, $vl20, $vl21);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Plotting where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
			$result = $this->conn->query($sql);
			return ['yes', $result ];        
			} else {
            return ['no'];
        }
    }
	
	public function createPost($cl1 , $cl2 ,$cl3 ,$cl4 ,$cl5 ,$cl6 ,$cl7 ,$cl8 ,$cl9 ,$cl10 ,$cl11 ,$cl12 ,$cl13 ,$cl14 ,$cl15 ,$cl16 ,$cl17 ,$cl18 ,$cl19 ,$cl20 ,$cl21, $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21)
    {
        $stmt = $this->conn->prepare("INSERT INTO Post(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		//echo "INSERT INTO Post(".$cl1 .",". $cl2 .",".$cl3 .",".$cl4 .",".$cl5 .",".$cl6 .",".$cl7 .",".$cl8 .",".$cl9 .",".$cl10 .",".$cl11 .",".$cl12 .",".$cl13 .",".$cl14 .",".$cl15 .",".$cl16 .",".$cl17 .",".$cl18 .",".$cl19 .",".$cl20 .",".$cl21.") values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt->bind_param("issssssssssssssssssss", $vl1 , $vl2 ,$vl3 ,$vl4 ,$vl5 ,$vl6 ,$vl7 ,$vl8 ,$vl9 ,$vl10 ,$vl11 ,$vl12 ,$vl13 ,$vl14 ,$vl15 ,$vl16 ,$vl17 ,$vl18 ,$vl19 ,$vl20 ,$vl21);
        $result = $stmt->execute();
        $last_id = $this->conn->insert_id;
        $stmt->close();
        if ($result) {
            $sql = "SELECT * FROM Post where ID = ".$vl1 . " AND ". $cl16. " = '".$vl16."' AND ".$cl14." = '". $vl14."' LIMIT 1";
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
	
	public function getSales($ID)
	{
		$sql = "SELECT * FROM Sales where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getCPE($ID)
	{
		$sql = "SELECT * FROM CPE where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getCustomer($ID)
	{
		$sql = "SELECT * FROM Customer where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getDistribution($ID)
	{
		$sql = "SELECT * FROM Distribution where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getInstallation($ID)
	{
		$sql = "SELECT * FROM Installation where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getOnsite($ID)
	{
		$sql = "SELECT * FROM Onsite where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getPlotting($ID)
	{
		$sql = "SELECT * FROM Plotting where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	public function getPost($ID)
	{
		$sql = "SELECT * FROM Post where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
	
	public function psub($tb, $ID)
	{
		$sql = "SELECT * FROM Sales where ID = ".$ID . " LIMIT 1";
		$result = $this->conn->query($sql);
		return ['yes', $result ];
	}
}
