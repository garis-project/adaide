<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?= base_url('assets/frontend/') ?>/img/logo-putih.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('/assets/frontend/') ?>css/main.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/grid-gallery.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="<?=base_url('/assets/frontend/')?>/fontawesome/css/all.css">
	<link rel="stylesheet" href="<?=base_url('/assets/frontend/')?>fontawesome/css/brands.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<title>Ada Ide</title>
</head>

<!-- modal menu -->
<div class="modal swing-in-top-bck" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenu" aria-hidden="true">
	<div class="modal-dialog costum-modal">
		<div class="modal-content bg-black">
			<div class="modal-body container-xl height-full">
				<div class="nav navbar">
					<div class="justify-content-start">
						<nav class="nav mt-4">
							<a href="<?=base_url()?>auth/" class="nav-link text-uppercase font-weight-bold">Login</a>
						</nav>
					</div>
					<div class="display-4 d-flex justify-content-end">
						<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo position-fixed" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
					</div>
				</div>
				<div class="col-md-12 d-flex align-middle justify-content-center mx-auto my-auto">
					<div class="w-50 header-text" id="modal-menu">
						<ul class="nav big-menu">
							<li class="position-relative p-1 nav-link">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url()?>home/creative">Creatives</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url()?>home/bicara">bicara</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url()?>home/kitabukan">kita bukan bayangan</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>home/wedo">about us</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>home/photo">merch</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link">gallery</a>
							</li>
							<li class="position-relative -1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">ticket</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="container">
					<nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
						<a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
						<nav class="nav social-menu">
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">Youtube</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">Instagram</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">contact</a>
							</span>
						</nav>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- menu -->

<body class="bg-black">
	<div class="jumbotron bg-header">
		<div class="container-xl">
			<div class="nav navbar">
				<div class="justify-content-start">
					<span class="nav-link">
					</span>
				</div>
				<div class="display-4 d-flex justify-content-end">
					<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo position-fixed" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
					<a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
					<div class="form-inline">
						<nav class="nav social-menu">
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">Youtube</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">Instagram</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('')?>ticket">contact</a>
							</span>
						</nav>
					</div>
				</nav>
			</div>
