<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Kelas</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>kelas/tambah">
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_kelas" type="text" name="nama_kelas" required>
                <label for="nama_kelas">Nama Kelas</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>kelas" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
