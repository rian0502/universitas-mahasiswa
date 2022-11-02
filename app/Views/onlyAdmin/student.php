<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>
<div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="/uploads/<?= $student['pas_foto'] ?>" alt="User profile picture">
    </div>
    <h3 class="profile-username text-center"><?= $student['name'] ?></h3>
    <p class="text-muted text-center"><?= $student['email'] ?></p>
    <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
            <b>NPM</b> <a class="float-right"><?= $student['NPM']; ?></a>
        </li>
        <li class="list-group-item">
            <b>Jurusan</b> <a class="float-right"><?= $student['jurusan']; ?></a>
        </li>
        <li class="list-group-item">
            <b>Jalur Masuk</b> <a class="float-right"><?= $student['jalur_masuk'] ?></a>
        </li>
        <li class="list-group-item">
            <b>Alamat</b> <a class="float-right"><?= $student['alamat'] ?></a>
        </li>
        <li class="list-group-item">
            <b>Dosen Pembimbing</b> <a class="float-right"><?= $student['nama'] ?></a>
        </li>
    </ul>
    <a href="/admin/mahasiswa/edit/<?= $student['NPM']?>" class="btn btn-primary btn-block"><b>Edit</b></a>
    <a href="<?= base_url(); ?>/admin/mahasiswa" class="btn btn-danger btn-block">Back</a>
</div>
<?= $this->endSection(); ?>