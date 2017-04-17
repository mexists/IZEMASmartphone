<?php
/* @var $this ApplicationController */
/* @var $model Application */
/* @var $form CActiveForm */
$this->getClientPlugin('jQuery-UI')
?>

<div class="container-fluid">
	<div class="row">
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="form">

				<?php $form = $this->beginWidget('CActiveForm', [
					'id' => 'repair-form',
					'enableAjaxValidation' => false,
				]); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="">Customer Name </label>
					<input type="text" value="<?= $model->user->first_name ?>" size="60" maxlength="255"
					       readonly="readonly" class="form-control"/>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'application_no'); ?>
					<?php echo $form->textField($model, 'application_no', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'application_no'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'total'); ?>
					<div class="input-group">
						<span class="input-group-addon">RM</span>
						<?php echo $form->textField($model, 'total',
							['required' => 'required', 'readonly' => 'readonly', 'class' => 'form-control']); ?>
						<?php echo $form->error($model, 'total'); ?>
					</div>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'subtotal'); ?>
					<div class="input-group">
						<span class="input-group-addon">RM</span>
						<?php echo $form->textField($model, 'subtotal',
							['required' => 'required', 'readonly' => 'readonly', 'class' => 'form-control']); ?>
						<?php echo $form->error($model, 'subtotal'); ?>
					</div>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_charge'); ?>
					<div class="input-group">
						<span class="input-group-addon">RM</span>
						<?php echo $form->textField($model, 'shipping_charge',
							['required' => 'required', 'readonly' => 'readonly', 'class' => 'form-control']); ?>
						<?php echo $form->error($model, 'shipping_charge'); ?>
					</div>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'payment_method'); ?>
					<div class="input-group">
						<?php echo $form->textField($model, 'payment_method',
							[
								'size' => 60,
								'maxlength' => 255,
								'readonly' => 'readonly',
								'class' => 'form-control'
							]); ?>
						<?php echo $form->error($model, 'payment_method'); ?>
					</div>
				</div>

				<hr/>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_address_1'); ?>
					<?php echo $form->textField($model, 'shipping_address_1', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_address_1'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_address_2'); ?>
					<?php echo $form->textField($model, 'shipping_address_2', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_address_2'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_city'); ?>
					<?php echo $form->textField($model, 'shipping_city', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_city'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_state'); ?>
					<?php echo $form->textField($model, 'shipping_state', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_state'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_country'); ?>
					<?php echo $form->textField($model, 'shipping_country', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_country'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_postcode'); ?>
					<?php echo $form->textField($model, 'shipping_postcode', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_postcode'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'shipping_method'); ?>
					<?php echo $form->textField($model, 'shipping_method', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'shipping_method'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'created'); ?>
					<?php echo $form->textField($model, 'created', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'created'); ?>
				</div>

				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<?php echo $form->labelEx($model, 'application_status_id'); ?>
					<?php
					echo $form->dropDownList($model, 'application_status_id',
						CHtml::listData(ApplicationStatus::model()->findAll(), 'id', 'name'),
						['required' => 'required', 'class' => 'form-control']);
					?>
					<?php echo $form->error($model, 'application_status_id'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'order_comments'); ?>
					<?php echo $form->textArea($model, 'order_comments', [
						'size' => 60,
						'maxlength' => 255,
						'readonly' => 'readonly',
						'class' => 'form-control'
					]); ?>
					<?php echo $form->error($model, 'order_comments'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'ship_datetime'); ?>
					<input type="date" name="<?= CHtml::activeName($model, 'ship_datetime') ?>" class="form-control" />
					<?php echo $form->error($model, 'ship_datetime'); ?>
				</div>

				<div class="form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo $form->labelEx($model, 'ship_within'); ?>
					<div class="row">
						<div class="col-md-6">
							<select name="ship_within_number" class="form-control">
								<?php
								for ($i = 1; $i <= 31; $i++)
									echo "<option value='$i'>$i</option>";
								?>
							</select>
						</div>
						<div class="col-md-6">
							<select name="ship_within_century" class="form-control">
								<option value="days">Days</option>
								<option value="weeks">Weeks</option>
								<option value="months">Months</option>
								<option value="years">Years</option>
							</select>
						</div>
					</div>
				</div>

				<div class="text-center form-group col-sm-12 col-md-12 col-lg-12">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Submit',
						['class' => 'btn btn-default']); ?>
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

		$('#<?=CHtml::activeId($model, "ship_datetime")?>').datepicker();
	});
</script>


<!--<div class="form">-->
<!---->
<!--	--><?php //$form = $this->beginWidget('CActiveForm', [
//			'id' => 'application-form',
//			'enableAjaxValidation' => false,
//	]); ?>
<!---->
<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<!---->
<!--	--><?php //echo $form->errorSummary($model); ?>
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'application_no'); ?>
<!--		--><?php //echo $form->textField($model, 'application_no', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'application_no'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'user_id'); ?>
<!--		--><?php //echo $form->textField($model, 'user_id'); ?>
<!--		--><?php //echo $form->error($model, 'user_id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'payment_method'); ?>
<!--		--><?php //echo $form->textField($model, 'payment_method', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'payment_method'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'subtotal'); ?>
<!--		--><?php //echo $form->textField($model, 'subtotal', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'subtotal'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_charge'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_charge'); ?>
<!--		--><?php //echo $form->error($model, 'shipping_charge'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'total'); ?>
<!--		--><?php //echo $form->textField($model, 'total', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'total'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'receipt_file'); ?>
<!--		--><?php //echo $form->textField($model, 'receipt_file', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'receipt_file'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_first_name'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_first_name', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_first_name'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_last_name'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_last_name', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_last_name'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_company'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_company', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_company'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_address_1'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_address_1', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_address_1'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_address_2'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_address_2', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_address_2'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_city'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_city', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_city'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_state'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_state', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_state'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_country'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_country', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_country'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_postcode'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_postcode', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_postcode'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'shipping_method'); ?>
<!--		--><?php //echo $form->textField($model, 'shipping_method', ['size' => 60, 'maxlength' => 255]); ?>
<!--		--><?php //echo $form->error($model, 'shipping_method'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'order_comments'); ?>
<!--		--><?php //echo $form->textArea($model, 'order_comments', ['rows' => 6, 'cols' => 50]); ?>
<!--		--><?php //echo $form->error($model, 'order_comments'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'application_status_id'); ?>
<!--		--><?php //echo $form->textField($model, 'application_status_id'); ?>
<!--		--><?php //echo $form->error($model, 'application_status_id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'created'); ?>
<!--		--><?php //echo $form->textField($model, 'created'); ?>
<!--		--><?php //echo $form->error($model, 'created'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model, 'modified'); ?>
<!--		--><?php //echo $form->textField($model, 'modified'); ?>
<!--		--><?php //echo $form->error($model, 'modified'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row buttons">-->
<!--		--><?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
<!--	</div>-->
<!---->
<!--	--><?php //$this->endWidget(); ?>
<!---->
<!--</div><!-- form -->