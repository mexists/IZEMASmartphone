<?php
	/* @var $this RepairController */
	/* @var $dataProvider CActiveDataProvider */

	$this->pageTitle = "Repair Requests";

	$this->getClientPlugin('jQuery-UI');
	$this->getClientPlugin('datatable');
	$this->breadcrumbs = array(
		'Repairs',
	);

	$this->menu = array(
		array('label' => 'Create Repair', 'url' => array('create')),
		array('label' => 'Manage Repair', 'url' => array('admin')),
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
					<th class="text-center">Requester Name</th>
					<th class="text-center">Phone Brand</th>
					<th class="text-center">Phone Model</th>
					<th class="text-center">Issue</th>
					<th class="text-center">Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
					foreach (Repair::model()->with('brand')->findAll("repair_status=1") as $i => $repair) {
						?>
						<tr data-repair-id="<?= $repair->id ?>">
							<td class="text-center"><?= $i + 1 ?></td>
							<td><?= $repair->customer_name ?></td>
							<td><?= $repair->brand->name ?></td>
							<td><?= $repair->model_name ?></td>
							<td><?= $repair->issue_title ?></td>
							<td class="text-center">
								<a name="view" class="btn btn-default btn-sm"
								   href="<?= $this->createUrl('view', array('id' => $repair->id)) ?>"><i
										class="fa fa-eye"></i></a>
								<a name="edit" class="btn btn-default btn-sm"
								   href="<?= $this->createUrl('update', array('id' => $repair->id)) ?>"><i
										class="fa fa-edit"></i></a>
								<a name="delete" class="btn btn-default btn-sm"
								   href="<?= $this->createUrl('delete', array('id' => $repair->id)) ?>"
								   onclick="js: return confirm('Are you sure you want to delete this item?')">
									<i class="fa fa-trash-o"></i></a>
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