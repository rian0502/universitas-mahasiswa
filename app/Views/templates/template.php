<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <link rel="stylesheet" href="/adminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/adminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">

      <div class="container">
        <a href="<?= base_url(); ?>" class="navbar-brand">
          <img src="/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Universitas Mahasiswa</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= base_url() ?>" class="nav-link <?= ($title == "Home") ? 'active' : '' ?>">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>/about" class="nav-link <?= ($title == "About") ? 'active' : '' ?>">About</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>/pendaftaran" class="nav-link <?= ($title == "Pendaftaran") ? 'active' : '' ?>">Daftar Ulang</a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url() ?>/students" class="nav-link <?= ($title == "Students") ? 'active' : '' ?>">List Mahasiswa</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="<?= base_url() ?>" class="nav-link">Login <i class="fa-sharp fa-solid fa-right-to-bracket"></i></a>
            </li>
          </ul>

        </div>
        <!-- Right navbar links -->
      </div>
    </nav>
    <!-- /.navbar -->

    <div class="container-fluid mt-3">
      <?= $this->renderSection('content') ?>
    </div>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script src="/adminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminLTE/dist/js/adminlte.min.js"></script>

  <script src="/adminLTE/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/adminLTE/dist/js/demo.js"></script>

  <script>
    $(function() {
      // Summernote
      $('#deskripsi').summernote();

    });
  </script>
</body>

</html>