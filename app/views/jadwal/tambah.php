<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Jadwal</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>jadwal/tambah">
        <!-- Dropdown untuk Guru -->
        <div class="row">
            <div class="input-field col s12">
                <select name="id_guru" required>
                    <option value="" disabled selected>Pilih Guru</option>
                    <?php foreach ($guru_list as $guru): ?>
                        <option value="<?php echo $guru['id_guru']; ?>"><?php echo $guru['nama_guru']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Guru</label>
            </div>

            <!-- Dropdown untuk Mata Pelajaran -->
            <div class="input-field col s12">
                <select name="id_mapel" required>
                    <option value="" disabled selected>Pilih Mata Pelajaran</option>
                    <?php foreach ($mapel_list as $mapel): ?>
                        <option value="<?php echo $mapel['id_mapel']; ?>"><?php echo $mapel['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Mata Pelajaran</label>
            </div>

            <!-- Dropdown untuk Kelas -->
            <div class="input-field col s12">
                <select name="id_kelas" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <?php foreach ($kelas_list as $kelas): ?>
                        <option value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Kelas</label>
            </div>

            <!-- Dropdown untuk Hari -->
            <div class="input-field col s12">
                <select name="hari" required>
                    <option value="" disabled selected>Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                </select>
                <label>Hari</label>
            </div>

            <!-- Time picker untuk Jam Mulai -->
            <div class="input-field col s12">
                <input id="jam_mulai" type="text" name="jam_mulai" class="timepicker" required>
                <label for="jam_mulai">Jam Mulai</label>
            </div>

            <!-- Time picker untuk Jam Selesai -->
            <div class="input-field col s12">
                <input id="jam_selesai" type="text" name="jam_selesai" class="timepicker" required>
                <label for="jam_selesai">Jam Selesai</label>
            </div>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>jadwal" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
