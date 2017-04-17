<?php
	/* @var $this ShopController */
	/* @var $model Application */
	/* @var $ProductBrandModel BrandModel */

	$this->pageTitle = "Update Application";

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

<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>


			<div class="col-xs-4 col-xs-4 col-md-4 col-lg-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">
							Action Panel </h3>
					</div>
					<ul class="list-group">
						<a href="<?= $this->createUrl('update', array('id' => $model->id)) ?>"
						   class="list-group-item"><i class="fa fa-refresh"></i> Update</a>
						<a href="<?= $this->createUrl('delete', array('id' => $model->id)) ?>"
						   onclick="return confirm('Are you sure you want to delete this item?')"
						   class="list-group-item"><i class="fa fa-trash-o"></i> Delete</a>
						<a href="<?= $this->createUrl('/shop/history//') ?>"
						   class="list-group-item"><i class="fa fa-arrow-circle-left"></i> Return to Shopping History</a>

					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
