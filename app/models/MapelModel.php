<?php
class MapelModel {
    private $conn;
    private $table = 'mapel';

    public $id_mapel;
    public $nama_mapel;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_mapel = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (nama_mapel) VALUES (:nama_mapel)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_mapel', $this->nama_mapel);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET nama_mapel = :nama_mapel WHERE id_mapel = :id_mapel";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_mapel', $this->nama_mapel);
        $stmt->bindParam(':id_mapel', $this->id_mapel);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_mapel = :id_mapel";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_mapel', $this->id_mapel);
        return $stmt->execute();
    }
}
?>
