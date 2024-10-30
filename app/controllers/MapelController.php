<?php
include_once '../app/models/MapelModel.php';

class MapelController {
    private $model;

    public function __construct($db) {
        $this->model = new MapelModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/mapel/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama_mapel = $_POST['nama_mapel'];
            if ($this->model->create()) {
                header("Location: /sekolah_oop_mvc/public/mapel");
                exit;
            }
        }
        include '../app/views/mapel/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_mapel = $id;
            $this->model->nama_mapel = $_POST['nama_mapel'];
            if ($this->model->update()) {
                header("Location: /sekolah_oop_mvc/public/mapel");
                exit;
            }
        }
        $mapel = $this->model->getById($id);
        include '../app/views/mapel/edit.php';
    }

    public function delete($id) {
        $this->model->id_mapel = $id;
        if ($this->model->delete()) {
            header("Location: /sekolah_oop_mvc/public/mapel");
        }
    }
}
?>
