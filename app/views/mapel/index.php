<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Mata Pelajaran</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>mapel/tambah" class="btn waves-effect waves-light blue">Tambah Mata Pelajaran</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Mata Pelajaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_mapel']; ?></td>
                <td><?php echo $row['nama_mapel']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>mapel/edit/<?php echo $row['id_mapel']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>mapel/hapus/<?php echo $row['id_mapel']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
