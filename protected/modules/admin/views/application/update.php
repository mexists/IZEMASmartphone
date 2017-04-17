<?php
$this->breadcrumbs=array(
	'Applications'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Application', 'url'=>array('index')),
	array('label'=>'Create Application', 'url'=>array('create')),
	array('label'=>'View Application', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Application', 'url'=>array('admin')),
);

?>

<h1>Update Order <?php echo $model->application_no; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>