<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Guru</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>guru/tambah" class="btn waves-effect waves-light blue">Tambah Guru</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Guru</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_guru']; ?></td>
                <td><?php echo $row['nama_guru']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>guru/edit/<?php echo $row['id_guru']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>guru/hapus/<?php echo $row['id_guru']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
