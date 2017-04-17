<?php
	/* @var $this ProfileController */
	/* @var $model User */
	/* @var $form CActiveForm */
?>

<div class="container">
	<div class="row aligncenter">
		<div class="col-xs-10 col-md-10 col-lg-10">
			<div class="form">

				<?php $form = $this->beginWidget('CActiveForm', array(
					'id' => 'user-form',
					'enableAjaxValidation' => FALSE,
				)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div>
					<?php echo $form->labelEx($model, 'username'); ?>
					<?php echo $form->textField($model, 'username',
						array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'username'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'email'); ?>
					<?php echo $form->textField($model, 'email',
						array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'email'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'password'); ?>
					<?php echo $form->textField($model, 'password',
						array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'password'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'first_name'); ?>
					<?php echo $form->textField($model, 'first_name',
						array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'first_name'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'last_name'); ?>
					<?php echo $form->textField($model, 'last_name',
						array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'last_name'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'gender'); ?>
					<?php echo $form->textField($model, 'gender',
						array('size' => 6, 'maxlength' => 6, 'class' => 'form-control')); ?>
					<?php echo $form->error($model, 'gender'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'race_id'); ?>
					<?php echo $form->dropDownList($model, 'race_id',
							CHtml::listData(Race::model()->findAll(), 'id', 'name'), array('class' => 'form-control')); ?>
					<?php echo $form->error($model, 'race_id'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'role_id'); ?>
					<?php echo $form->dropDownList($model, 'role_id',
							CHtml::listData(Role::model()->findAll(), 'id', 'name'), array('class' => 'form-control')); ?>
					<?php echo $form->error($model, 'role_id'); ?>
				</div>

				<!--<div>
					<?php /*echo $form->labelEx($model, 'address_id'); */?>
					<?php /*echo $form->textField($model, 'address_id', array('class' => 'form-control')); */?>
					<?php /*echo $form->error($model, 'address_id'); */?>
				</div>-->

				<div>
					<?php echo $form->labelEx($model, 'user_status_id'); ?>
					<?php echo $form->dropDownList($model, 'user_status_id',
							CHtml::listData(UserStatus::model()->findAll(), 'id', 'name'), array('class' => 'form-control')); ?>
					<?php echo $form->error($model, 'user_status_id'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'created', ['label'=>'Joined']); ?>
					<?php echo $form->textField($model, 'created', array('class' => 'form-control')); ?>
					<?php echo $form->error($model, 'created'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($model, 'modified', ['label'=>'Last Update']); ?>
					<?php echo $form->textField($model, 'modified', array('class' => 'form-control')); ?>
					<?php echo $form->error($model, 'modified'); ?>
				</div>

				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

				<?php $this->endWidget(); ?>

			</div>
			<!-- form -->
		</div>
	</div>
</div>