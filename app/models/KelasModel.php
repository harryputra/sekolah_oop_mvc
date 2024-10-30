<?php
class KelasModel {
    private $conn;
    private $table = 'kelas';

    public $id_kelas;
    public $nama_kelas;

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
        $query = "SELECT * FROM " . $this->table . " WHERE id_kelas = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (nama_kelas) VALUES (:nama_kelas)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_kelas', $this->nama_kelas);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET nama_kelas = :nama_kelas WHERE id_kelas = :id_kelas";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_kelas', $this->nama_kelas);
        $stmt->bindParam(':id_kelas', $this->id_kelas);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_kelas = :id_kelas";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kelas', $this->id_kelas);
        return $stmt->execute();
    }
}
?>
