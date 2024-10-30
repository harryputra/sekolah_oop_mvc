<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Kelas</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>kelas/edit/<?php echo $kelas['id_kelas']; ?>">
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_kelas" type="text" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required>
                <label for="nama_kelas" class="active">Nama Kelas</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>kelas" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
