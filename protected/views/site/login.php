<?php
	$this->pageTitle = 'Login';
	$this->breadcrumbs = array(
		'Login',
	);
?>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Login</h2>
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
						<div class="woocommerce-info">Returning customer? <a class="showlogin" data-toggle="collapse"
						                                                     href="#login-form-wrap"
						                                                     aria-expanded="false"
						                                                     aria-controls="login-form-wrap">Click here to login</a>
						</div>

						<div class="form">
							<!--<form id="login-form-wrap" class="login collapse" method="post">-->
							<?php $form = $this->beginWidget('CActiveForm', array(
								'id' => 'login-form-wrap',
								'htmlOptions' => array('class' => "login collapse"),
								/*'enableClientValidation' => TRUE,
								'clientOptions' => array(
									'validateOnSubmit' => TRUE,
								),*/
							)); ?>

							<div class="alert alert-info alert-bold-border square fade in alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
							</div>

							<p class="form-row form-row-first">
								<!--<label for="username">Username or email <span class="required">*</span>-->
								<!--</label>-->
								<!--<input type="text" id="username" name="username" class="input-text">-->

								<?php echo $form->labelEx($model, 'username'); ?>
								<?php echo $form->textField($model, 'username', array('class' => 'input-text')); ?>
								<?php echo $form->error($model, 'username'); ?>
							</p>

							<p class="form-row form-row-last">
								<!--<label for="password">Password <span class="required">*</span></label>-->
								<!--<input type="password" id="password" name="password" class="input-text">-->

								<?php echo $form->labelEx($model, 'password'); ?>
								<?php echo $form->passwordField($model, 'password', array('class' => 'input-text')); ?>
								<small class="help-block <?= ($form->error($model, 'password')) ? '' : 'hidden' ?>"
								       style="display: block; color: red;">
									<?php echo $form->error($model, 'password'); ?>
								</small>
							</p>

							<div class="clear"></div>

						<p class="form-row">

								<button type="submit" value="Login" name="login" class="button" ><li class="fa fa-unlock-alt"></li> Login</button>
								<!--<input type="submit" value="Login" name="login" class="button" />-->
								<?php //echo CHtml::submitButton('Login', array('class' => 'button')); ?>


							<label class="inline" for="rememberMe">
								<?php echo $form->checkBox($model, 'rememberMe'); ?> Remember me
								<?php //echo $form->label($model, 'rememberMe', array('class'=>'inline')); ?>
								<?php echo $form->error($model, 'rememberMe'); ?>
							</label>
							<!--<label class="inline" for="rememberme">-->
							<!--	<input type="checkbox" value="forever" id="rememberme"-->
							<!--	       name="rememberme"> Remember me-->
							<!--</label>-->
							</p>

							<p class="lost_password">
								<a href="#">Lost your password?</a>
							</p>

							<div class="clear"></div>

							<?php $this->endWidget(); ?>
							<!--</form>-->
						</div>


						<!--<div class="woocommerce-info">Have a coupon? <a class="showcoupon" data-toggle="collapse"
						                                                href="#coupon-collapse-wrap"
						                                                aria-expanded="false"
						                                                aria-controls="coupon-collapse-wrap">Click here to enter your code</a>
						</div>-->

						<!--<form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">

							<p class="form-row form-row-first">
								<input type="text" value="" id="coupon_code" placeholder="Coupon code"
								       class="input-text" name="coupon_code">
							</p>

							<p class="form-row form-row-last">
								<input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
							</p>

							<div class="clear"></div>
						</form>-->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$("a.showlogin").click();
	});
</script>