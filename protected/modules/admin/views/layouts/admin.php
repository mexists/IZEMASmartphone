<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Yii::app()->name . " - " . $this->pageTitle ?></title>

	<!-- Google Fonts -->
	<link href='<?= $this->getThemePath() ?>assets/fonts/fonts.googleapis.com-TitilliumWeb.css' rel='stylesheet'
	      type='text/css'>
	<link href='<?= $this->getThemePath() ?>assets/fonts/fonts.googleapis.com-RobotoCondensed.css' rel='stylesheet'
	      type='text/css'>
	<link href='<?= $this->getThemePath() ?>assets/fonts/fonts.googleapis.com-Raleway.css' rel='stylesheet'
	      type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/admin-style.css">
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/responsive.css">
	<style>
		#header-user-menu .dropdown-menu li, #header-user-menu .dropdown-menu a {
			width: 100%;;
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?=$this->getThemePath()?>assets/js/html5shiv.min.js"></script>
	<script src="<?=$this->getThemePath()?>assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Latest jQuery form server -->
	<script src="<?= $this->getThemePath() ?>assets/js/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
				MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Administrator
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?= Yii::app()->homeUrl ?>" target="_blank"><?= Yii::app()->name ?></a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">SETTINGS</li>
						<li class="divider"></li>

						<li><a href="<?= $this->createUrl('/profile/update/',
								array('id' => Yii::app()->user->id)) ?>"><i
									class="fa fa-edit"></i> Edit</a></li>
						<?php if (Yii::app()->user->id == 1) {//admin ?>
							<li class="divider"></li>
							<li>
								<a href="<?= $this->createUrl('/admin/default/index') ?>"><i
										class="fa fa-gears"></i> Panel</a>
							</li>
							<li>
								<a href="<?= $this->createUrl('/srbac//') ?>">
									<i class="fa fa-group"></i> SRBAC</a>
							</li>
							<li>
								<a href="<?= $this->createUrl('/gii//') ?>"><i
										class="fa fa-wrench"></i> GII Tools</a>
							</li>
						<?php } ?>
						<li class="divider"></li>
						<li><a href="<?= $this->createUrl('/site/logout') ?>"><i
									class="fa fa-sign-out"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<div class="container-fluid main-container">
	<div class="col-md-2 sidebar">
		<div class="row">
			<!-- uncomment code for absolute positioning tweek see top comment in css -->
			<div class="absolute-wrapper"></div>
			<!-- Menu -->
			<div class="side-menu">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?= $this->createUrl('/admin') ?>"><span
										class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
							<li><a href="<?= $this->createUrl('/admin/application') ?>"><span
										class="glyphicon glyphicon-list-alt"></span> Order List</a></li>
							<li><a href="<?= $this->createUrl('/admin/repair') ?>"><span
										class="glyphicon glyphicon-wrench"></span> Repair Request</a></li>

							<?php /*
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1">
									<span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
								</a>

								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a href="#">Link</a></li>
											<li><a href="#">Link</a></li>
											<li><a href="#">Link</a></li>

											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#dropdown-lvl2">
													<span class="glyphicon glyphicon-off"></span> Sub Level <span
														class="caret"></span>
												</a>

												<div id="dropdown-lvl2" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav navbar-nav">
															<li><a href="#">Link</a></li>
															<li><a href="#">Link</a></li>
															<li><a href="#">Link</a></li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
							*/ ?>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

			</div>
		</div>
	</div>
	<div class="col-md-10 content">
		<?= $content ?>
	</div>
	<footer class="pull-left footer">
		<p class="col-md-12">
		<hr class="divider">
		Copyright &COPY; 2015 <a href="#"><?= Yii::app()->params['copyrightInfo'] ?>
			<span> <?= Yii::app()->params['title'] ?></a>
		</p>
	</footer>

	<!-- End footer top area -->
</div>
<script>
	$(function () {
		$('.navbar-toggle-sidebar').click(function () {
			$('.navbar-nav').toggleClass('slide-in');
			$('.side-body').toggleClass('body-slide-in');
			$('#search').removeClass('in').addClass('collapse').slideUp(200);
		});

		$('#search-trigger').click(function () {
			$('.navbar-nav').removeClass('slide-in');
			$('.side-body').removeClass('body-slide-in');
			$('.search-input').focus();
		});
	});
</script>

<!-- Latest jQuery form server -->
<script src="<?= $this->getThemePath() ?>assets/js/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="<?= $this->getThemePath() ?>assets/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?= $this->getThemePath() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?= $this->getThemePath() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?= $this->getThemePath() ?>assets/js/main.js"></script>

</body>
</html>