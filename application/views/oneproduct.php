<html>
<head>
	<title>product page </title>
	<link href="../../static/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="container">

	<?php foreach ($product as $pr): ?>


		<div class="row">
			<div class="col-md-5">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<?php foreach ($images as $image): ?>

						<div class="carousel-inner">

							<div class="carousel-item active">
								<img src="https://<?php echo $image['uploadedAddress'] . $image['imageName'] ?>"
									 class="d-block w-100"
									 alt="<?php echo $image['uploadedAddress'] . $image['imageName'] ?>">

							</div>

						</div>
					<?php endforeach; ?>

					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-7">
				<p class="newarrival text-center">NEW</p>
				<h2><?php echo $pr['title'] ?></h2>
				<h4><?php echo $pr['secondaryTitr'] ?></h4>
				<p><?php echo $pr['shortDescription'] ?></p>

				<p class="price" style="color: #FE980F;font-size: 26px;font-weight: bold;padding-top: 10px;">
					<?php echo $pr['amountForSell'] ?></p>


				<label>تعداد:</label>

				<?php echo form_open('/FactorController/addToCart/' . $pr['id'] . '/' . $pr['amountForSell']); ?>
				<input type="text" value="1" name="qty" id="qty">

				<?php echo form_hidden('title', $pr['title']); ?>
				<br>
				<input type="submit" value="افزودن به سبد خرید" class="btn btn-success" style="background: #FDA50A;"/>
				</form>


			</div>
		</div>


		<?php foreach ($comments as $comment): ?>
			<h4><?php echo $comment['senderName'] ?> میگوید:</h4>
			<a><?php echo $comment['message'] ?></a>


		<?php endforeach; ?>

	<?php endforeach; ?>


</div>

</body>

</html>
