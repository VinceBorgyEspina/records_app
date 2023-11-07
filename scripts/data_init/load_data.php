<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'borgyvince321';
    private $database = 'ph_locale';
    private $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }


    public function getConnection() {
        echo 'Connected';
        return $this->conn;
    }
    
   
    

}

?>