<?php
	/* @var $this ProfileController */
	/* @var $model User */
	$this->pageTitle = "Update Profile";
	$this->breadcrumbs = array(
		'Users' => array('index'),
		$model->id => array('view', 'id' => $model->id),
		'Update',
	);

	$this->menu = array(
		array('label' => 'List User', 'url' => array('index')),
		array('label' => 'Create User', 'url' => array('create')),
		array('label' => 'View User', 'url' => array('view', 'id' => $model->id)),
		array('label' => 'Manage User', 'url' => array('admin')),
	);
?>

	<div class="product-big-title-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="product-bit-title text-center">
						<h2>Update Profile</h2>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>