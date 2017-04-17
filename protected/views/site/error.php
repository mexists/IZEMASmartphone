<?php
	$this->pageTitle = Yii::app()->name . ' - Error';
	$this->breadcrumbs = array(
		'Error',
	);
?>
<style>
	.center {
		text-align: center;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: auto;
		margin-top: auto;
	}

</style>
<div class="container-fluid">
	<div class="row">
		<div class="span12">
			<div class="hero-unit center">
				<h1>Page Not Found
					<small><font face="Tahoma" color="red">Error <?= $code ?></font></small>
				</h1>
				<br />
				<strong class="error"><?php echo CHtml::encode($message); ?></strong>

				<p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers
					<b>Back</b> button to navigate to the page you have prevously come from</p>

				<p><b>Or you could just press this neat little button:</b></p>
				<a href="<?php echo Yii::app()->homeUrl ?>" class="btn btn-large btn-info"><i
						class="fa fa-home icon-white"></i> Take Me Home</a>
				<a href="<?=Yii::app()->user->returnUrl?>" class="btn btn-large btn-info"><i
						class="fa fa-arrow-left icon-white"></i> Back</a>
			</div>
			<br />

			<br />

			<p></p>
		</div>
	</div>
</div>
