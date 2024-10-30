<?php
class JadwalModel {
    private $conn;
    private $table = 'jadwal';

    public $id_jadwal;
    public $id_guru;
    public $id_mapel;
    public $id_kelas;
    public $hari;
    public $jam_mulai;
    public $jam_selesai;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT j.*, g.nama_guru, m.nama_mapel, k.nama_kelas FROM " . $this->table . " j
                  JOIN guru g ON j.id_guru = g.id_guru
                  JOIN mapel m ON j.id_mapel = m.id_mapel
                  JOIN kelas k ON j.id_kelas = k.id_kelas";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_jadwal = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  (id_guru, id_mapel, id_kelas, hari, jam_mulai, jam_selesai) 
                  VALUES (:id_guru, :id_mapel, :id_kelas, :hari, :jam_mulai, :jam_selesai)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_guru', $this->id_guru);
        $stmt->bindParam(':id_mapel', $this->id_mapel);
        $stmt->bindParam(':id_kelas', $this->id_kelas);
        $stmt->bindParam(':hari', $this->hari);
        $stmt->bindParam(':jam_mulai', $this->jam_mulai);
        $stmt->bindParam(':jam_selesai', $this->jam_selesai);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET id_guru = :id_guru, id_mapel = :id_mapel, id_kelas = :id_kelas, 
                      hari = :hari, jam_mulai = :jam_mulai, jam_selesai = :jam_selesai 
                  WHERE id_jadwal = :id_jadwal";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_guru', $this->id_guru);
        $stmt->bindParam(':id_mapel', $this->id_mapel);
        $stmt->bindParam(':id_kelas', $this->id_kelas);
        $stmt->bindParam(':hari', $this->hari);
        $stmt->bindParam(':jam_mulai', $this->jam_mulai);
        $stmt->bindParam(':jam_selesai', $this->jam_selesai);
        $stmt->bindParam(':id_jadwal', $this->id_jadwal);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_jadwal = :id_jadwal";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_jadwal', $this->id_jadwal);
        return $stmt->execute();
    }
}
?>
