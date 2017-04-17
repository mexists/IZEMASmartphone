<?php
	/* @var $this ShopController */
	/* @var $BrandModel BrandModel */

	$this->pageTitle = Brand::model()->findByPk($this->getQuery('id'))->name . " Products";
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
					<h2><?= $this->pageTitle ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container" id="tourpackages-carousel">

		<div class="row">
			<?php
				foreach ($BrandModels as $BrandModel):
					?>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<a href="<?= $this->createUrl('/shop/brand/',
							array('id' => $BrandModel->brand_id, 'model' => $BrandModel->id)) ?>">
							<div class="thumbnail">
								<img style="height: 250px;width: 150px;"
								     src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"
								     alt="">

								<div class="caption">
									<h4><?= "{$BrandModel->brand->name} {$BrandModel->name}" ?></h4>

									<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>-->

									<p><a href="<?= $this->createUrl('/shop/brand/',
											array('id' => $BrandModel->brand_id, 'model' => $BrandModel->id)) ?>"
									      class="btn btn-info btn-xs"
									      role="button">View Details</a></p>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
		</div>
		<!-- End row -->

	</div>
	<!-- End container -->
</div>