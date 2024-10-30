-- Buat database baru (jika belum dibuat)
CREATE DATABASE IF NOT EXISTS sekolah_oop_mvc;
USE sekolah_oop_mvc;

-- Buat tabel Guru
CREATE TABLE IF NOT EXISTS guru (
    id_guru INT AUTO_INCREMENT PRIMARY KEY,
    nama_guru VARCHAR(100) NOT NULL
);

-- Buat tabel Mata Pelajaran (Mapel)
CREATE TABLE IF NOT EXISTS mapel (
    id_mapel INT AUTO_INCREMENT PRIMARY KEY,
    nama_mapel VARCHAR(100) NOT NULL
);

-- Buat tabel Kelas
CREATE TABLE IF NOT EXISTS kelas (
    id_kelas INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(100) NOT NULL
);

-- Buat tabel Jadwal
CREATE TABLE IF NOT EXISTS jadwal (
    id_jadwal INT AUTO_INCREMENT PRIMARY KEY,
    id_guru INT NOT NULL,
    id_mapel INT NOT NULL,
    id_kelas INT NOT NULL,
    hari ENUM('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat') NOT NULL,
    jam_mulai TIME NOT NULL,
    jam_selesai TIME NOT NULL,
    FOREIGN KEY (id_guru) REFERENCES guru(id_guru) ON DELETE CASCADE,
    FOREIGN KEY (id_mapel) REFERENCES mapel(id_mapel) ON DELETE CASCADE,
    FOREIGN KEY (id_kelas) REFERENCES kelas(id_kelas) ON DELETE CASCADE
);

-- Masukkan data contoh ke dalam tabel Guru
INSERT INTO guru (nama_guru) VALUES ('Pak Budi'), ('Ibu Ani'), ('Pak Candra');

-- Masukkan data contoh ke dalam tabel Mata Pelajaran (Mapel)
INSERT INTO mapel (nama_mapel) VALUES ('Matematika'), ('Bahasa Indonesia'), ('Fisika');

-- Masukkan data contoh ke dalam tabel Kelas
INSERT INTO kelas (nama_kelas) VALUES ('Kelas 10 IPA'), ('Kelas 11 IPS'), ('Kelas 12 IPA');

-- Masukkan data contoh ke dalam tabel Jadwal
INSERT INTO jadwal (id_guru, id_mapel, id_kelas, hari, jam_mulai, jam_selesai)
VALUES 
(1, 1, 1, 'Senin', '08:00:00', '09:30:00'),
(2, 2, 2, 'Selasa', '09:00:00', '10:30:00'),
(3, 3, 3, 'Rabu', '10:00:00', '11:30:00');
