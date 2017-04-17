<?php
/* @var $this ShopController */
/* @var $model Application */
/* @var $ApplicationsModel Applications */
/* @var $ProductBrandModel BrandModel */

$this->getClientPlugin('datatable');

$this->pageTitle = "Shopping View";
?>

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

<?php
$this->breadcrumbs = [
		'Applications' => ['index'],
		$model->id,
];

$this->menu = [
		['label' => 'List Application', 'url' => ['index']],
		['label' => 'Create Application', 'url' => ['create']],
		['label' => 'Update Application', 'url' => ['update', 'id' => $model->id]],
		[
				'label' => 'Delete Application',
				'url' => '#',
				'linkOptions' => [
						'submit' => ['delete', 'id' => $model->id],
						'confirm' => 'Are you sure you want to delete this item?'
				]
		],
		['label' => 'Manage Application', 'url' => ['admin']],
];
?>

<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<h4 class="small-title">Order Information</h4>

			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<?php
				$file = "No receipt uploaded yet";
				if ($model->receipt_file != "")
					$file = "<a target='_blank' href='" . Yii::app()->baseUrl . "/images/receipts/" . $model->receipt_file . "'>View Receipt</a>";

				$this->widget('zii.widgets.CDetailView', [
						'data' => $model,
						'attributes' => [
							//'id',
								'application_no',
							//'user_id',
								['label' => 'Payment Method', 'value' => 'Direct Bank Transfer'],
							//array('label' => 'subtotal', 'value' => 'RM' . $model->subtotal),
								['label' => 'Shipping Charge', 'value' => 'RM' . $model->shipping_charge],
								['label' => 'Total', 'value' => 'RM' . $model->total],
								['label' => 'Receipt File', 'type' => 'raw', 'value' => "$file"],
								'shipping_first_name',
								'shipping_last_name',
								'shipping_company',
								'shipping_address_1',
								'shipping_address_2',
								'shipping_city',
								'shipping_state',
								'shipping_country',
								'shipping_postcode',
								['label' => 'Shipping Method', 'value' => "Free Shipping"],
								'order_comments',
								['label' => 'Shipping Date/time', 'value' => $this->toDateTime($model->ship_datetime, "d/M/Y")],
								'ship_within',
								[
										'label' => 'Application Status',
										'value' => ucwords($model->application_status->name)
								],
								'created',
							//'modified',
						],
				]);
				//$this->renderPartial('_form', compact('model'));
				?>

				<hr/>
				<h4 class="small-title">Item List</h4>

				<div class="the-box full no-border">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="datatable-view">
							<thead class="the-box dark full">
							<tr>
								<th class="">No.</th>
								<th class="">Image</th>
								<th class="">Product</th>
								<th class="">Price</th>
								<th class="">Quantity</th>
								<th class="">Total</th>
							</tr>
							</thead>
							<tbody>
							<?php
							foreach ($ApplicationsModels as $i => $ApplicationsModel):

								?>
								<tr class="odd gradeX" data-model-id="<?= $ApplicationsModel->id ?>">
									<td><?= $i + 1 ?></td>
									<td class="text-center">
										<img style="max-height: 100px"
										     alt="poster_1_up"
										     class="shop_thumbnail"
										     src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $ApplicationsModel->brand_model->image_name ?>"></a>
									</td>

									<td>
										<a href="<?= $this->createUrl('/shop/brand', [
												'id' => $ApplicationsModel->brand_model->brand->id,
												'model' => $ApplicationsModel->brand_model->id
										]) ?>"><?= "{$ApplicationsModel->brand_model->brand->name} {$ApplicationsModel->brand_model->name}" ?></a>
									</td>

									<td>
										<span class="amount">RM<?= $ApplicationsModel->price ?></span>
									</td>

									<td class="center">
										<?= $ApplicationsModel->quantity ?>
									</td>

									<td class="center">
										RM<?= $ApplicationsModel->total ?>
									</td>

								</tr>
								<?php
							endforeach;
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>


			<div class="col-xs-4 col-xs-4 col-md-4 col-lg-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">
							Action Panel </h3>
					</div>
					<ul class="list-group">
						<a href="<?= $this->createUrl('update', ['id' => $model->id]) ?>"
						   class="list-group-item"><i class="fa fa-refresh"></i> Update</a>
						<a href="<?= $this->createUrl('delete', ['id' => $model->id]) ?>"
						   onclick="return confirm('Are you sure you want to delete this item?')"
						   class="list-group-item"><i class="fa fa-trash-o"></i> Delete</a>
						<a href="<?= $this->createUrl('/shop/history//') ?>"
						   class="list-group-item"><i
									class="fa fa-arrow-circle-left"></i> Return to Shopping History</a>

					</ul>
				</div>
			</div>

		</div>
	</div>
</div>


<script>

	$(document).ready(function () {
		$('#datatable-view').dataTable({
			"sPaginationType": "full_numbers",
			//"sDom": 'TC<"clear">lfrtip',
		});

	});
</script>
