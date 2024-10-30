<?php
class GuruModel {
    private $conn;
    private $table = 'guru';

    public $id_guru;
    public $nama_guru;

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
        $query = "SELECT * FROM " . $this->table . " WHERE id_guru = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (nama_guru) VALUES (:nama_guru)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_guru', $this->nama_guru);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET nama_guru = :nama_guru WHERE id_guru = :id_guru";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_guru', $this->nama_guru);
        $stmt->bindParam(':id_guru', $this->id_guru);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_guru = :id_guru";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_guru', $this->id_guru);
        return $stmt->execute();
    }
}
?>
