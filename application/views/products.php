<div class="row mt-5" id="productsRow">
	<div class="container-fluid">
		<div class="card-deck mb-3 ">

			<div class="container">

				<?php foreach ($products as $pr): ?>


					<div class="row" style="margin: 50px;">

						<div class="col-md-5">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

								<!-- -->
								<!-- -->
								<div class="carousel-inner">

									<div class="carousel-item active">
										<img src="https://<?php echo
											$pr['image']['uploadedAddress'] . $pr['image']['imageName'] ?>"
											 class="d-block w-100"
											 alt="<?php echo
												 $pr['image']['uploadedAddress'] . $pr['image']['imageName'] ?>">
									</div>
								</div>
								<!-- -->
								<!-- -->

								<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
								   data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button"
								   data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="col-md-7">
							<h4><?php echo $pr['title'] ?></h4>

							<h6><?php echo $pr['secondaryTitr'] ?></h6>

							<p><?php echo $pr['shortDescription'] ?></p>

							<p class="price"
							   style="color: #FE980F;font-size: 26px;font-weight: bold;padding-top: 10px;">
								<?php echo $pr['amountForSell'] ?></p>

							<a href="<?php echo base_url() . "index.php/FinancialController/product/" . $pr['id'] ?>"
							   class="btn btn-danger">جزییات</a>

						</div>
					</div>

				<?php endforeach; ?>


			</div>


		</div>
	</div>
</div>


<br/>
<div class="row">
</div>
