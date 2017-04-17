<?php $this->pageTitle = "Shop"; ?>
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
					<h2><b><?= $this->pageTitle ?></b></h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container" id="tourpackages-carousel">

		<div class="row">

			<?php /* <div class="col-xs-18 col-sm-6 col-md-6 col-lg-6">
				<a href="<?=$this->createUrl('parts')?>">
					<div class="thumbnail">
						<img src="<?=Yii::app()->baseUrl?>/images/scattered_parts.png" alt="">

						<div class="caption">
							<h4>Parts</h4>
							<p>Replacement parts for all of the popular gadgets, from iPhone batteries to MacBook displays.</p>
							<!--<p><a href="#" class="btn btn-info btn-xs" role="button">Shop</a></p>-->
						</div>
					</div>
				</a>
			</div>
            */ ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a href="<?=$this->createUrl('deviceForSale')?>">
					<div class="thumbnail">
						<img src="<?=Yii::app()->baseUrl?>/images/htc2-500x300.png" alt="">

						<div class="caption">
							<h4>Device for sale</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
							<!--<p><a href="#" class="btn btn-info btn-xs" role="button">Shop</a></p>-->
						</div>
					</div>
				</a>
			</div>

		</div>
		<!-- End row -->

	</div>
	<!-- End container -->
</div>