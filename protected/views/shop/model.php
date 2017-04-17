<?php
	/* @var $this ShopController */
	/* @var $RelatedBrandModel BrandModel */
	/* @var $BrandModels BrandModel */
	/* @var $ProductBrandModel BrandModel */

	$this->pageTitle = BrandModel::model()->findByPk($this->getQuery('model'))->name;
?>

<style>
	.thumbnail {
		position: relative;
		padding: 0px;
		margin-bottom: 20px;
	}

	.thumbnail img {
		width: 100%;
	}
</style>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2><?= "{$BrandModel->brand->name} {$BrandModel->name}" ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-sidebar">
					<h2 class="sidebar-title">Search Products</h2>

					<form action="">
						<input type="text" placeholder="Search products...">
						<input type="submit" value="Search">
					</form>
				</div>

				<div class="single-sidebar">
					<h2 class="sidebar-title">Products</h2>

					<?php
						foreach ($ProductBrandModels as $ProductBrandModel):
							?>
							<div class="thubmnail-recent">
								<img
									src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $ProductBrandModel->image_name ?>"
									class="recent-thumb" alt="">

								<h2><a href="<?= $this->createUrl('/shop/brand', array(
										'id' => $ProductBrandModel->brand->id,
										'model' => $ProductBrandModel->id
									)) ?>"><?= "{$ProductBrandModel->brand->name} {$ProductBrandModel->name}" ?></a>
								</h2>

								<div class="product-sidebar-price">
									<ins>RM<?= $ProductBrandModel->price ?></ins>
									<!--<del>$800.00</del>-->
								</div>
							</div>
						<?php endforeach; ?>
				</div>

				<div class="single-sidebar hidden">
					<h2 class="sidebar-title">Recent Posts</h2>
					<ul>
						<li><a href="">Sony Smart TV - 2015</a></li>
						<li><a href="">Sony Smart TV - 2015</a></li>
						<li><a href="">Sony Smart TV - 2015</a></li>
						<li><a href="">Sony Smart TV - 2015</a></li>
						<li><a href="">Sony Smart TV - 2015</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="product-breadcroumb">
						<a href="<?= $this->createUrl('/shop') ?>">Home</a>
						<a href="<?= $this->createUrl('/shop/brand',
							array('id' => $BrandModel->brand->id)) ?>"><?= $BrandModel->brand->name ?></a>
						<a href="<?= $this->createUrl('/shop/brand', array(
							'id' => $BrandModel->brand->id,
							'model' => $BrandModel->id
						)) ?>"><?= $BrandModel->name ?></a>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="product-images">
								<div class="product-main-img">
									<img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt="">
								</div>

								<div class="product-gallery">
									<img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt="">
									<img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt="">
									<img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt="">
									<img
										src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
										alt="">
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="product-inner">
								<h2 class="product-name"><?= "{$BrandModel->name}" ?></h2>

								<div class="product-inner-price">
									<ins>RM<?= $BrandModel->price ?></ins>
									<!--<del>$800.00</del>-->
								</div>

								<form id="cart" action="#" class="cart">
									<div class="quantity">
										<input id="quantity" type="number" size="4" class="input-text qty text"
										       title="Qty" value="1" data-model-id="<?= $BrandModel->id ?>"
										       name="quantity" min="1" step="1">
									</div>
									<button class="add_to_cart_button"
									        type="submit">Add to cart
									</button>
								</form>

								<div class="product-inner-category hidden">
									<p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a
											href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
								</div>

								<div role="tabpanel">
									<ul class="product-tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home"
										                                          role="tab"
										                                          data-toggle="tab">Description</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
										                           data-toggle="tab">Reviews</a></li>
									</ul>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home">
											<h2>Product Description</h2>

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

											<p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="profile">
											<h2>Reviews</h2>

											<div class="submit-review">
												<p><label for="name">Name</label> <input name="name" type="text"></p>

												<p><label for="email">Email</label> <input name="email" type="email">
												</p>

												<div class="rating-chooser">
													<p>Your rating</p>

													<div class="rating-wrap-post">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<p><label for="review">Your review</label> <textarea name="review" id=""
												                                                     cols="30"
												                                                     rows="10"></textarea>
												</p>

												<p><input type="submit" value="Submit"></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>


					<div class="related-products-wrapper">
						<h2 class="related-products-title">Related Products</h2>

						<div class="related-products-carousel">
							<?php
								foreach ($RelatedBrandModels as $RelatedBrandModel):
									?>
									<div class="single-product">
										<div class="product-f-image">
											<img
												src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $RelatedBrandModel->image_name ?>"
												alt="">

											<div class="product-hover">
												<a href="#" class="add-to-cart-link hidden"><i
														class="fa fa-shopping-cart"></i> Add to cart</a>
												<a href="<?= $this->createUrl('/shop/brand', array(
													'id' => $RelatedBrandModel->brand->id,
													'model' => $RelatedBrandModel->id
												)) ?>" class="view-details-link"><i
														class="fa fa-link"></i> See details</a>
											</div>
										</div>

										<h2>
											<a href="<?= $this->createUrl('/shop/brand', array(
												'id' => $RelatedBrandModel->brand->id,
												'model' => $RelatedBrandModel->id
											)) ?>"><?= "{$RelatedBrandModel->brand->name} {$RelatedBrandModel->name}" ?></a>
										</h2>

										<div class="product-carousel-price">
											<ins>RM<?= $RelatedBrandModel->price ?></ins>
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
</div>

<script>
	$(document).ready(function () {
		$("form#cart").submit(function (e) {
			e.preventDefault();

			$.ajax({
				url: '<?=$this->createUrl("AddToCart")?>',
				data: {'model-id': $("#quantity").data('model-id'), 'quantity': $("#quantity").val()},
				type: 'post',
				dataType: 'json'
			}).success(function (data) {
				console.log(data);
				alert("Item added to cart!");
				window.location.href = '<?=$this->createUrl('shop/cart')?>';
			});
		});
	});
</script>