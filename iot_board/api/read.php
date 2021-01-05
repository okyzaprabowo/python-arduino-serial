<?php
// required header
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once 'database.php';
include_once 'iotdevice.php';
  
// instantiate database and data object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$iotdata = new Iotdevice($db);
  
// query data
$stmt = $iotdata->read();
$num = $stmt->rowCount();
  
// cek if not 0
if($num>0){
  
    // iot data read
    $data_arr=array();
    $data_arr["data"]=array();
  
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
  
        $data_item=array(
            "id" => $id,
            "temperature" => $temperature,
            "humidity" => $humidity,
            "position" => $position
        );
  
        array_push($data_arr["data"], $data_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // berikan response ke perangkat atau simulator
    echo json_encode($data_arr);
}
  
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // berikan response ke perangkat atau simulator
    echo json_encode(
        array("message" => "No data found.")
    );
}
?>