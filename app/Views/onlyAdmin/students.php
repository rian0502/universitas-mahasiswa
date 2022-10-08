<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>

<section class="content mt-3">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> <?= session()->getFlashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal</strong> <?= session()->getFlashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Penerimaan Mahasiswa Baru Universitas Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Jalur Masuk</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($students as $student) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $student['NPM']; ?></td>
                                        <td><?= $student['name']; ?></td>
                                        <td><?= $student['jurusan']; ?></td>
                                        <td><?= $student['jalur_masuk']; ?></td>

                                        <td>
                                            <form action="/admin/mahasiswa/view" method="POST">
                                                <input type="hidden" name="npm" value="<?= $student['NPM'] ?>">
                                                <button type="submit" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action="/admin/mahasiswa/edit" method="POST">
                                                <input type="hidden" name="npm" value="<?= $student['NPM'] ?>">
                                                <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form class="form-delete" action="/admin/mahasiswa/delete" method="POST">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="npm" value="<?= $student['NPM'] ?>">
                                                <button id="delete" type="submit" class="btn-delete btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php $no++;
                                endforeach; ?>

                        </table>
                    </div>
                </div>

            </div>

        </div>

</section>


<?= $this->endSection(); ?>