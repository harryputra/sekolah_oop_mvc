<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Jadwal</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>jadwal/tambah" class="btn waves-effect waves-light blue">Tambah Jadwal</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['nama_guru']; ?></td>
                <td><?php echo $row['nama_mapel']; ?></td>
                <td><?php echo $row['nama_kelas']; ?></td>
                <td><?php echo $row['hari']; ?></td>
                <td><?php echo $row['jam_mulai']; ?></td>
                <td><?php echo $row['jam_selesai']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>jadwal/edit/<?php echo $row['id_jadwal']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>jadwal/hapus/<?php echo $row['id_jadwal']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
