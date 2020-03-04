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

<a href="/index.php/FactorController/"
   class="fa fa-shopping-cart" style="color: #00CC00;
    font-size: 48px; margin-top: 10px; margin-left: 10px;"></a>

<div class="container">

	<?php foreach ($products as $pr): ?>


		<div class="row">

			<div class="col-md-5">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


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
				<h2><?php echo $pr['title'] ?></h2>

				<h4><?php echo $pr['secondaryTitr'] ?></h4>

				<p><?php echo $pr['shortDescription'] ?></p>

				<p class="price" style="color: #FE980F;font-size: 26px;font-weight: bold;padding-top: 10px;">
					<?php echo $pr['amountForSell'] ?></p>

				<a href="<?php echo 'product/' . $pr['id'] ?>" class="btn btn-danger">جزییات</a>

			</div>
		</div>

	<?php endforeach; ?>


</div>

</body>

</html>
