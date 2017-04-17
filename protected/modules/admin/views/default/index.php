<?php
	$this->pageTitle = 'Admin Dashboard';
	$this->getClientPlugin('datatable');
?>
<style>
	.panel-body .btn:not(.btn-block) {
		width: 120px;
		margin-bottom: 10px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				Dashboard
			</div>
			<div class="panel-body">
				Welcome admin!
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bookmark"></span> Quick Shortcuts</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12 col-md-12 text-center">
							<a href="<?= $this->createUrl('/admin/application') ?>" class="btn btn-danger btn-lg" role="button"><span
									class="glyphicon glyphicon-list-alt"></span> <br />Orders</a>
							<a href="<?= $this->createUrl('/admin/repair') ?>" class="btn btn-warning btn-lg" role="button"><span
									class="glyphicon glyphicon-wrench"></span> <br />Repair</a>
							<a href="#" class="btn btn-primary btn-lg" role="button"><span
									class="glyphicon glyphicon-signal"></span> <br />Reports</a>
							<a href="#" class="btn btn-primary btn-lg" role="button"><span
									class="glyphicon glyphicon-comment"></span> <br />Feedback</a>
						</div>
						<!--<div class="col-xs-6 col-md-6">
							<a href="#" class="btn btn-success btn-lg" role="button"><span
									class="glyphicon glyphicon-user"></span> <br />Users</a>
							<a href="#" class="btn btn-info btn-lg" role="button"><span
									class="glyphicon glyphicon-file"></span> <br />Notes</a>
							<a href="#" class="btn btn-primary btn-lg" role="button"><span
									class="glyphicon glyphicon-picture"></span> <br />Photos</a>
							<a href="#" class="btn btn-primary btn-lg" role="button"><span
									class="glyphicon glyphicon-tag"></span> <br />Tags</a>
						</div>-->
					</div>
					<a href="<?= Yii::app()->homeUrl ?>" class="btn btn-success btn-lg btn-block" role="button"><span
							class="glyphicon glyphicon-globe"></span> Website</a>
				</div>
			</div>
		</div>
	</div>
</div>
