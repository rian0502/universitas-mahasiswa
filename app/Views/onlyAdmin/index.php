<?= $this->extend('templates/templateAdmin'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $jumlah; ?></h3>
                        <p>Jumlah Mahasiswa</p>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $snmptn ?></h3>

                        <p>SNMPTN</p>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $sbmptn ?></h3>

                        <p>SBMPTN</p>
                    </div>
                  
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $mandiri ?></h3>

                        <p>MANDIRI</p>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</section>

<?= $this->endSection(); ?>