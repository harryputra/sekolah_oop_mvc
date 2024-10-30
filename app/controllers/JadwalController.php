<?php
include_once '../app/models/JadwalModel.php';
include_once '../app/models/GuruModel.php';
include_once '../app/models/MapelModel.php';
include_once '../app/models/KelasModel.php';

class JadwalController {
    private $model;
    private $guruModel;
    private $mapelModel;
    private $kelasModel;

    public function __construct($db) {
        $this->model = new JadwalModel($db);
        $this->guruModel = new GuruModel($db);
        $this->mapelModel = new MapelModel($db);
        $this->kelasModel = new KelasModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/jadwal/index.php';
    }

    public function create() {
        // Cek apakah request menggunakan method POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari form
            $this->model->id_guru = $_POST['id_guru'];
            $this->model->id_mapel = $_POST['id_mapel'];
            $this->model->id_kelas = $_POST['id_kelas'];
            $this->model->hari = $_POST['hari'];
            $this->model->jam_mulai = $_POST['jam_mulai'];
            $this->model->jam_selesai = $_POST['jam_selesai'];
    
            // Simpan data jadwal
            if ($this->model->create()) {
                $_SESSION['flash_message'] = "Jadwal berhasil ditambahkan.";
                header("Location: /sekolah_oop_mvc/public/jadwal");
                exit;
            }
        }
    
        // Ambil data guru, mapel, dan kelas untuk dropdown
        $guru_list = $this->guruModel->getAll();
        $mapel_list = $this->mapelModel->getAll();
        $kelas_list = $this->kelasModel->getAll();
    
        // Kirim data ke view
        include '../app/views/jadwal/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_jadwal = $id;
            $this->model->id_guru = $_POST['id_guru'];
            $this->model->id_mapel = $_POST['id_mapel'];
            $this->model->id_kelas = $_POST['id_kelas'];
            $this->model->hari = $_POST['hari'];
            $this->model->jam_mulai = $_POST['jam_mulai'];
            $this->model->jam_selesai = $_POST['jam_selesai'];
            if ($this->model->update()) {
                header("Location: /sekolah_oop_mvc/public/jadwal");
                exit;
            }
        }
        $jadwal = $this->model->getById($id);
        $guru_list = $this->guruModel->getAll();
        $mapel_list = $this->mapelModel->getAll();
        $kelas_list = $this->kelasModel->getAll();
        include '../app/views/jadwal/edit.php';
    }

    public function delete($id) {
        $this->model->id_jadwal = $id;
        if ($this->model->delete()) {
            header("Location: /sekolah_oop_mvc/public/jadwal");
        }
    }
}
?>
