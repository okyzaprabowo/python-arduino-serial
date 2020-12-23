<?php
class Database{
  
    // pastikan credential database anda disini
    private $host = "localhost";
    private $db_name = "iot_db";
    private $username = "root";
    private $password = "";
    public $conn;
  
    // fungsi koneksi database
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>