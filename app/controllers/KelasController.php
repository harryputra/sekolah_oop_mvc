<?php
include_once '../app/models/KelasModel.php';

class KelasController {
    private $model;

    public function __construct($db) {
        $this->model = new KelasModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/kelas/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama_kelas = $_POST['nama_kelas'];
            if ($this->model->create()) {
                header("Location: /sekolah_oop_mvc/public/kelas");
                exit;
            }
        }
        include '../app/views/kelas/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_kelas = $id;
            $this->model->nama_kelas = $_POST['nama_kelas'];
            if ($this->model->update()) {
                header("Location: /sekolah_oop_mvc/public/kelas");
                exit;
            }
        }
        $kelas = $this->model->getById($id);
        include '../app/views/kelas/edit.php';
    }

    public function delete($id) {
        $this->model->id_kelas = $id;
        if ($this->model->delete()) {
            header("Location: /sekolah_oop_mvc/public/kelas");
        }
    }
}
?>
