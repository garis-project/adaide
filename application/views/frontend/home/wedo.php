<style type="text/css">
	.bg-header {
		background-image: linear-gradient(
			to right bottom,
			rgba(2, 2, 2, 0.8) 0%,
			rgba(46, 46, 46, 0.8)
			),
		url('<?=base_url('assets/frontend/img/wall-press.jpg')?>');
		background-size: cover;
		background-position: center;
		height: 100vh;
	}
	@font-face {
		font-family: blom;
		src: url("<?= base_url('assets/frontend/')?>/font/Gloss_And_Bloom.ttf");
	}

	.font-blom {
		font-family: blom;
	}
</style>
<header class="jumbotron jumbotron-fluid bg-header">
	<div class="container-xl">
		<nav class="nav navbar">
			<div class="justify-content-start">
				<h4 class="h4"></h4>
			</div>
			<div class="display-4 d-flex justify-content-end">
				<img src="<?= base_url('assets/frontend/')?>img/logo-putih.png" class="logo" id="logo-image" role="dialog" data-toggle="modal" data-target="#modalMenu">
			</div>
		</nav>
		<div class="d-flex justify-content-center header-text">
			<h1 class="judul text-center display-3 font-blom rotate">We do <br>What You Want</h1>
		</div>
	</div>
	<nav class="navbar navbar-light fixed-bottom mb-3 container-xl">
		<a class="navbar-brand" id="emblem">ADAIDE<sup class="font-weight-bold">TM</sup></a>
		<div class="form-inline">
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
		</div>
	</nav>
</header>
<body class="bg-black">
	<div class="container-xl bg-black">
		<div class="row">
			<div class="col-md-4 height-100 d-flex align-items-center">
				<p class="lead">
					Never miss an update on what’s happening at Ada Ide. From our latest project to our newest merch. <span class="font-weight-bold">Subcribe Now!</span>
				</p>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-5 height-100 d-flex align-items-center">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control bg-black" placeholder="Enter Your Email Here" aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-light text-uppercase" type="button" id="button-addon2">join</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
