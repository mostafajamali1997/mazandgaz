<div class="container">


	<div class="cart transition is-open">
		<?php $i = 1; ?>
		<?php echo form_open(base_url() . 'index.php/FactorController/updateCart/'); ?>

		<div class="table">

			<div class="layout-inline row th">
				<div class="col col-pro">محصول</div>
				<div class="col col-price align-center ">
					قیمت
				</div>
				<div class="col col-qty align-center">تعداد</div>
				<div class="col">قیمت کل</div>
			</div>

			<?php foreach ($this->cart->contents() as $items): ?>

				<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

				<div class="layout-inline row">
					<div class="col col-pro layout-inline">
						<p><?php echo $items['name']; ?></p>
					</div>
					<div class="col col-price col-numeric align-center ">
						<p><?php echo $this->cart->format_number($items['price']); ?></p>
					</div>
					<div class="col col-qty layout-inline">
						<td><?php echo form_input(array('type' => 'numberic', 'name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
					</div>
					<div class="col col-total col-numeric">
						<p> <?php echo $this->cart->format_number($items['subtotal']); ?></p>
					</div>
				</div>

				<?php $i++; ?>
			<?php endforeach; ?>
			<?php echo form_hidden('count', $i); ?>
			<?php echo form_submit('', 'به روز رسانی'); ?>


			<div class="tf">

				<div class="row layout-inline" style="margin-right: 10px">
					<p>مجموع</p>
					<div class="col col-price col-numeric align-center ">
						<p><?php echo $this->cart->format_number($this->cart->total()); ?></p>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</div>

		<?php form_close() ?>
		<?php echo form_open(base_url() . 'index.php/FactorController/addFactor') ?>
		<?php echo form_hidden('count', $i); ?>
		<?php echo form_submit('', 'نهایی کردن خرید') ?>


		<a href="<?php echo base_url() . 'index.php/FactorController/addFactor' ?>" class="btn btn-success">نهایی کردن
			خرید</a>

		<a href="<?php echo base_url() ?>index.php/FactorController/destroyCart/" class="btn btn-danger">
			انصراف از خرید </a>

	</div>
</div>


</body>


<style>


	a {
		text-decoration: none;
	}

	.cart {
		margin: 2.5em;
		overflow: hidden;
	}

	.th {
		background: #0420f3;
		color: #bdd5ff;
		text-transform: uppercase;
		font-weight: bold;
		font-size: 1.5em;
	}

	.tf {
		background: #ababbd;
		text-transform: uppercase;
		text-align: right;
		font-size: 1.2em;
	}


	.col-qty {
		text-align: center;
		width: 17%;
	}

	.col-total p {
		color: #12c8b1;
	}

	.col-qty > * {
		vertical-align: middle;
	}

	.col-qty > input {
		max-width: 2.6em;
	}


	}

</style>


</html>
