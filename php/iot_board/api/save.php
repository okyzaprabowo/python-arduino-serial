<?php
// server header
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// ambil fungsi koneksi database
include_once 'database.php';
  
// ambil model iotdevices
include_once 'iotdevice.php';
  
// instantiation, cek kembali matkul OOP!
$database = new Database();
$db = $database->getConnection();
  
$iotdevice = new Iotdevice($db);
  
// ambil data dari body post dengan format data json
$data = json_decode(file_get_contents("php://input"));
  
// pastikan tidak boleh kosong
if(
    !empty($data->temperature) &&
    !empty($data->humidity)
    // !empty($data->position)
){
  
    // set nilai properti dengan data dari request
    $iotdevice->temperature = $data->temperature;
    $iotdevice->humidity = $data->humidity;
    // $iotdevice->position = $data->position;
  
    // create iotdata
    if($iotdevice->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // berikan response ke perangkat atau simulator
        echo json_encode(array("message" => "IoT data was created."));
    }
  
    // else gagal simpan
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // berikan response ke perangkat atau simulator
        echo json_encode(array("message" => "Unable to create IoT data."));
    }
}
  
// jika data tidak lengkap
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // berikan response ke perangkat atau simulator
    echo json_encode(array("message" => "Unable to create IoT Data. Data is incomplete."));
}
?>