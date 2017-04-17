<?php
	$this->pageTitle = 'Register';
	$this->breadcrumbs = array(
		'Register',
	);
?>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Register</h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="product-content-right">
					<div class="woocommerce">
						<div class="woocommerce-info">Doesn't have an account? <a class="showlogin"
						                                                          data-toggle="collapse"
						                                                          href="#login-form-wrap"
						                                                          aria-expanded="false"
						                                                          aria-controls="login-form-wrap">Click here to create one!</a>
						</div>

						<div class="form">
							<?php $form = $this->beginWidget('CActiveForm', array(
								'id' => 'login-form-wrap',
								'htmlOptions' => array('class' => "login collapse"),
							)); ?>

							<div class="alert alert-info alert-bold-border square fade in alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<p>Please fill out the following form with your information. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>

								<p class="note"><span
										class="required"><strong>Fields with * are required.</strong></span></p>
							</div>

							<p class="form-row form-row-first">
								<?php echo $form->labelEx($model, 'username'); ?>
								<?php echo $form->textField($model, 'username', array('class' => 'input-text')); ?>
								<?php echo $form->error($model, 'username'); ?>
							</p>

							<p class="form-row form-row-first">
								<?php echo $form->labelEx($model, 'email'); ?>
								<?php echo $form->textField($model, 'email', array('class' => 'input-text')); ?>
								<?php echo $form->error($model, 'email'); ?>
							</p>

							<p class="form-row form-row-last">
								<?php echo $form->labelEx($model, 'password'); ?>
								<?php echo $form->passwordField($model, 'password', array('class' => 'input-text')); ?>
								<?php echo $form->error($model, 'password'); ?>
							</p>

							<p class="form-row form-row-last">
								<label for="confirm_password">Retype password <span class="required">*</span></label>
								<input type="password" id="confirm_password" name="confirm_password" class="input-text">
								<small class="help-block hidden" style="display: block; color: red;">
									The password and its confirm are not the same
								</small>
							</p>

							<div class="clear"></div>


							<p class="form-row">
								<?php echo CHtml::submitButton('Register', array('class' => 'button')); ?>
							</p>

							<div class="clear"></div>

							<?php $this->endWidget(); ?>
						</div>


						<div class="woocommerce-info">Have a coupon? <a class="showcoupon" data-toggle="collapse"
						                                                href="#coupon-collapse-wrap"
						                                                aria-expanded="false"
						                                                aria-controls="coupon-collapse-wrap">Click here to enter your code</a>
						</div>

						<form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">

							<p class="form-row form-row-first">
								<input type="text" value="" id="coupon_code" placeholder="Coupon code"
								       class="input-text" name="coupon_code">
							</p>

							<p class="form-row form-row-last">
								<input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
							</p>

							<div class="clear"></div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$("a.showlogin").click();

		$("#confirm_password, #<?=CHtml::activeId($model, 'password')?>").keyup(function (e) {
			if ($("#confirm_password").val() != $("#<?=CHtml::activeId($model, 'password')?>").val()) {
				$("#confirm_password").next().removeClass('hidden');
				$("#confirm_password").next().addClass('visible');
			} else {
				$("#confirm_password").next().removeClass('visible');
				$("#confirm_password").next().addClass('hidden');
			}
		})
	});
</script>
