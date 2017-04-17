<?php
	/* @var $this RepairController */
	/* @var $model Repair */

	$this->breadcrumbs = array(
		'Repairs' => array('index'),
		$model->id,
	);

	$this->menu = array(
		array('label' => 'Repair Request List', 'url' => array('index')),
		//array('label' => 'Create Repair Request', 'url' => array('create')),
		array('label' => 'Update Repair Request', 'url' => array('update', 'id' => $model->id)),
		array(
			'label' => 'Delete Repair Request',
			'url' => '#',
			'linkOptions' => array(
				'submit' => array('delete', 'id' => $model->id),
				'confirm' => 'Are you sure you want to delete this item?'
			)
		),
		array('label' => 'Manage Repair', 'url' => array('admin')),
	);
?>

<style>
	th {
		text-align: right;
		width: 20%;
	}

	ul.operations {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	ul.operations li {
		display: inline;
		float: left;
		padding-right: 20px;
	}

	ul.operations li a {
		background-color: antiquewhite;
		display: block;
		/*width: 60px;*/
	}
</style>


<div class="container-fluid">

	<div class="row">

		<h2><i class="glyphicon glyphicon-info-sign"></i> <?= $this->pageTitle = "Repair Request" ?>
			<strong><?php echo $model->tickets_no; ?></strong></h2>

		<div class="col-xs-12 col-md-12 col-lg-12">
			<table id="data-table" class="table table-bordered table-hover table-striped">
				<tbody>
				<tr>
					<td colspan="2">
						<strong>Operations: </strong>
						<a href="<?= $this->createUrl('index') ?>"
						   class="btn btn-xs btn-default"><i class="fa fa-list"></i> Repair Request List</a>
						<a href="<?= $this->createUrl('update', array('id' => $model->id)) ?>"
						   class="btn btn-xs btn-default"><i class="fa fa-refresh"></i> Update Request List</a>
						<a href="<?= $this->createUrl('delete', array('id' => $model->id)) ?>"
						   onclick="js: return confirm('Are you sure you want to delete this item?')"
						   class="btn btn-xs btn-default"><i class="fa fa-eraser"></i> Delete Request List</a>
						<!--<a href="<?/*= $this->createUrl('index') */?>"
						   class="btn btn-xs btn-default"><i class="fa fa-wrench"></i> Manage Request List</a>-->
					</td>
				</tr>
				<tr>
					<th>Tickets Number</th>
					<td><?= $model->tickets_no ?></td>
				</tr>
				<tr>
					<th>User</th>
					<td><?= ($model->user_id) ? "<a href='" . $this->createUrl('user/view',
								array('id' => $model->user_id)) . "'>" . User::model()->findByPk($model->user_id)->first_name . "</a>" : "Not Set" ?></td>
				</tr>
				<tr>
					<th>Customer Name</th>
					<td><?= $model->customer_name ?></td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><a href="mailto:<?= $model->email ?>"><?= $model->email ?></a></td>
				</tr>
				<tr>
					<th>Phone Number</th>
					<td><?= $model->phone_no ?></td>
				</tr>
				<tr>
					<th>Brand Name</th>
					<td><?= $model->brand->name ?></td>
				</tr>
				<tr>
					<th>Model Name</th>
					<td><?= $model->model_name ?></td>
				</tr>
				<tr>
					<th>Phone Color</th>
					<td><?= $model->color_name ?></td>
				</tr>
				<tr>
					<th>Tickets Number</th>
					<td><?= $model->tickets_no ?></td>
				</tr>
				<tr>
					<th>Issue</th>
					<td><?= $model->issue_title ?></td>
				</tr>
				<tr>
					<th>Issue Description</th>
					<td><?= $model->issue_desc ?></td>
				</tr>
				<tr>
					<th>Created</th>
					<td><?= $model->created ?></td>
				</tr>
				<tr>
					<th>Repair Status</th>
					<td><?= $model->status->name ?></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>

<script>
	$(document).ready(function () {

	});
</script>

