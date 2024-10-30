<?php
include_once '../config/Database.php';
include_once '../app/controllers/HomeController.php';
include_once '../app/controllers/GuruController.php';
include_once '../app/controllers/MapelController.php';
include_once '../app/controllers/KelasController.php';
include_once '../app/controllers/JadwalController.php';

$database = new Database();
$db = $database->getConnection();

// Ambil URL path
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Home
if ($url === '/sekolah_oop_mvc/public/' || $url === '/sekolah_oop_mvc/public') {
    $controller = new HomeController();
    $controller->index();
}

// CRUD Guru
elseif ($url === '/sekolah_oop_mvc/public/guru') {
    $controller = new GuruController($db);
    $controller->index();
} elseif ($url === '/sekolah_oop_mvc/public/guru/tambah') {
    $controller = new GuruController($db);
    $controller->create();
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/guru\/edit\/(\d+)/', $url, $matches)) {
    $controller = new GuruController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/guru\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new GuruController($db);
    $controller->delete($matches[1]);
}

// CRUD Mapel
elseif ($url === '/sekolah_oop_mvc/public/mapel') {
    $controller = new MapelController($db);
    $controller->index();
} elseif ($url === '/sekolah_oop_mvc/public/mapel/tambah') {
    $controller = new MapelController($db);
    $controller->create();
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/mapel\/edit\/(\d+)/', $url, $matches)) {
    $controller = new MapelController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/mapel\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new MapelController($db);
    $controller->delete($matches[1]);
}

// CRUD Kelas
elseif ($url === '/sekolah_oop_mvc/public/kelas') {
    $controller = new KelasController($db);
    $controller->index();
} elseif ($url === '/sekolah_oop_mvc/public/kelas/tambah') {
    $controller = new KelasController($db);
    $controller->create();
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/kelas\/edit\/(\d+)/', $url, $matches)) {
    $controller = new KelasController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/kelas\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new KelasController($db);
    $controller->delete($matches[1]);
}

// CRUD Jadwal
elseif ($url === '/sekolah_oop_mvc/public/jadwal') {
    $controller = new JadwalController($db);
    $controller->index();
} elseif ($url === '/sekolah_oop_mvc/public/jadwal/tambah') {
    $controller = new JadwalController($db);
    $controller->create();
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/jadwal\/edit\/(\d+)/', $url, $matches)) {
    $controller = new JadwalController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/sekolah_oop_mvc\/public\/jadwal\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new JadwalController($db);
    $controller->delete($matches[1]);
}

// Jika URL tidak ditemukan
else {
    echo "404 - Page Not Found";
}
?>
