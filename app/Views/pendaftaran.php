<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>

<div class="row d-flex justify-content-center mt-5">
    <div class="col-md-5">
        <h2>Pendaftaran Mahasiswa</h2>
        <form action="/pendafaran/create" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?> " value="<?= old('name') ?>" id="name" name="name">
                <div class="invalid-feedback">
                    <?= $validation->getError('name') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="name" name="email">
                <div class="invalid-feedback">
                    <?= $validation->getError('email') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan">
                <div class="invalid-feedback">
                    <?= $validation->getError('jurusan') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" id="alamat" name="alamat">
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="jalur" class="form-label">Jalur Masuk</label>
                <select id="jalur" class="form-select form-select-sm" aria-label=".form-select-sm example" name="jalur_masuk">
                    <option value="SNMPTN">SNMPTN</option>
                    <option value="SBMPTN">SBMPTN</option>
                    <option value="Mandiri">MANDIRI</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Pas Foto</label>
                <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" type="file" name="foto" id="image" onchange="previewImage()">
                <div class="invalid-feedback">
                    <?= $validation->getError('foto') ?>
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-2">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;

    }
</script>
<?= $this->endSection(); ?>