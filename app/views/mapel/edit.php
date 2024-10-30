<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Mata Pelajaran</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>mapel/edit/<?php echo $mapel['id_mapel']; ?>">
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_mapel" type="text" name="nama_mapel" value="<?php echo $mapel['nama_mapel']; ?>" required>
                <label for="nama_mapel" class="active">Nama Mata Pelajaran</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>mapel" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
