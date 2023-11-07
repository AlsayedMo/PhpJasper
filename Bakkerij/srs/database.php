<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'producten';
    private $user = 'Bakkerij';
    private $password = '223349';

    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Databasefout: ' . $e->getMessage();
        }
    }

    public function getProducts() {
        $stmt = $this->conn->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductByName($name) {
        $stmt = $this->conn->prepare('SELECT * FROM product WHERE name = :name');
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Voeg hier andere functies toe om databasebewerkingen uit te voeren

    public function closeConnection() {
        $this->conn = null;
    }
}

?>