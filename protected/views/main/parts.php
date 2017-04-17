<?php $this->pageTitle = "Parts"; ?>
<style>
	div.clear {
		clear: both;
	}

	div.product-chooser {

	}

	div.product-chooser.disabled div.product-chooser-item {
		zoom: 1;
		filter: alpha(opacity=60);
		opacity: 0.6;
		cursor: default;
	}

	div.product-chooser div.product-chooser-item {
		padding: 11px;
		border-radius: 6px;
		cursor: pointer;
		position: relative;
		border: 1px solid #efefef;
		margin-bottom: 10px;
		margin-left: 10px;
		margin-right: 10px;
	}

	div.product-chooser div.product-chooser-item.selected {
		border: 4px solid #428bca;
		background: #efefef;
		padding: 8px;
		filter: alpha(opacity=100);
		opacity: 1;
	}

	div.product-chooser div.product-chooser-item img {
		padding: 0;
	}

	div.product-chooser div.product-chooser-item span.title {
		display: block;
		margin: 10px 0 5px 0;
		font-weight: bold;
		font-size: 12px;
	}

	div.product-chooser div.product-chooser-item span.description {
		font-size: 12px;
	}

	div.product-chooser div.product-chooser-item input {
		position: absolute;
		left: 0;
		top: 0;
		visibility: hidden;
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
</div> <!-- End Page title area -->


<div class="container">
	<h2></h2>

	<div class="row form-group product-chooser">

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <a href="<?=$this->createUrl('partsMac')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/mac.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mac">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">Mac Parts</h2>
						<!--<span class="title">Mobile and Desktop</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a href="<?=$this->createUrl('partsIPhone')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/iphone.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPhone">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">iPhone Parts</h2>
						<!--<span class="title">Desktop</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="desktop">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a href="<?=$this->createUrl('partsIPad')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/ipad.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">iPad Parts</h2>
						<!--<span class="title">Mobile</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="mobile">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <a href="<?=$this->createUrl('partsIPod')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/ipod.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPod">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">iPod Parts</h2>
						<!--<span class="title">Mobile and Desktop</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <a href="<?=$this->createUrl('partsAndroid')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/android.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Android">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">Android Parts</h2>
						<!--<span class="title">Desktop</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="desktop">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <a href="<?=$this->createUrl('partsConsole')?>">
				<div class="product-chooser-item">
					<img src="<?= Yii::app()->baseUrl ?>/images/game_console.png"
					     class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Game Console">

					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						<h2 class="text-center">Game Console Parts</h2>
						<!--<span class="title">Mobile</span>
						<span
							class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
						<!--<input type="radio" name="product" value="mobile">-->
					</div>
					<div class="clear"></div>
				</div>
			</a>
		</div>
	</div>

</div>

<script>
	$(function () {
		/*$('div.product-chooser').find('div.product-chooser-item').not('.disabled').on('click', function(){
		 $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
		 $(this).addClass('selected');
		 $(this).find('input[type="radio"]').prop("checked", true);

		 });*/
	});
</script>