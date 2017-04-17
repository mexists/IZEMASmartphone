<?php

/* @var $this ApplicationController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = "Order List";

$this->getClientPlugin('jQuery-UI');
$this->getClientPlugin('datatable');

$this->breadcrumbs=array(
	'Applications',
);

$this->menu=array(
	array('label'=>'Create Application', 'url'=>array('create')),
	array('label'=>'Manage Application', 'url'=>array('admin')),
);
?>


<h2><?= $this->pageTitle ?></h2>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<table id="repair-request" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th class="text-center">No.</th>
					<th class="text-center">Order No.</th>
					<th class="text-center">Customer Name</th>
					<th class="text-center">Shipping</th>
					<th class="text-center">Total Price</th>
					<th class="text-center">Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach (Application::model()->findAll() as $i => $app) {
					?>
					<tr data-app-id="<?= $app->id ?>">
						<td class="text-center"><?= $i + 1 ?></td>
						<td><?= $app->application_no ?></td>
						<td><?= $app->user->first_name ?></td>
						<td>RM <?= number_format($app->shipping_charge, 2) ?></td>
						<td>RM <?= number_format($app->total, 2) ?></td>
						<td class="text-center">
							<a name="view" class="btn btn-default btn-sm"
							   href="<?= $this->createUrl('view', array('id' => $app->id)) ?>"><i
										class="fa fa-eye"></i></a>
							<a name="edit" class="btn btn-default btn-sm"
							   href="<?= $this->createUrl('update', array('id' => $app->id)) ?>"><i
										class="fa fa-edit"></i></a>
							<a name="delete" class="btn btn-default btn-sm"
							   href="<?= $this->createUrl('delete', array('id' => $app->id)) ?>"
							   onclick="js: return confirm('Are you sure you want to delete this item?')">
								<i class="fa fa-trash-o"></i></a>
							<a name="report" class="btn btn-default btn-sm"
							   href="<?= $this->createUrl('/application/purchasereport',
									   array('id' => $app->id)) ?>"><i
										class="fa fa-list"></i></a>
						</td>
					</tr>
					<?php

				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>