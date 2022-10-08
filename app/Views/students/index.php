<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>

<div class="row d-flex justify-content-center">
    <div class="col-lg-6">
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
                                <h3><strong>Daftar mahasiswa yang sudah daftar ulang</strong></h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                <form action="/students" method="GET">
                                    <div class="input-group mb-3">
                                        <input autocomplete="off" type="text" name="search" value="<?= ($input == null) ? "" : $input; ?>" class="form-control" placeholder="Cari Mahasiswa........" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
                                    </div>
                                </form>

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NPM</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Jalur Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($students as $student) : ?>
                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $student['NPM']; ?></td>
                                                <td><?= $student['name']; ?></td>
                                                <td><?= $student['jurusan']; ?></td>
                                                <td><?= $student['jalur_masuk']; ?></td>

                                            </tr>

                                        <?php endforeach; ?>

                                </table>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <?= $pager->links('students','bootstrap5_pagination'); ?>
                            </div>
                        </div>

                    </div>

                </div>

        </section>


    </div>
</div>

<?= $this->endSection(); ?>