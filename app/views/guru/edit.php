<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Guru</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>guru/edit/<?php echo $guru['id_guru']; ?>">
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_guru" type="text" name="nama_guru" value="<?php echo $guru['nama_guru']; ?>" required>
                <label for="nama_guru" class="active">Nama Guru</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>guru" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
