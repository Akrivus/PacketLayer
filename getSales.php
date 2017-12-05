 <?php
 
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST') {
  $id = $_POST['i'];
  require_once 'DbOperation.php';
  $db = new DbOperation();
  $response = $db->getSales($id);
  if ($response[1]->num_rows > 0) {
    echo json_encode($response[1]);
  }
  else {
    echo "[]";
  }
}
