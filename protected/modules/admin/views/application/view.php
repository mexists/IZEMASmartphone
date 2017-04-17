<?php
$this->breadcrumbs = [
		'Applications' => ['index'],
		$model->id,
];

$this->menu = [
		['label' => 'List Application', 'url' => ['index']],
		['label' => 'Create Application', 'url' => ['create']],
		['label' => 'Update Application', 'url' => ['update', 'id' => $model->id]],
		['label' => 'Delete Application', 'url' => '#', 'linkOptions' => ['submit' => ['delete', 'id' => $model->id], 'confirm' => 'Are you sure you want to delete this item?']],
		['label' => 'Manage Application', 'url' => ['admin']],
];
?>

<h1>View Application #<?php echo $model->id; ?></h1>

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
