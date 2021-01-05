<?php
class Iotdevice{
  
    // properti koneksi database
    private $conn;
    private $table_name = "iot_device";
  
    // properti dari iot device sesuai dengan percobaan ubidots
    public $id;
    public $temperature;
    public $humidity;
    public $position;
  
    // konstruktor, cek kembali mata kuliah OOP!
    public function __construct($db){
        $this->conn = $db;
    }

    // fungsi create iot data
    function create(){
    
        // query simpan data
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    temperature=:temperature, humidity=:humidity";
    
        // prepare, sanitize, bind dan execute. Lihat dokumentasi php
        $stmt = $this->conn->prepare($query);

        $this->temperature=htmlspecialchars(strip_tags($this->temperature));
        $this->humidity=htmlspecialchars(strip_tags($this->humidity));
    
        $stmt->bindParam(":temperature", $this->temperature);
        $stmt->bindParam(":humidity", $this->humidity);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
    
        return false;
        
    }

    // fungsi read data
    public function read(){
  
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                ORDER BY
                    id";

        
    
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
    
        return $stmt;
    }
}
?>