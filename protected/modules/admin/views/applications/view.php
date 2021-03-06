<?php
$this->breadcrumbs=array(
	'Applications'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Applications', 'url'=>array('index')),
	array('label'=>'Create Applications', 'url'=>array('create')),
	array('label'=>'Update Applications', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Applications', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Applications', 'url'=>array('admin')),
);
?>

<h1>View Applications #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'application_id',
		'brand_id',
		'brand_model_id',
		'quantity',
		'price',
		'total',
		'created',
		'modified',
	),
)); ?>
