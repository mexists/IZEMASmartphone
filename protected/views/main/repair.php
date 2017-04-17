<?php
$this->pageTitle = "Repair";
$this->getClientPlugin('jQuery-UI');
?>

<style>
	.product-hover a:hover, .product-hover a label:hover {
		cursor: hand;
	}

	.stepwizard-step p {
		margin-top: 10px;
	}

	.stepwizard-row {
		display: table-row;
	}

	.stepwizard {
		display: table;
		width: 100%;
		position: relative;
	}

	.stepwizard-step button[disabled] {
		opacity: 1 !important;
		filter: alpha(opacity=100) !important;
	}

	.stepwizard-row:before {
		top: 14px;
		bottom: 0;
		position: absolute;
		content: " ";
		width: 100%;
		height: 1px;
		background-color: #ccc;
		z-order: 0;

	}

	.stepwizard-step {
		display: table-cell;
		text-align: center;
		position: relative;
	}

	.btn-circle {
		width: 30px;
		height: 30px;
		text-align: center;
		padding: 6px 0;
		font-size: 12px;
		line-height: 1.428571429;
		border-radius: 15px;
	}
</style>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2><b><?= $this->pageTitle ?></b></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pull-right">
	<div class="row">
		<h4 id="search-ticket-title" style="cursor: pointer; margin: 10px; text-decoration: underline"><i
				class="fa fa-search"></i>Click here to search tickets</h4>
	</div>
	<div id="search-ticket" class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="<?= $this->createUrl('main/tickets') ?>" method="get" class="form" id="login-form-wrap">
				<fieldset>
					<legend><h2>Search Tickets</h2></legend>
					<div class="input-group">
						<input type="text" name="ticket" placeholder="Tickets Number" class="form-control"/>
						<button type="submit" name="" value="search ticket" class="input-group-addon">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div class="container" style="padding: 30px">
	<div class="stepwizard">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

				<p>Device</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

				<p>Model</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

				<p>Color</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>

				<p>Issue</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>

				<p>Contact</p>
			</div>
		</div>
	</div>
	<form role="form" action="<?= $this->createUrl('') ?>" method="post" enctype="multipart/form-data"
	      style="padding-top: 30px">
		<div id="selction-ajax"></div>
		<div class="row setup-content" id="step-1">
			<?php
			foreach ($Brands as $key => $brand):
				$brand->name = ($brand->name == "Apple") ? "iPhone" : $brand->name;
				?>
				<input type="radio" name="Repair[brand_id]" class="brands" value="<?= $brand->id ?>" hidden="hidden"
				       data-brand-id="<?= $brand->id ?>" data-brand-name="<?= $brand->name ?>"
				       required="required"/>
			<?php endforeach; ?>

			<div class="col-xs-12 col-md-12">
				<h3> What type of device do you have?</h3>

				<div class="latest-product">
					<div class="product-carousel">
						<?php
						foreach ($Brands as $key => $brand):
							if ($brand->name == "Apple")
								$brand->name = "iPhone";
							?>
							<div class="single-product">
								<div class="product-f-image">
									<img src="<?= Yii::app()->baseUrl . "/images/{$brand->name}-icon.png" ?>">

									<div class="product-hover">
										<a href="#" class="add-to-cart-link" data-brand-id="<?= $brand->id ?>">
											<label><?= $brand->name ?></label>
										</a>
									</div>
								</div>
								<h2><a href="#"><?= $brand->name ?></a></h2>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
			</div>
		</div>

		<div class="row setup-content" id="step-2">
			<div class="col-xs-12">
				<div class="col-md-12">
					<h3> Select Model</h3>

					<div class="form-group">
						<label class="control-label" id="selected-model-label"></label>
						<input maxlength="200" type="text" name="Repair[model_name]" id="autocomplete-model"
						       required="required"
						       class="form-control"
						       placeholder="Enter Model"/>

					</div>
					<div class="form-group hidden" id="image-preview">
						<label class="control-label">Image Preview</label><br/>
						<img src="" alt="" style="max-width: 400px; min-width: 400px;"/>
					</div>
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
				</div>
			</div>
		</div>

		<div class="row setup-content" id="step-3">
			<div class="col-xs-12">
				<div class="col-md-12">
					<h3> Select Color</h3>

					<div class="form-group">
						<label class="control-label">Phone Color</label>
						<input maxlength="200" type="text" name="Repair[color_name]" id="autocomplete-color"
						       required="required"
						       class="form-control"
						       placeholder="Enter Color Name"/>
					</div>
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
				</div>
			</div>
		</div>

		<div class="row setup-content" id="step-4">
			<div class="col-xs-12">
				<div class="col-md-12">
					<h3> Select Issue</h3>

					<div class="form-group">
						<label class="control-label">Select Issue</label>
						<!--<input maxlength="200" type="text" required="required" class="form-control"
						       placeholder="Enter Company Name" />-->
						<select name="Repair[issue_title]" required="required" class="form-control">
							<option value="Front Glass">Front Glass</option>
							<option value="Touch Screen">Touch Screen</option>
							<option value="LCD">LCD</option>
							<option value="Back Housing">Back Housing</option>
							<option value="Charging Port">Charging Port</option>
							<option value="Battery">Battery</option>
							<option value="Camera">Camera</option>
							<option value="Loudspeaker">Loudspeaker</option>
							<option value="Home Button">Home Button</option>
							<option value="Power Button">Power Button</option>
							<option value="Volume Button">Volume Button</option>
							<option value="Microphone">Microphone</option>
							<option value="Headphone Jack">Headphone Jack</option>
							<option value="Water Damage">Water Damage</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<div class="form-group">
						<label class="control-label">Issue Description</label>

						<div>
							<textarea class="form-control" id="issue-desc" name="Repair[issue_desc]"
							          placeholder="Please enter your issue here..." required="required"
							          rows="5"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label">Upload Phone Image</label>

						<div>
							<input type="file" name="repair" class="form-control"/>
						</div>
					</div>
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
				</div>
			</div>
		</div>

		<div class="row setup-content" id="step-5">
			<div class="col-xs-12">
				<div class="col-md-12">
					<!--<h3> Contact Information</h3>-->

					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="well well-sm">
									<fieldset>
										<legend class="text-center">Contact Information</legend>

										<!-- Name input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="name">Name</label>

											<div class="col-md-9">
												<input id="name" name="Repair[customer_name]" type="text"
												       required="required"
												       placeholder="Your name"
												       value="<?= isset($User) ? $User->username : '' ?>"
												       class="form-control">
											</div>
										</div>

										<!-- Email input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="email">Your E-mail</label>

											<div class="col-md-9">
												<input id="email" name="Repair[email]" type="email" required="required"
												       placeholder="Your email"
												       value="<?= isset($User) ? $User->email : '' ?>"
												       class="form-control">
											</div>
										</div>

										<!-- Phone input-->
										<div class="form-group">
											<label class="col-md-3 control-label"
											       for="phone">Your Phone</label>

											<div class="col-md-9">
												<input id="phone" name="Repair[phone_no]" type="text"
												       required="required"
												       placeholder="Your phone number" class="form-control">
											</div>
										</div>

										<!-- Form actions -->
										<div class="form-group">
											<div class="col-md-12 text-right">
												<button type="submit" name="submit"
												        class="btn btn-primary btn-lg">Submit
												</button>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>
</div>

<script>
	$(document).ready(function () {

		function cart_click() {
			$(".add-to-cart-link").click(function (e) {
				e.preventDefault();
				var brand_id = $(this).data('brand-id');
				$("input[type=radio].brands").prop('checked', false);
				$("input[type=radio][value=" + brand_id + "]").prop('checked', true);
				$("#selected-model-label").text($(this).find('label').first().text());
				$(".add-to-cart-link").css({'color': ''});
				$(this).css({'color': 'red'});
			});
		}

		$("#autocomplete-color").autocomplete({
			minLength: 2,
			source: function (request, response) {
				$.getJSON("<?=$this->createUrl('getColor')?>", {
					color: request.term
				}, response);
			},
			select: function (event, ui) {
				console.log(ui.item.value);
				$("#autocomplete-color").css({'background-color': ui.item.value});
			}
		});

		$("#autocomplete-model").autocomplete({
			minLength: 2,
			source: function (request, response) {
				$.getJSON("<?=$this->createUrl('getModel')?>", {
					brand_id: $('.brands:checked').val(),
					model_name: request.term
				}, response);
			},
			/*select: function (event, ui) {
			 var $div = $("#image-preview");
			 $div.removeClass('hidden');

			 $.ajax({
			 url: '<?=$this->createUrl('CORS')?>',
			 type: 'get',
			 data: {
			 url: "http://ajax.googleapis.com/ajax/services/search/images",//?v=1.0&rsz=1&as_sitesearch=gsmarena.com&q='" + $("#selected-model-label").text().trim() + " " + ui.item.value + "'"),
			 params: {
			 'v': '1.0',
			 'rsz': 1,
			 'as_sitesearch': 'gsmarena.com',
			 //'imgsz': 'icon|small|medium',
			 //'as_filetype': 'gif|jpg|png',
			 //'imgtype': 'photo|clipart|face',
			 //'safe': 'active',
			 'q': ui.item.value
			 //'q': ('"' + $("#selected-model-label").html().trim(' ') + " " + ui.item.value + '"')
			 }
			 },
			 dataType: 'json',
			 //async: false,
			 //timeout: 3000
			 }).done(function (data) {
			 if (data.responseData.results.length)
			 $div.find('img').attr('src', data.responseData.results[0].unescapedUrl);
			 });

			 }*/
		});

		////////////////////////////////////////////
		var navListItems = $('div.setup-panel div a'),
			allWells = $('.setup-content'),
			allNextBtn = $('.nextBtn');

		allWells.hide();

		navListItems.click(function (e) {
			e.preventDefault();
			var $target = $($(this).attr('href')),
				$item = $(this);

			if (!$item.hasClass('disabled')) {
				navListItems.removeClass('btn-primary').addClass('btn-default');
				$item.addClass('btn-primary');
				allWells.hide();
				$target.show();
				$target.find('input:eq(0)').focus();
			}
		});

		allNextBtn.click(function () {
			var curStep = $(this).closest(".setup-content"),
				curStepBtn = curStep.attr("id"),
				nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
				curInputs = curStep.find("input[type='radio'],input[type='text'],input[type='url']"),
				isValid = true;

			$(".form-group").removeClass("has-error");
			for (var i = 0; i < curInputs.length; i++) {
				if (!curInputs[i].validity.valid) {
					isValid = false;
					$(curInputs[i]).closest(".form-group").addClass("has-error");
				}
			}

			if (isValid)
				nextStepWizard.removeAttr('disabled').trigger('click');
		});

		$('div.setup-panel div a.btn-primary').trigger('click');

		///////////////////////////////////

		$('.product-carousel').owlCarousel({
			loop: true,
			nav: true,
			margin: 20,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 3,
				},
				1000: {
					items: 5,
				}
			},
			onDragged: function (event) {
				cart_click();
			},
			onInitialized: function (event) {
				cart_click();
			}
		});

		///////////////////////////////////
		$(".add-to-cart-link").click(function (e) {
			$(this).css({"border-inset": ""});
		});

		$("#search-ticket").hide();
		$("#search-ticket-title").click(function (e) {
			$("#search-ticket").slideToggle(300);
		});
	});
</script>