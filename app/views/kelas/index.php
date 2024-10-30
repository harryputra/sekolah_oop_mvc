<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Kelas</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>kelas/tambah" class="btn waves-effect waves-light blue">Tambah Kelas</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_kelas']; ?></td>
                <td><?php echo $row['nama_kelas']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>kelas/edit/<?php echo $row['id_kelas']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>kelas/hapus/<?php echo $row['id_kelas']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
