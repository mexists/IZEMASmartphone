<?php
	/* @var $this ShopController */
	/* @var $ApplicationModel Application */
	/* @var $ProductBrandModel BrandModel */

	$this->pageTitle = "Shopping History";
	$this->getClientPlugin('datatable');
?>

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
						<form enctype="multipart/form-data" action="<?= $this->createUrl('CreateApplication') ?>"
						      class="checkout" method="post" name="checkout">

							<h3 id="order_review_heading">Your historical order</h3>

							<div id="order_review" style="position: relative;">
								<div class="the-box">
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="datatable-history">
											<thead class="the-box dark full">
											<tr>
												<th class="">No.</th>
												<th class="">Order No.</th>
												<th class="">Payment Method</th>
												<th class="">Date</th>
												<th class="">Status</th>
												<th class="">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php
												foreach ($ApplicationModels as $i => $ApplicationModel):

													?>
													<tr class="odd gradeX" data-model-id="<?= $ApplicationModel->id ?>">
														<td><?= $i + 1 ?></td>
														<td><?= $ApplicationModel->application_no ?></td>
														<td><?= "Direct Bank Transfer"//$ApplicationModel->payment_method  ?></td>
														<td><?= $this->toDateTime($ApplicationModel->created,
																'd/m/Y') ?></td>
														<td class="center"><?= $ApplicationModel->application_status->name ?></td>
														<td class="center">
															<a class="btn btn-default btn-sm view"
															   href="<?= $this->createUrl('application/view',
																   array('id' => $ApplicationModel->id)) ?>"><i
																	class="fa fa-eye"></i></a>
															<a class="btn btn-default btn-sm edit"
															   href="<?= $this->createUrl('application/update',
																   array('id' => $ApplicationModel->id)) ?>"><i
																	class="fa fa-edit"></i></a>
															<a class="btn btn-default btn-sm delete" href="<?= $this->createUrl('application/delete',
																array('id' => $ApplicationModel->id)) ?>""><i
																class="fa fa-eraser"></i></a>
															<a class="btn btn-default btn-sm report" href="<?= $this->createUrl('application/purchasereport',
																	array('id' => $ApplicationModel->id)) ?>""><i
																	class="fa fa-list"></i></a>
														</td>
													</tr>
												<?php
												endforeach;
											?>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<!-- /.the-box .default -->
								<!-- END DATA TABLE -->
							</div>
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