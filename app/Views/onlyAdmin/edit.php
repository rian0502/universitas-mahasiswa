<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>



<form action="/admin/mahasiswa/update" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="<?= $student['name']; ?>" name="name">
        
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="nama" value="<?= $student['email']; ?>" name="email">
    </div>
    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="number" class="form-control" id="npm" value="<?= $student['NPM'] ?>" readonly name="npm">
    </div>

    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" value="<?= $student['jurusan']; ?>" name="jurusan">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" value="<?= $student['alamat'] ?>" name="alamat">
    </div>
    <div class="form-group mb-3">
        <label>Jalur Masuk</label>
        <select class="form-control select2" style="width: 100%;" name="jalur_masuk">
            <option <?= ($student['jalur_masuk'] == 'SBMPTN') ? 'selected' : '' ?>>SBMPTN</option>
            <option <?= ($student['jalur_masuk'] == 'SNMPTN') ? 'selected' : '' ?>> SNMPTN</option>
            <option <?= ($student['jalur_masuk'] == 'Mandiri') ? 'selected' : '' ?>>MANDIRI</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="image" class="form-label">Pas Foto</label>
        <input class="form-control" type="file" id="image" name="pas_foto" onchange="previewImage()">

        <?php if ($student['pas_foto'] != null) : ?>
            <img class="img-preview img-fluid mt-2 col-sm-2" src="/uploads/<?= $student['pas_foto'] ?>">
        <?php else : ?>
            <img class="img-preview img-fluid mt-2 col-sm-2">
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>

<?= $this->endSection(); ?>