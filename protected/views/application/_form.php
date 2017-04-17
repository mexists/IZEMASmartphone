<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'application-form',
		'enableAjaxValidation' => FALSE,
		'htmlOptions' => array('enctype' => 'multipart/form-data')
	)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'application_no'); ?>
		<?php echo $form->textField($model, 'application_no',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'application_no'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'payment_method'); ?>
		<?php echo $form->textField($model, 'payment_method',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'payment_method'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'subtotal'); ?>
		<?php echo $form->textField($model, 'subtotal',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'subtotal'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_charge'); ?>
		<?php echo $form->textField($model, 'shipping_charge',
			array('class' => 'form-control', 'readonly' => 'readonly')); ?>
		<?php echo $form->error($model, 'shipping_charge'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'total'); ?>
		<?php echo $form->textField($model, 'total',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'total'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">

		<label>Upload Receipt: <input type="file" name="receipt" class="form-control" /></label>

		<?php echo $form->labelEx($model, 'receipt_file'); ?>
		<?php if ($model->receipt_file != "") { ?>
			<a href="<?= Yii::app()->baseUrl ."/images/receipts/". $model->receipt_file ?>" target="_blank">
				<img class="form-control" src="<?= Yii::app()->baseUrl ."/images/receipts/". $model->receipt_file ?>" alt="receipt"
				     style="width: 200px; height: 200px;" />
				View Receipt</a>
			<?php //echo $form->textField($model, 'receipt_file', array('size' => 60, 'maxlength' => 255)); ?>
		<?php } ?>
		<?php echo $form->error($model, 'receipt_file'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_first_name'); ?>
		<?php echo $form->textField($model, 'shipping_first_name',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_first_name'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_last_name'); ?>
		<?php echo $form->textField($model, 'shipping_last_name',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_last_name'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_company'); ?>
		<?php echo $form->textField($model, 'shipping_company',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_company'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_address_1'); ?>
		<?php echo $form->textField($model, 'shipping_address_1',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_address_1'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_address_2'); ?>
		<?php echo $form->textField($model, 'shipping_address_2',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_address_2'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_city'); ?>
		<?php echo $form->textField($model, 'shipping_city',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_city'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_state'); ?>
		<?php echo $form->textField($model, 'shipping_state',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_state'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_country'); ?>
		<?php echo $form->textField($model, 'shipping_country',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_country'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_postcode'); ?>
		<?php echo $form->textField($model, 'shipping_postcode',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_postcode'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'shipping_method'); ?>
		<?php echo $form->textField($model, 'shipping_method',
			array('class' => 'form-control', 'readonly' => 'readonly', 'size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'shipping_method'); ?>
	</div>

	<div class="form-group col-xs-12 col-md-12 col-lg-12">
		<?php echo $form->labelEx($model, 'order_comments'); ?>
		<?php echo $form->textArea($model, 'order_comments',
			array('class' => 'form-control', 'readonly' => 'readonly', 'rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'order_comments'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'application_status_id'); ?>
		<?php echo $form->dropDownList($model, 'application_status_id',
			CHtml::listData(ApplicationStatus::model()->findAll(), 'id', 'name'),
			array('class' => 'form-control', 'disabled' => 'disabled')); ?>
		<?php echo $form->error($model, 'application_status_id'); ?>
	</div>

	<div class="form-group col-xs-6 col-md-6 col-lg-6">
		<?php echo $form->labelEx($model, 'created'); ?>
		<?php echo $form->textField($model, 'created', array('class' => 'form-control', 'readonly' => 'readonly')); ?>
		<?php echo $form->error($model, 'created'); ?>
	</div>

	<div class="form-group col-xs-12 col-md-12 col-lg-12">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->