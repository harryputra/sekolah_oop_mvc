<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Jadwal</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>jadwal/edit/<?php echo $jadwal['id_jadwal']; ?>">
        <div class="row">
            <div class="input-field col s12">
                <select name="id_guru" required>
                    <?php foreach ($guru_list as $guru): ?>
                        <option value="<?php echo $guru['id_guru']; ?>" <?php echo ($guru['id_guru'] == $jadwal['id_guru']) ? 'selected' : ''; ?>><?php echo $guru['nama_guru']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="active">Guru</label>
            </div>

            <div class="input-field col s12">
                <select name="id_mapel" required>
                    <?php foreach ($mapel_list as $mapel): ?>
                        <option value="<?php echo $mapel['id_mapel']; ?>" <?php echo ($mapel['id_mapel'] == $jadwal['id_mapel']) ? 'selected' : ''; ?>><?php echo $mapel['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="active">Mata Pelajaran</label>
            </div>

            <div class="input-field col s12">
                <select name="id_kelas" required>
                    <?php foreach ($kelas_list as $kelas): ?>
                        <option value="<?php echo $kelas['id_kelas']; ?>" <?php echo ($kelas['id_kelas'] == $jadwal['id_kelas']) ? 'selected' : ''; ?>><?php echo $kelas['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="active">Kelas</label>
            </div>

            <div class="input-field col s12">
                <input id="hari" type="text" name="hari" value="<?php echo $jadwal['hari']; ?>" required>
                <label for="hari" class="active">Hari</label>
            </div>

            <div class="input-field col s12">
                <input id="jam_mulai" type="time" name="jam_mulai" value="<?php echo $jadwal['jam_mulai']; ?>" required>
                <label for="jam_mulai" class="active">Jam Mulai</label>
            </div>

            <div class="input-field col s12">
                <input id="jam_selesai" type="time" name="jam_selesai" value="<?php echo $jadwal['jam_selesai']; ?>" required>
                <label for="jam_selesai" class="active">Jam Selesai</label>
            </div>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>jadwal" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
