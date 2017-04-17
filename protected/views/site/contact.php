<?php
$this->pageTitle = 'Contact Us';
$this->breadcrumbs = [
	'Contact',
];
$this->getClientPlugin('jQuery-UI');
$this->getClientPlugin('datatable');
?>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Contact</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>

<?php else: ?>


	<div class="single-product-area">
		<div class="zigzag-bottom"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="product-content-right">
						<div class="woocommerce">
							<div class="form">
								<?php $form = $this->beginWidget('CActiveForm', [
									'id' => 'login-form-wrap',
									'htmlOptions' => ['class' => "login collapse", 'style' => 'display: block'],
									'enableClientValidation' => true,
									'clientOptions' => [
										'validateOnSubmit' => true,
									],
								]); ?>
								<!--<form id="login-form-wrap" class="login collapse" method="post">-->
								<div class="alert alert-info alert-bold-border square fade in alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
									</button>
									<p>If you have business inquiries or other questions, please fill out the following
										form to contact us. Thank you.</p>
									<strong class="note">Fields with <span class="required">*</span> are
										required.</strong>
								</div>
								<?php echo $form->errorSummary($model); ?>

								<p>If you have shopped with us before, please enter your details in the boxes below. If
									you are a new customer please proceed to the Billing &amp; Shipping section.</p>

								<p class="form-row form-row-first">
									<?php echo $form->labelEx($model, 'topic'); ?>
									<?php
									echo $form->dropDownList($model, 'topic',
										["" => "", "purchasing" => "Purchasing", "repair" => "Repair", "report" => "Report"],
										['required' => 'required', 'class' => 'form-control', 'style' => 'width:250px']);
									?>
									<?php echo $form->error($model, 'topic'); ?>
								</p>

								<p class="form-row form-row-first">
									<label id="subtopic"></label>

								<div class="topic purchasing">
									<?php
									echo $form->dropDownList($model, 'subtopic',
										["" => "", "Where to purchase at our physical store?" => "Where to purchase at our physical store?",
											"Does the price include taxes?" => "Does the price include taxes?",
											"How to cancel order?" => "How to cancel order?",
											"How to return broken item?" => "How to return broken item?"],
										['required' => 'required', 'class' => 'form-control', 'style' => 'width:250px']);
									?>
								</div>
								<div class="topic repair">
									<?php
									echo $form->dropDownList($model, 'subtopic',
										["" => "", "Repair non-smartphone device" => "Repair non-smartphone device",
											"My phone damage type not listed" => "My phone damage type not listed",],
										['required' => 'required', 'class' => 'form-control', 'style' => 'width:250px']);
									?>
								</div>
								<div class="topic report">
									<?php
									echo $form->dropDownList($model, 'subtopic',
										["" => "", "Report identical page (Phishing)" => "Report identical page (Phishing)",
											"Report broken page" => "Report broken page",],
										['required' => 'required', 'class' => 'form-control', 'style' => 'width:250px']);
									?>
									<?php echo $form->error($model, 'subtopic'); ?>
								</div>
								</p>

								<p class="form-row form-row-first">
									<?php echo $form->labelEx($model, 'name'); ?>
									<?php echo $form->textField($model, 'name', ['class' => 'input-text']); ?>
									<?php echo $form->error($model, 'name'); ?>
								</p>

								<p class="form-row form-row-first">
									<?php echo $form->labelEx($model, 'email'); ?>
									<?php echo $form->textField($model, 'email', ['class' => 'input-text']); ?>
									<?php echo $form->error($model, 'email'); ?>
								</p>

								<p class="form-row form-row-first">
									<?php echo $form->labelEx($model, 'subject'); ?>
									<?php echo $form->textField($model, 'subject',
										['size' => 60, 'maxlength' => 128, 'class' => 'input-text']); ?>
									<?php echo $form->error($model, 'subject'); ?>
								</p>

								<p class="form-row form-row-last">
									<?php echo $form->labelEx($model, 'body'); ?>
									<?php echo $form->textArea($model, 'body',
										['rows' => 6, 'cols' => 150, 'class' => 'input-text']); ?>
									<?php echo $form->error($model, 'body'); ?>
								</p>

								<div class="clear"></div>

								<?php if (CCaptcha::checkRequirements()): ?>
									<div class="row">
										<?php echo $form->labelEx($model, 'verifyCode'); ?>
										<div>
											<?php $this->widget('CCaptcha'); ?>
											<?php echo $form->textField($model, 'verifyCode'); ?>
										</div>
										<div class="hint">Please enter the letters as they are shown in the image above.
											<br/>Letters are not case-sensitive.
										</div>
										<?php echo $form->error($model, 'verifyCode'); ?>
									</div>
								<?php endif; ?>

								<p class="form-row">
									<?php echo CHtml::submitButton('Submit', ['class' => 'button']); ?>
								</p>

								<div class="clear"></div>
								<!--</form>-->
								<?php $this->endWidget(); ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>

<script>
	$(document).ready(function () {
		$(".topic").hide();
		$("#<?=CHtml::activeId($model, 'topic')?>").change(function () {
			$(".topic").hide();
			$(".topic." + $(this).val()).show();

			$("#subtopic").html($(this).val() + " issues: ");
		});
	});
</script>






