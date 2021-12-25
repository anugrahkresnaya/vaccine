<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Pendataan Vaksin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Pendataan Vaksin</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link text-decoration-none text-reset" aria-current="page" href="<?= base_url('home/index') ?>">Home</a>
          <a class="nav-link text-decoration-none text-reset" href="<?= base_url('home/tambah') ?>" <?php if (!$this->session->userdata('login')) {
                                                                                                              echo 'hidden';
                                                                                                            } ?>>Tambah</a>
          <a class="nav-link text-decoration-none text-reset" href="<?= base_url('home/list') ?>">List</a>
          <?php if ($this->session->userdata('login') == '1') : ?>
            <a href="<?= base_url('home/logout') ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Logout</a>
          <?php else : ?>

            <a href="<?= base_url('home/login') ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Login</a>
          <?php endif ?>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>Pendataan Vaksin Kecamatan Ngasal</h1>
      <p class="lead">Silahkan lihat daftar peserta-peserta yang telah divaksin</p>
      <p class="lead">
        <a href="<?= base_url('home/list') ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Lihat di sini</a>
      </p>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Kecamatan Ngasal, Jakarta, 2025</p>
    </footer>
  </div>



</body>

</html>