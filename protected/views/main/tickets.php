<?php
	/* @var $this ShopController */
	/* @var $Repair Repair */
	/* @var $ProductBrandModel BrandModel */

	$this->pageTitle = "My Repair Requests";
	$this->getClientPlugin('datatable');
?>

<style>
	#repair-info tr th{
		text-align: right !important;
	}
</style>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2><?= $this->pageTitle ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-sidebar">
					<h2 class="sidebar-title">Search Products</h2>

					<form action="">
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

			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">
						<form enctype="multipart/form-data" action="<?= $this->createUrl('') ?>"
						      class="checkout" method="post" name="checkout">

							<div class="row">
								<div class="col-md-6">
									<h3 id="order_review_heading">Your Repair Request </h3>
								</div>

								<div class="col-md-6">
									<a target="_blank" class="btn btn-default btn-sm report" href="<?= $this->createUrl('application/RepairReport',
											array('ticket' => $Repair->tickets_no)) ?>""><i class="fa fa-list"></i> Print Report</a>
								</div>
							</div>

							<?php
								if ($Repair):
									?>
									<div id="order_review"
									     style="position: relative; <?= ($Repair == NULL) ? 'display: none' : '' ?>">
										<div class="the-box">
											<div class="table-responsive">
												<table class="table table-striped table-hover" id="repair-info">
													<thead class="the-box dark full">
													<tr>

													</tr>
													</thead>
													<tbody>
													<tr class="odd gradeX" data-model-id="<?= $Repair->id ?>">
														<th>Tickets Number:</th>
														<td><?= $Repair->tickets_no ?></td>
													</tr>
													<tr style="<?= ($Repair->repair_status == 3) ? 'background-color:greenyellow' : '' ?>">
														<th>Status:</th>
														<td><?= $Repair->status->name ?></td>
													</tr>
													<tr>
														<th>Request Date:</th>
														<td><?= date('l', strtotime($Repair->created)) ." ". $this->toDateTime($Repair->created, 'd/m/Y h:i a') ?></td>
													</tr>
													<tr>
														<th>Your Name:</th>
														<td><?= $Repair->customer_name ?></td>
													</tr>
													<tr>
														<th>Your E-mail:</th>
														<td><?= $Repair->email ?></td>
													</tr>
													<tr>
														<th>Your Phone:</th>
														<td><?= $Repair->phone_no ?></td>
													</tr>
													<tr>
														<th>Device:</th>
														<td><?= $Repair->brand->name ?></td>
													</tr>
													<tr>
														<th>Model:</th>
														<td><?= $Repair->model_name ?></td>
													</tr>
													<tr>
														<th>Color:</th>
														<td><?= $Repair->color_name ?></td>
													</tr>
													<tr>
														<th>Issue:</th>
														<td>
															<h5><?= $Repair->issue_title ?></h5>
															Details:-
															<p><?= $Repair->issue_desc ?></p>
														</td>
													</tr>
													<tr>
														<th>Repair Charge:</th>
														<td>RM<?= $Repair->charge ?></td>
													</tr>
													<tr>
														<th>Staff Feedback:</th>
														<td>
													<textarea readonly="readonly" cols="80"
													          rows="5"><?= $Repair->staff_msg ?></textarea>
														</td>
													</tr>
													<tr>
														<th>Phone Image:</th>
														<td><img
																src="<?= Yii::app()->baseUrl . "/images/repairs/$Repair->repair_file" ?>" />
														</td>
													</tr>

													</tbody>
												</table>
											</div>
											<!-- /.table-responsive -->
										</div>
										<!-- /.the-box .default -->
										<!-- END DATA TABLE -->
									</div>
								<?php
								else:
									?>
									<div id="order_review"
									     style="position: relative; <?= ($Repair == NULL) ? '' : 'display: none' ?>">
										<h2>Sorry, No Repair Request Were Found..</h2>
									</div>
								<?php
								endif;
							?>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	$(document).ready(function () {
		$('#datatable-history').dataTable({
			"sPaginationType": "full_numbers",
			//"sDom": 'TC<"clear">lfrtip',
		});

		$("#ship-to-different-address-checkbox").change(function (e) {
			e.preventDefault();

			if ($(this).prop('checked'))
				$(".shipping_address").show(300);
			else
				$(".shipping_address").hide(300);

		});
	});
</script>