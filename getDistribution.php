 <?php
 
$response = array();
if($_SERVER['REQUEST_METHOD']=='GET') {
  $id = $_GET['i'];
  require_once 'DbOperation.php';
  $db = new DbOperation();
  $response = $db->getDistribution($id);
  if ($response[1]->num_rows > 0) {
    while ($row = $response[1]->fetch_assoc()) {
	     echo json_encode($row);
	   }
  }
  else {
    echo "[]";
  }
}
