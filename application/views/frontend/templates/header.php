<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?= base_url('assets/frontend/') ?>img/logo-putih.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/main.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/grid-gallery.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="<?=base_url('assets/frontend/')?>fontawesome/css/all.css">
	<link rel="stylesheet" href="<?=base_url('assets/frontend/')?>fontawesome/css/brands.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<script src="<?= base_url('assets/backend/'); ?>plugins/sweetalert2/sweetalert2.all.min.js"></script>
	<title>Ada Ide</title>
</head>

<!-- menu -->

<div class="modal swing-in-top-bck" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenu" aria-hidden="true">
	<div class="modal-dialog costum-modal">
		<div class="modal-content bg-black">
			<div class="modal-body container-xl height-full">
				<div class="nav navbar">
					<div class="justify-content-start">
						<nav class="nav mt-4">
							<?php if($this->session->userdata('id_login')==null){?>
								<a class="nav-link" href="<?= base_url('auth/') ?>">Login</a>
							<?php }else{ ?>
								<a class="nav-link text-uppercase font-weight-bold" href="<?= base_url('auth/logout') ?>">Logout</a>
								<a class="nav-link text-uppercase font-weight-bold" href="<?= base_url('order') ?>">Order</a>
								<a class="nav-link text-uppercase font-weight-bold" href="<?= base_url('home/user') ?>">Profile</a>
							<?php } ?>
						</nav>
					</div>
					<div class="display-4 d-flex justify-content-end">
						<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo position-fixed" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
					</div>
				</div>
				<div class="col-md-12 d-flex align-middle justify-content-center mx-auto my-auto">
					<div class="w-50 header-text" id="modal-menu">
						<ul class="nav big-menu">
							<li class="position-relative p-1 nav-link">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/creative')?>">Creatives</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/bicara')?>">bicara</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/kitabukan')?>">kita bukan bayangan</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/wedo')?>">about us</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/merch')?>">merch</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('home/photo')?>">gallery</a>
							</li>
							<li class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="<?=base_url('ticket')?>">ticket</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="container">
					<nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
						<a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
						<nav class="nav social-menu">
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="">Youtube</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="">Instagram</a>
							</span>
							<span class="position-relative p-1" href="#">
								<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="position-absolute sup" id="logo-image">
								<a class="nav-link" href="">contact</a>
							</span>
						</nav>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- navbar mobile -->
<nav class="navbar navbar-expand-lg bg-transparent" id="nav-mobile">
	<a class="navbar-brand" href="<?=base_url('home')?>">
		<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo">
	</a>
	<img src="<?= base_url('assets/frontend/')?>img/icons8-menu.svg" data-toggle="modal" data-target="#menu-mobile" style="height: 25px;">
</nav>

<!-- Modal menu mobile-->
<div class="modal fade" id="menu-mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-black">
			<div class="modal-header bg-black">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-white">&times;</span>
				</button>
			</div>
			<div class="modal-body height-full">
				<div class="text-center text-uppercase font-weight-bold mt-5 text-kerning">
					<a class="nav-link" href="<?=base_url('home/creative')?>">Creatives</a>
					<a class="nav-link" href="<?=base_url('home/bicara')?>">bicara</a>
					<a class="nav-link" href="<?=base_url('home/kitabukan')?>">kita bukan bayangan</a>
					<a class="nav-link" href="<?=base_url('home/wedo')?>">about us</a>
					<a class="nav-link" href="<?=base_url('home/merch')?>">merch</a>
					<a class="nav-link" href="<?=base_url('home/photo')?>">gallery</a>
					<a class="nav-link" href="<?=base_url('ticket')?>">ticket</a>
				</div>
				<hr>
				<div class="text-uppercase text-center">
					<?php if($this->session->userdata('id_login')==null){?>
						<a class="nav-link" href="<?= base_url('auth/') ?>">Login</a>
					<?php }else{ ?>
						<a class="nav-link" href="<?= base_url('order') ?>">Order</a>
						<a class="nav-link" href="<?= base_url('home/userprofile') ?>">Profile</a>
						<a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
