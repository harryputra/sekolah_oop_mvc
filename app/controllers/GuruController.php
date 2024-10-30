<?php
include_once '../app/models/GuruModel.php';

class GuruController {
    private $model;

    public function __construct($db) {
        $this->model = new GuruModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/guru/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama_guru = $_POST['nama_guru'];
            if ($this->model->create()) {
                header("Location: /sekolah_oop_mvc/public/guru");
                exit;
            }
        }
        include '../app/views/guru/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_guru = $id;
            $this->model->nama_guru = $_POST['nama_guru'];
            if ($this->model->update()) {
                header("Location: /sekolah_oop_mvc/public/guru");
                exit;
            }
        }
        $guru = $this->model->getById($id);
        include '../app/views/guru/edit.php';
    }

    public function delete($id) {
        $this->model->id_guru = $id;
        if ($this->model->delete()) {
            header("Location: /sekolah_oop_mvc/public/guru");
        }
    }
}
?>
