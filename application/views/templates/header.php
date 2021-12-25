<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
  </head>
  <body class="bg-dark text-white">
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<div class="container">
				<a class="navbar-brand fs-3 text-light" href="#">Pendataan Vaksin</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link text-light" href="#">Home</a>
						<a class="nav-link text-light" href="#">Data</a>
						<a class="nav-link text-light" href="#">List</a>
					</div>
				</div>
			</div>
		</nav> -->

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="mb-5">
			<div>
				<h3 class="float-md-start mb-0">Pendataan Vaksin</h3>
				<nav class="nav nav-masthead justify-content-center float-md-end">
					<a class="nav-link text-decoration-none text-reset" aria-current="page" href="<?=base_url('home/index')?>">Home</a>
					<a class="nav-link text-decoration-none text-reset" href="<?=base_url('home/tambah')?>" style="<?php if($this->session->flashdata('belum_login')){echo 'display:none';}?>">Tambah</a>
					<a class="nav-link text-decoration-none text-reset" href="<?=base_url('home/list')?>">List</a>
					<?php if ($this->session->userdata('login') == '1') : ?>
					<a href="<?=base_url('home/logout')?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Logout</a>
					<?php else : ?>
				
				<a href="<?=base_url('home/login')?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Login</a>
				<?php endif ?>
				</nav>
			</div>
		</header>
