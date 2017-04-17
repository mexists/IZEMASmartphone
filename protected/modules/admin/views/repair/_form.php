<?php
	/* @var $this RepairController */
	/* @var $model Repair */
	/* @var $form CActiveForm */
?>

<div class="container-fluid">
	<div class="row">
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="form">

				<?php $form = $this->beginWidget('CActiveForm', array(
					'id' => 'repair-form',
					'enableAjaxValidation' => FALSE,
				)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'customer_name'); ?>
					<?php echo $form->textField($model, 'customer_name', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'customer_name'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'email'); ?>
					<?php echo $form->textField($model, 'email', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'email'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'phone_no'); ?>
					<?php echo $form->textField($model, 'phone_no', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'phone_no'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'brand_id'); ?>
					<?php
						echo $form->dropDownList($model, 'brand_id',
							CHtml::listData(Brand::model()->findAll(), 'id', 'name'),
							array('class' => 'form-control', 'disabled' => 'disabled'));
					?>
					<?php echo $form->error($model, 'brand_id'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'model_name'); ?>
					<?php echo $form->textField($model, 'model_name', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'model_name'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'color_name'); ?>
					<?php echo $form->textField($model, 'color_name', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'color_name'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'issue_title'); ?>
					<?php echo $form->textField($model, 'issue_title', array(
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					)); ?>
					<?php echo $form->error($model, 'issue_title'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'issue_desc'); ?>
					<?php echo $form->textArea($model, 'issue_desc',
						array('rows' => 6, 'cols' => 50, 'readonly' => 'readonly', 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'issue_desc'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'created'); ?>
					<?php echo $form->textField($model, 'created',
						array('value'=>$this->toDateTime($model->created,'d/M/Y h:i:s a'),'readonly' => 'readonly', 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'created'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'tickets_no'); ?>
					<?php echo $form->textField($model, 'tickets_no',
						array('readonly' => 'readonly', 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'tickets_no'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'charge'); ?>
					<div class="input-group">
						<span class="input-group-addon">RM</span>
						<?php echo $form->textField($model, 'charge',
							array('required' => 'required', 'class' => 'form-control')); ?>
						<?php echo $form->error($model, 'charge'); ?>
					</div>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'repair_status'); ?>
					<?php
						echo $form->dropDownList($model, 'repair_status',
							CHtml::listData(RepairStatus::model()->findAll(), 'id', 'name'),
							array('required' => 'required', 'class' => 'form-control'));
					?>
					<?php echo $form->error($model, 'repair_status'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'staff_msg'); ?>
					<?php echo $form->textArea($model, 'staff_msg',
						array('rows' => 6, 'cols' => 50, 'required' => 'required', 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'staff_msg'); ?>
				</div>

				<div class="text-center form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Submit',
						array('class' => 'btn btn-default')); ?>
					<button type="button" class="btn btn-default" onclick="js:window.history.back();">Back</button>
				</div>

				<?php $this->endWidget(); ?>

			</div>
			<!-- form -->
		</section>
	</div>
</div>
<script>
	$(document).ready(function () {
		if (<?=(($model->isNewRecord)? 1 : 0)?>) {
			$("[readonly='readonly']").removeAttr('readonly');
		}
	});
</script>