<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?= base_url('assets/frontend/') ?>/image/logo-merah.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('/assets/frontend/') ?>css/main.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="<?=base_url('/assets/frontend/')?>/fontawesome/css/all.css">
	<link rel="stylesheet" href="<?=base_url('/assets/frontend/')?>fontawesome/css/brands.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<title>Ada Ide</title>
</head>
<body class="bg-black">
	<div class="container-xl py-5">
		<div class="nav navbar">
			<div class="justify-content-start">
				<h4 class="h4">/ticket</h4>
			</div>
			<div class="display-4 d-flex justify-content-end">
				<img src="<?= base_url('assets/frontend/')?>/img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
			</div>
		</div>
		<header class="text-left pt-5">
			<div class="row">
				<div class="col-md-2 mb-3">
					<img src="<?= base_url('assets/frontend/')?>/img/hindia.jpg" class="card-img">
				</div>
				<div class="col-md-7">
					<h3 class="h3 font-weight-bold">Hindia</h3>
					<h6 class="h6">Live Concert</h6>
					<h6 class="h6 text-danger">Tuesday, October 6, 2020 7:30 PM</h6>
					<h6 class="h6">Siliwangi Food, Tasikmalaya</h6>
				</div>
				<div class="col-md-3 col-sx-4 pt-3">
					<p class="lead text-center">Select many ticket</p>
					<div class="d-flex justify-content-center ">
						<button class="btn btn-circle btn-danger mr-3" id="btnmin" onclick=""><i class="fas fa-minus"></i></button>
						<h3 class="h3" id="qty">0</h3>
						<button class="btn btn-danger btn-circle ml-3" id="btnadd" onclick=""><i class="fas fa-plus"></i></button>
					</div>
				</div>
			</header>
		</div>
	</div>

	<!-- tutup header -->
	<!-- MAIN -->
	<div class="container-xl">
		<hr class="border-light">
		<div class="row mt-5 h-100" id="ticket">
			<div class="col-md-8">
				<p class="lead">
					AdaIde experiences come with special benefits that are accessed through a companion mobile application. This event includes:
				</p>
				<div>
					<dt class="mb-2">This event includes:</dt>
					<dd class="h6"><i class="fas fa-ticket-alt mr-3"></i>Ticket</dd>
					<dd class="h6"><i class="fas fa-cocktail mr-3"></i>First Drink on Us</dd>
					<dd class="h6"><i class="fas fa-door-open mr-3"></i>Preferred Entrance</dd>
					<dd class="h6"><i class="fas fa-headset mr-3"></i>Ambassador Support</dd>
				</div>
			</div>
			<div class="col-md-4">
				<p class="lead">You only buy 2 ticket?</p>
				<div class="card bg-black border-light">
					<div class="card-body">
						<div>
							<h5 class="card-title">Ticket</h5>
							<p class="card-subtitle mb-2 text-muted">Ticket price<span class="float-right text-light">Rp84000,-</span></p>
							<p class="card-subtitle mb-2 text-muted">Fee<span class="float-right text-light">Rp2000,-</span></p>
							<hr class="bg-light">
							<p class="card-subtitle mb-2 text-muted">Total<span class="float-right text-light">Rp86000,-</span></p>
						</div>
						<div class=""></div>
					</div>
				</div>
				<button class="btn btn-danger px-3 py-2 mt-3 w-100">Confirmation</button>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<section class="container-fluid mt-5">
		<div class="footer container-xl">
			<h1 class="display-5 text-uppercase">find us</h1>
			<h2 class="display-5 text-uppercase">ada ide HQ</h2>
			<p>Layungsari 67B <br>Jalan Lingkar Dadaha<br> Tasikmalaya<br>46124</p>
		</div>
	</section>
</div>
