<?php
	/* @var $this MainController */
	/* @var $BrandModel BrandModel */

	$this->pageTitle = "Home";
?>

<div class="slider-area">
	<div class="zigzag-bottom"></div>
	<div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

		<div class="slide-bulletz">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ol class="carousel-indicators slide-indicators">
							<li data-target="#slide-list" data-slide-to="0" class="active"></li>
							<li data-target="#slide-list" data-slide-to="1"></li>
							<li data-target="#slide-list" data-slide-to="2"></li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="single-slide">
					<div class="slide-bg slide-one"></div>
					<div class="slide-text-wrapper">
						<div class="slide-text">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-offset-6">
										<div class="slide-content">
											<h2>iPhone specialist</h2>

											<p>We deal with iPhones everyday</p>

											<p>Problems with the screen. Problems with the OS. Whatever problem it
												is that you are facing, We have a solution for it!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="single-slide">
					<div class="slide-bg slide-two"></div>
					<div class="slide-text-wrapper">
						<div class="slide-text">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-offset-6">
										<div class="slide-content">
											<h2>Used Phones Reseller</h2>

											<p>We sell used mobile phones for all price range!
												<br>Low-end? Mid-end? High-end?<br>
												Get them all here for a very reasonable price!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="single-slide">
					<div class="slide-bg slide-three"></div>
					<div class="slide-text-wrapper">
						<div class="slide-text">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-offset-6">
										<div class="slide-content">
											<h2>Phone doctor</h2>

											<p>We fix mobile phones all the time. Any brand, any time. Go on!</p>

											<p>Click on the Repair tab for more details.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End slider area -->

<div class="promo-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-promo">
					<i class="fa fa-refresh"></i>

					<p>30 Days return</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo">
					<i class="fa fa-truck"></i>

					<p>Free shipping</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo">
					<i class="fa fa-lock"></i>

					<p>Secure payments</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo">
					<i class="fa fa-gift"></i>

					<p>New products</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End promo area -->

<div class="maincontent-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-product">
					<h2 class="section-title">Latest Products</h2>

					<div class="product-carousel">

						<?php
							foreach ($LatestBrandModels as $BrandModel):

								?>
								<div class="single-product">
									<div class="product-f-image">
										<img
											src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
											alt="">

										<div class="product-hover">
											<a href="#" class="add-to-cart-link"><i
													class="fa fa-shopping-cart"></i> Add to cart</a>
											<a href="<?= $this->createUrl('/shop/brand', array(
												'id' => $BrandModel->brand->id,
												'model' => $BrandModel->id
											)) ?>" class="view-details-link"><i
													class="fa fa-link"></i> See details</a>
										</div>
									</div>

									<h2><a href="<?= $this->createUrl('/shop/brand', array(
											'id' => $BrandModel->brand->id,
											'model' => $BrandModel->id
										)) ?>"><?= $BrandModel->name ?></a></h2>

									<div class="product-carousel-price">
										<ins>RM<?= $BrandModel->price ?></ins>
										<!--<del>$800.00</del>-->
									</div>
								</div>
							<?php
							endforeach;
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End main content area -->

<div class="brands-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="brand-wrapper">
					<h2 class="section-title">Brands</h2>

					<div class="brand-list">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__1.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__2.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__3.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__4.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__1.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__2.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__3.jpg" alt="">
						<img src="<?= $this->getThemePath() ?>assets/img/services_logo__4.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End brands area -->

<div class="product-widget-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Top Sellers</h2>
					<!--<a href="" class="wid-view-more">View All</a>-->
					<?php
						foreach ($TopBrandModels as $BrandModel):
							?>
							<div class="single-wid-product">
								<a href="<?= $this->createUrl('/shop/brand', array(
									'id' => $BrandModel->brand->id,
									'model' => $BrandModel->id
								)) ?>"><img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt=""
										class="product-thumb"></a>

								<h2><a href="<?= $this->createUrl('/shop/brand', array(
										'id' => $BrandModel->brand->id,
										'model' => $BrandModel->id
									)) ?>"><?= $BrandModel->name ?></a></h2>

								<div class="product-wid-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product-wid-price">
									<ins>RM<?= $BrandModel->price ?></ins>
								</div>
							</div>
						<?php
						endforeach;
					?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Recently Viewed</h2>
					<!--<a href="#" class="wid-view-more">View All</a>-->

					<?php
						foreach ($RecentBrandModels as $BrandModel):
							?>
							<div class="single-wid-product">
								<a href="<?= $this->createUrl('/shop/brand', array(
									'id' => $BrandModel->brand->id,
									'model' => $BrandModel->id
								)) ?>"><img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt=""
										class="product-thumb"></a>

								<h2><a href="<?= $this->createUrl('/shop/brand', array(
										'id' => $BrandModel->brand->id,
										'model' => $BrandModel->id
									)) ?>"><?= $BrandModel->name ?></a></h2>

								<div class="product-wid-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product-wid-price">
									<ins>RM<?= $BrandModel->price ?></ins>
								</div>
							</div>
						<?php
						endforeach;
					?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-product-widget">
					<h2 class="product-wid-title">Top New</h2>
					<!--<a href="#" class="wid-view-more">View All</a>-->
					<?php
						foreach ($NewBrandModels as $BrandModel):
							?>
							<div class="single-wid-product">
								<a href="<?= $this->createUrl('/shop/brand', array(
									'id' => $BrandModel->brand->id,
									'model' => $BrandModel->id
								)) ?>"><img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt=""
										class="product-thumb"></a>

								<h2><a href="<?= $this->createUrl('/shop/brand', array(
										'id' => $BrandModel->brand->id,
										'model' => $BrandModel->id
									)) ?>"><?= $BrandModel->name ?></a></h2>

								<div class="product-wid-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product-wid-price">
									<ins>RM<?= $BrandModel->price ?></ins>
								</div>
							</div>
						<?php
						endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End product widget area -->