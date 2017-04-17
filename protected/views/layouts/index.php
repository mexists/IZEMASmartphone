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
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= $this->getThemePath() ?>assets/css/responsive.css">
	<style>
		#header-user-menu .dropdown-menu li, #header-user-menu .dropdown-menu a {
			width: 100%;;
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	

	<!-- Latest jQuery form server -->
	<script src="<?= $this->getThemePath() ?>assets/js/jquery.min.js"></script>

	<style type="text/css">
		/*ajax loader image*/
		.ajax-loader {
			display: none;
			position: fixed;
			z-index: 1000;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background: rgba(0, 0, 0, .3) url('http://bit.ly/pMtW1K') 50% 50% no-repeat;
		}

		body.loading {
			/*overflow: hidden;*/
		}

		body.loading .ajax-loader {
			display: block;
		}
	</style>
</head>
<body>

<div class="header-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="user-menu">
					<div id="header-user-menu" class="header-left">
						<ul class="list-unstyled list-inline">
							<?php if (!Yii::app()->user->isGuest) { ?>
								<li class="dropdown dropdown-small">
									<a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">
										<i class="fa fa-user"></i> <?= Yii::app()->user->name ?>
									</a>
									<ul class="dropdown-menu">
										<li><a href="<?= $this->createUrl('/profile/update/',
												array('id' => Yii::app()->user->id)) ?>"><i
													class="fa fa-edit"></i> Edit</a></li>
										<?php if (Yii::app()->user->id == 1) {//admin ?>
											<li class="divider"></li>
											<li>
												<a href="<?= $this->createUrl('/admin/default/index') ?>">
													<i class="fa fa-gears"></i> Panel</a>
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

								<li><a href="<?= $this->createUrl('/shop/history//') ?>"><i
											class="fa fa-clock-o"></i> Shopping History</a></li>

								<?php
								if (count(Yii::app()->session['carts'])):
									?>
									<!--<li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>-->
									<li><a href="<?= $this->createUrl('/shop/cart//') ?>"><i
												class="fa fa-shopping-cart"></i> My Cart</a>
									</li>
									<li><a href="<?= $this->createUrl('/shop/checkout//') ?>"><i
												class="fa fa-arrow-right"></i> Checkout</a></li>

								<?php
								endif;
							}
							else { ?>
								<li><a href="<?= $this->createUrl('site/login') ?>"><i class="fa fa-sign-in"></i> Login</a>
								</li>
								<li><a href="<?= $this->createUrl('site/register') ?>"><i
											class="fa fa-pencil"></i> Register</a>
								</li>
							<?php } ?>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End header area -->

<div id="alert" class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<?php
				$alerts = array("success", "info", "warning", "danger");
				foreach ($alerts as $alert):
					if (Yii::app()->user->hasFlash($alert)) {
						?>
						<div class="alert alert-<?= $alert ?> square fade in alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<!--<strong>Well done!</strong>--> <?php echo Yii::app()->user->getFlash($alert); ?>
							<!--<a href="#fakelink" class="alert-link">important alert message.</a>-->
						</div>
					<?php }
				endforeach; ?>
		</div>
	</div>
</div>

<div class="site-branding-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="logo">
					<h1><i class="fa fa-mobile-phone"></i> <a
							href="<?= $this->createUrl('/main//') ?>">IZEMA<span> Smartphone</span></a></h1>
				</div>
			</div>

			<?php if (isset(Yii::app()->session[Yii::app()->user->id]['carts']) && !Yii::app()->user->isGuest) { ?>
				<div class="col-sm-6">
					<div class="shopping-item">
						<a href="<?= $this->createUrl('/main/cart/') ?>">Cart -
							<span
								class="cart-amount">RM<?= Yii::app()->session[Yii::app()->user->id]['carts']['amount'] ?></span>
							<i class="fa fa-shopping-cart"></i>
							<span class="product-count">
								<?= count(Yii::app()->session[Yii::app()->user->id]['carts']) ?>
							</span>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- End site branding area -->

<div class="mainmenu-area">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?= (Yii::app()->request->url == $this->createUrl('/main/home/')) ? "class='active'" : "" ?> >
						<a href="<?= $this->createUrl('/main/home/') ?>">Home</a></li>

					<?php if (!Yii::app()->user->isGuest) { ?>
						<li <?= (Yii::app()->request->url == $this->createUrl('/main/shop/')) ? "class='active'" : "" ?> >
							<a href="<?= $this->createUrl('/main/shop/') ?>">Shop</a></li>

						<?php /*
						<li <?= (Yii::app()->request->url == $this->createUrl('/main/product/')) ? "class='active'" : "" ?> >
							<a href="<?= $this->createUrl('/main/product/') ?>">Single product</a></li>
						<li <?= (Yii::app()->request->url == $this->createUrl('/main/cart/')) ? "class='active'" : "" ?> >
							<a href="<?= $this->createUrl('/main/cart/') ?>">Cart</a></li>
						<li <?= (Yii::app()->request->url == $this->createUrl('/main/checkout/')) ? "class='active'" : "" ?> >
							<a href="<?= $this->createUrl('/main/checkout/') ?>">Checkout</a></li>


						<li <?= (Yii::app()->request->url == $this->createUrl('/main/category/')) ? "class='active'" : "" ?> >
							<a href="<?= $this->createUrl('/main/category/') ?>">Category</a></li>
						*/ ?>
					<?php } ?>
					<li <?= (Yii::app()->request->url == $this->createUrl('/main/repair/')) ? "class='active'" : "" ?> >
						<a href="<?= $this->createUrl('/main/repair/') ?>">Repair</a></li>
					<li <?= (Yii::app()->request->url == $this->createUrl('/site/contact/')) ? "class='active'" : "" ?> >
						<a href="<?= $this->createUrl('/site/contact/') ?>">Contact</a></li>

					<?php /*
					<li <?= (Yii::app()->request->url == $this->createUrl('/site/page/view/about/')) ? "class='active'" : "" ?> >
						<a href="<?= $this->createUrl('/site/page/view/about/') ?>">About</a></li>
					<li <?= (Yii::app()->request->url == $this->createUrl('/main/others/')) ? "class='active'" : "" ?> >
						<a href="<?= $this->createUrl('/main/others/') ?>">Others</a></li>
					*/ ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End mainmenu area -->

<div id="content">
	<?php echo $content; ?>
</div>

<div class="footer-top-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="footer-about-us">
					<h2><?= Yii::app()->params['copyrightInfo'] ?><span> <?= Yii::app()->params['title'] ?></span></h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>

					<div class="footer-social">
						<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-menu">
					<h2 class="footer-wid-title">User Navigation </h2>
					<ul>
						<li><a href="#">My account</a></li>
						<li><a href="#">Order history</a></li>
						<li><a href="#">Wishlist</a></li>
						<li><a href="#">Vendor contact</a></li>
						<li><a href="#">Front page</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-menu">
					<h2 class="footer-wid-title">Categories</h2>
					<ul>
						<li><a href="#">Mobile Phone</a></li>
						<li><a href="#">Home accesseries</a></li>
						<li><a href="#">LED TV</a></li>
						<li><a href="#">Computer</a></li>
						<li><a href="#">Gadets</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-newsletter">
					<h2 class="footer-wid-title">Newsletter</h2>

					<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>

					<div class="newsletter-form">
						<form action="#">
							<input type="email" placeholder="Type your email">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End footer top area -->

<div class="footer-bottom-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="copyright">
					<p>&copy; 2015 <?= Yii::app()->params['copyrightInfo'] ?>. All Rights Reserved.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card-icon">
					<i class="fa fa-cc-discover"></i>
					<i class="fa fa-cc-mastercard"></i>
					<i class="fa fa-cc-paypal"></i>
					<i class="fa fa-cc-visa"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End footer bottom area -->

<!-- Bootstrap JS form CDN -->
<script src="<?= $this->getThemePath() ?>assets/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?= $this->getThemePath() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?= $this->getThemePath() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?= $this->getThemePath() ?>assets/js/main.js"></script>

<script>
	$(document).ready(function () {
		/*setTimeout(function () {
		 $("#alert").fadeOut(3000);
		 }, 7000);*/

		$('<div class="ajax-loader"></div>').appendTo($('body'));
		$(document).ajaxStart(function () {
			$("body").addClass("loading");
		});
		$(document).ajaxStop(function () {
			$("body").removeClass("loading");
		});
	});
</script>

</body>
</html>