<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>

<section class="content mt-3">
    <div class="container-fluid">
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

                                        <td><button class="btn btn-primary text-light"><i class="bi bi-eye"></i></button></td>

                                        <td><button class="btn btn-warning text-light"><i class="bi bi-pencil-square"></i></button></td>
                                        <td>
                                            <form class="form-delete" action="/admin/mahasiswa/delete" method="POST">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="username" value="<?= $student['NPM'] ?>">
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