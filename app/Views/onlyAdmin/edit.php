<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url(); ?>/admin/mahasiswa" class="btn btn-danger mt-3 mb-3">Back</a>
<form action="/admin/mahasiswa/update" method="POST">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="<?= $student['name']; ?>" name="name">
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
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>



<?= $this->endSection(); ?>