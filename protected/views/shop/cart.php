<?php
	/* @var $this ShopController */
	/* @var $RelatedBrandModel BrandModel */
	/* @var $BrandModel BrandModel */
	/* @var $ProductBrandModel BrandModel */

	$this->pageTitle = "Cart";
?>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Shopping Cart</h2>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End Page title area -->


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-sidebar">
					<h2 class="sidebar-title">Search Products</h2>

					<form action="#">
						<input type="text" placeholder="Search products...">
						<input type="submit" value="Search">
					</form>
				</div>

				<div class="single-sidebar">
					<h2 class="sidebar-title">Products</h2>

					<?php
						foreach ($ProductBrandModels as $ProductBrandModel):
							?>
							<div class="thubmnail-recent">
								<img
									src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $ProductBrandModel->image_name ?>"
									class="recent-thumb" alt="">

								<h2><a href="<?= $this->createUrl('/shop/brand', array(
										'id' => $ProductBrandModel->brand->id,
										'model' => $ProductBrandModel->id
									)) ?>"><?= "{$ProductBrandModel->brand->name} {$ProductBrandModel->name}" ?></a>
								</h2>

								<div class="product-sidebar-price">
									<ins>RM<?= $ProductBrandModel->price ?></ins>
									<!--<del>$800.00</del>-->
								</div>
							</div>
						<?php endforeach; ?>
				</div>

				<div class="single-sidebar hidden">
					<h2 class="sidebar-title">Recent Posts</h2>
					<ul>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">
						<form method="post" action="#">
							<table cellspacing="0" class="shop_table cart">
								<thead>
								<tr>
									<th class="product-remove">&nbsp;</th>
									<th class="product-thumbnail">&nbsp;</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
								</tr>
								</thead>
								<tbody>
								<?php
									$total = $subtotal = 0;
									foreach (Yii::app()->session['carts'] as $model_id => $quantity):
										$BrandModel = BrandModel::model()->findByPk($model_id);
										$total = floatval($BrandModel->price) * floatval($quantity);
										$subtotal += $total;
										?>
										<tr class="cart_item" data-model-id="<?= $BrandModel->id ?>">
											<td class="product-remove">
												<a title="Remove this item" class="remove" href="#">×</a>
											</td>

											<td class="product-thumbnail">
												<a href="<?= $this->createUrl('/shop/brand', array(
													'id' => $BrandModel->brand->id,
													'model' => $BrandModel->id
												)) ?>">
													<img width="145" height="145"
													     alt="poster_1_up"
													     class="shop_thumbnail"
													     src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $BrandModel->image_name ?>"></a>
											</td>

											<td class="product-name">
												<a href="<?= $this->createUrl('/shop/brand', array(
													'id' => $BrandModel->brand->id,
													'model' => $BrandModel->id
												)) ?>"><?= "{$BrandModel->brand->name} {$BrandModel->name}" ?></a>
											</td>

											<td class="product-price">
												<span class="amount">RM<?= $BrandModel->price ?></span>
											</td>

											<td class="product-quantity">
												<div class="quantity buttons_added">
													<input type="button" class="minus" value="-" />
													<input type="number" size="4" class="input-text qty text"
													       title="Qty" name="quantity"
													       value="<?= $quantity ?>" min="1" step="1" />
													<input type="button" class="plus" value="+" />
												</div>
											</td>

											<td class="product-subtotal">
												<span class="amount">RM<?= $total ?></span>
											</td>
										</tr>
									<?php
									endforeach;
								?>
								<tr>
									<td class="actions" colspan="6">
										<div class="coupon hidden">
											<label for="coupon_code">Coupon:</label>
											<input type="text" placeholder="Coupon code" value="" id="coupon_code"
											       class="input-text" name="coupon_code">
											<input type="submit" value="Apply Coupon" name="apply_coupon"
											       class="button">
										</div>

										<input type="submit" value="Update Cart" name="update_cart" class="button">
										<input type="submit" value="Proceed to Checkout" name="proceed"
										       class="checkout-button button alt wc-forward">
									</td>
								</tr>
								</tbody>
							</table>
						</form>

						<div class="cart-collaterals">


							<div class="cross-sells">
								<h2>You may be interested in...</h2>
								<ul class="products">

									<?php
										foreach ($InterestedBrandModels as $InterestedBrandModel):
											?>

											<li class="product">
												<a href="<?= $this->createUrl('/shop/brand', array(
													'id' => $ProductBrandModel->brand->id,
													'model' => $ProductBrandModel->id
												)) ?>">
													<img width="325" height="325" alt="T_4_front"
													     class="attachment-shop_catalog wp-post-image"
													     src="<?= Yii::app()->baseUrl ?>/images/brand_model/<?= $InterestedBrandModel->image_name ?>">

													<h3><?= "{$ProductBrandModel->brand->name} {$ProductBrandModel->name}" ?></h3>
													<span class="price">
														<span class="amount">RM<?= $ProductBrandModel->price ?></span>
													</span>
												</a>

												<a class="add_to_cart_button" data-quantity="1" data-product_sku=""
												   data-product_id="22" rel="nofollow"
												   href="<?= $this->createUrl('/shop/brand', array(
													   'id' => $ProductBrandModel->brand->id,
													   'model' => $ProductBrandModel->id
												   )) ?>">View Details</a>
											</li>
										<?php
										endforeach;
									?>
								</ul>
							</div>

							<div class="cart_totals ">
								<h2>Cart Totals</h2>

								<table cellspacing="0">
									<tbody>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">RM<?= $subtotal ?></span></td>
									</tr>

									<tr class="shipping">
										<th>Shipping and Handling</th>
										<td>Free Shipping</td>
									</tr>

									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">RM<?= $subtotal ?></span></strong></td>
									</tr>
									</tbody>
								</table>
							</div>

							<form method="post" action="#" class="shipping_calculator hidden">
								<h2><a class="shipping-calculator-button" data-toggle="collapse"
								       href="#calcalute-shipping-wrap" aria-expanded="false"
								       aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>

								<section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

									<p class="form-row form-row-wide">
										<select rel="calc_shipping_state" class="country_to_state"
										        id="calc_shipping_country" name="calc_shipping_country">
											<option value="">Select a country…</option>
											<option value="AX">Åland Islands</option>
											<option value="AF">Afghanistan</option>
											<option value="AL">Albania</option>
											<option value="DZ">Algeria</option>
											<option value="AD">Andorra</option>
											<option value="AO">Angola</option>
											<option value="AI">Anguilla</option>
											<option value="AQ">Antarctica</option>
											<option value="AG">Antigua and Barbuda</option>
											<option value="AR">Argentina</option>
											<option value="AM">Armenia</option>
											<option value="AW">Aruba</option>
											<option value="AU">Australia</option>
											<option value="AT">Austria</option>
											<option value="AZ">Azerbaijan</option>
											<option value="BS">Bahamas</option>
											<option value="BH">Bahrain</option>
											<option value="BD">Bangladesh</option>
											<option value="BB">Barbados</option>
											<option value="BY">Belarus</option>
											<option value="PW">Belau</option>
											<option value="BE">Belgium</option>
											<option value="BZ">Belize</option>
											<option value="BJ">Benin</option>
											<option value="BM">Bermuda</option>
											<option value="BT">Bhutan</option>
											<option value="BO">Bolivia</option>
											<option value="BQ">Bonaire, Saint Eustatius and Saba</option>
											<option value="BA">Bosnia and Herzegovina</option>
											<option value="BW">Botswana</option>
											<option value="BV">Bouvet Island</option>
											<option value="BR">Brazil</option>
											<option value="IO">British Indian Ocean Territory</option>
											<option value="VG">British Virgin Islands</option>
											<option value="BN">Brunei</option>
											<option value="BG">Bulgaria</option>
											<option value="BF">Burkina Faso</option>
											<option value="BI">Burundi</option>
											<option value="KH">Cambodia</option>
											<option value="CM">Cameroon</option>
											<option value="CA">Canada</option>
											<option value="CV">Cape Verde</option>
											<option value="KY">Cayman Islands</option>
											<option value="CF">Central African Republic</option>
											<option value="TD">Chad</option>
											<option value="CL">Chile</option>
											<option value="CN">China</option>
											<option value="CX">Christmas Island</option>
											<option value="CC">Cocos (Keeling) Islands</option>
											<option value="CO">Colombia</option>
											<option value="KM">Comoros</option>
											<option value="CG">Congo (Brazzaville)</option>
											<option value="CD">Congo (Kinshasa)</option>
											<option value="CK">Cook Islands</option>
											<option value="CR">Costa Rica</option>
											<option value="HR">Croatia</option>
											<option value="CU">Cuba</option>
											<option value="CW">CuraÇao</option>
											<option value="CY">Cyprus</option>
											<option value="CZ">Czech Republic</option>
											<option value="DK">Denmark</option>
											<option value="DJ">Djibouti</option>
											<option value="DM">Dominica</option>
											<option value="DO">Dominican Republic</option>
											<option value="EC">Ecuador</option>
											<option value="EG">Egypt</option>
											<option value="SV">El Salvador</option>
											<option value="GQ">Equatorial Guinea</option>
											<option value="ER">Eritrea</option>
											<option value="EE">Estonia</option>
											<option value="ET">Ethiopia</option>
											<option value="FK">Falkland Islands</option>
											<option value="FO">Faroe Islands</option>
											<option value="FJ">Fiji</option>
											<option value="FI">Finland</option>
											<option value="FR">France</option>
											<option value="GF">French Guiana</option>
											<option value="PF">French Polynesia</option>
											<option value="TF">French Southern Territories</option>
											<option value="GA">Gabon</option>
											<option value="GM">Gambia</option>
											<option value="GE">Georgia</option>
											<option value="DE">Germany</option>
											<option value="GH">Ghana</option>
											<option value="GI">Gibraltar</option>
											<option value="GR">Greece</option>
											<option value="GL">Greenland</option>
											<option value="GD">Grenada</option>
											<option value="GP">Guadeloupe</option>
											<option value="GT">Guatemala</option>
											<option value="GG">Guernsey</option>
											<option value="GN">Guinea</option>
											<option value="GW">Guinea-Bissau</option>
											<option value="GY">Guyana</option>
											<option value="HT">Haiti</option>
											<option value="HM">Heard Island and McDonald Islands</option>
											<option value="HN">Honduras</option>
											<option value="HK">Hong Kong</option>
											<option value="HU">Hungary</option>
											<option value="IS">Iceland</option>
											<option value="IN">India</option>
											<option value="ID">Indonesia</option>
											<option value="IR">Iran</option>
											<option value="IQ">Iraq</option>
											<option value="IM">Isle of Man</option>
											<option value="IL">Israel</option>
											<option value="IT">Italy</option>
											<option value="CI">Ivory Coast</option>
											<option value="JM">Jamaica</option>
											<option value="JP">Japan</option>
											<option value="JE">Jersey</option>
											<option value="JO">Jordan</option>
											<option value="KZ">Kazakhstan</option>
											<option value="KE">Kenya</option>
											<option value="KI">Kiribati</option>
											<option value="KW">Kuwait</option>
											<option value="KG">Kyrgyzstan</option>
											<option value="LA">Laos</option>
											<option value="LV">Latvia</option>
											<option value="LB">Lebanon</option>
											<option value="LS">Lesotho</option>
											<option value="LR">Liberia</option>
											<option value="LY">Libya</option>
											<option value="LI">Liechtenstein</option>
											<option value="LT">Lithuania</option>
											<option value="LU">Luxembourg</option>
											<option value="MO">Macao S.A.R., China</option>
											<option value="MK">Macedonia</option>
											<option value="MG">Madagascar</option>
											<option value="MW">Malawi</option>
											<option value="MY">Malaysia</option>
											<option value="MV">Maldives</option>
											<option value="ML">Mali</option>
											<option value="MT">Malta</option>
											<option value="MH">Marshall Islands</option>
											<option value="MQ">Martinique</option>
											<option value="MR">Mauritania</option>
											<option value="MU">Mauritius</option>
											<option value="YT">Mayotte</option>
											<option value="MX">Mexico</option>
											<option value="FM">Micronesia</option>
											<option value="MD">Moldova</option>
											<option value="MC">Monaco</option>
											<option value="MN">Mongolia</option>
											<option value="ME">Montenegro</option>
											<option value="MS">Montserrat</option>
											<option value="MA">Morocco</option>
											<option value="MZ">Mozambique</option>
											<option value="MM">Myanmar</option>
											<option value="NA">Namibia</option>
											<option value="NR">Nauru</option>
											<option value="NP">Nepal</option>
											<option value="NL">Netherlands</option>
											<option value="AN">Netherlands Antilles</option>
											<option value="NC">New Caledonia</option>
											<option value="NZ">New Zealand</option>
											<option value="NI">Nicaragua</option>
											<option value="NE">Niger</option>
											<option value="NG">Nigeria</option>
											<option value="NU">Niue</option>
											<option value="NF">Norfolk Island</option>
											<option value="KP">North Korea</option>
											<option value="NO">Norway</option>
											<option value="OM">Oman</option>
											<option value="PK">Pakistan</option>
											<option value="PS">Palestinian Territory</option>
											<option value="PA">Panama</option>
											<option value="PG">Papua New Guinea</option>
											<option value="PY">Paraguay</option>
											<option value="PE">Peru</option>
											<option value="PH">Philippines</option>
											<option value="PN">Pitcairn</option>
											<option value="PL">Poland</option>
											<option value="PT">Portugal</option>
											<option value="QA">Qatar</option>
											<option value="IE">Republic of Ireland</option>
											<option value="RE">Reunion</option>
											<option value="RO">Romania</option>
											<option value="RU">Russia</option>
											<option value="RW">Rwanda</option>
											<option value="ST">São Tomé and Príncipe</option>
											<option value="BL">Saint Barthélemy</option>
											<option value="SH">Saint Helena</option>
											<option value="KN">Saint Kitts and Nevis</option>
											<option value="LC">Saint Lucia</option>
											<option value="SX">Saint Martin (Dutch part)</option>
											<option value="MF">Saint Martin (French part)</option>
											<option value="PM">Saint Pierre and Miquelon</option>
											<option value="VC">Saint Vincent and the Grenadines</option>
											<option value="SM">San Marino</option>
											<option value="SA">Saudi Arabia</option>
											<option value="SN">Senegal</option>
											<option value="RS">Serbia</option>
											<option value="SC">Seychelles</option>
											<option value="SL">Sierra Leone</option>
											<option value="SG">Singapore</option>
											<option value="SK">Slovakia</option>
											<option value="SI">Slovenia</option>
											<option value="SB">Solomon Islands</option>
											<option value="SO">Somalia</option>
											<option value="ZA">South Africa</option>
											<option value="GS">South Georgia/Sandwich Islands</option>
											<option value="KR">South Korea</option>
											<option value="SS">South Sudan</option>
											<option value="ES">Spain</option>
											<option value="LK">Sri Lanka</option>
											<option value="SD">Sudan</option>
											<option value="SR">Suriname</option>
											<option value="SJ">Svalbard and Jan Mayen</option>
											<option value="SZ">Swaziland</option>
											<option value="SE">Sweden</option>
											<option value="CH">Switzerland</option>
											<option value="SY">Syria</option>
											<option value="TW">Taiwan</option>
											<option value="TJ">Tajikistan</option>
											<option value="TZ">Tanzania</option>
											<option value="TH">Thailand</option>
											<option value="TL">Timor-Leste</option>
											<option value="TG">Togo</option>
											<option value="TK">Tokelau</option>
											<option value="TO">Tonga</option>
											<option value="TT">Trinidad and Tobago</option>
											<option value="TN">Tunisia</option>
											<option value="TR">Turkey</option>
											<option value="TM">Turkmenistan</option>
											<option value="TC">Turks and Caicos Islands</option>
											<option value="TV">Tuvalu</option>
											<option value="UG">Uganda</option>
											<option value="UA">Ukraine</option>
											<option value="AE">United Arab Emirates</option>
											<option selected="selected" value="GB">United Kingdom (UK)</option>
											<option value="US">United States (US)</option>
											<option value="UY">Uruguay</option>
											<option value="UZ">Uzbekistan</option>
											<option value="VU">Vanuatu</option>
											<option value="VA">Vatican</option>
											<option value="VE">Venezuela</option>
											<option value="VN">Vietnam</option>
											<option value="WF">Wallis and Futuna</option>
											<option value="EH">Western Sahara</option>
											<option value="WS">Western Samoa</option>
											<option value="YE">Yemen</option>
											<option value="ZM">Zambia</option>
											<option value="ZW">Zimbabwe</option>
										</select>
									</p>

									<p class="form-row form-row-wide"><input type="text" id="calc_shipping_state"
									                                         name="calc_shipping_state"
									                                         placeholder="State / county" value=""
									                                         class="input-text"></p>

									<p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode"
									                                         name="calc_shipping_postcode"
									                                         placeholder="Postcode / Zip" value=""
									                                         class="input-text"></p>


									<p>
										<button class="button" value="1" name="calc_shipping"
										        type="submit">Update Totals
										</button>
									</p>

								</section>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('.plus').click(function () {
			var $qty = $(this).prev('input[name=quantity]').first();
			$qty.val(parseInt($qty.val()) + 1);
			$qty.trigger('change');
		});
		$('.minus').click(function () {
			var $qty = $(this).next('input[name=quantity]').first();
			$qty.val(parseInt($qty.val()) - 1);
			$qty.trigger('change');
		});

		$("input[name='quantity']").change(function (e) {
			e.preventDefault();

			$.ajax({
				url: '<?=$this->createUrl("AddToCart")?>',
				data: {'model-id': $(this).parents('tr:eq(0)').data('model-id'), 'quantity': $(this).val()},
				type: 'post',
				dataType: 'json'
			}).success(function (data) {
				console.log(data);
			});
		});

		$(".remove").click(function (e) {
			e.preventDefault();

			$.ajax({
				url: '<?=$this->createUrl("RemoveFromCart")?>',
				data: {'model-id': $(this).parents('tr:eq(0)').data('model-id')},
				type: 'post',
				dataType: 'json'
			}).success(function (data) {
				console.log(data);
				window.location.reload();
			});
		});

		$("input[name='update_cart'").click(function (e) {
			e.preventDefault();
			window.location.reload();
		});
		$("input[name='proceed'").click(function (e) {
			e.preventDefault();
			window.location.href='<?=$this->createUrl('checkout')?>';
		});
	});
</script>