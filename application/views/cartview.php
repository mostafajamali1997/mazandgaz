<?php $i = 1; ?>
<?php echo form_open(base_url() . 'index.php/FactorController/updateCart/'); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

	<tr>
		<th>QTY</th>
		<th>Item Description</th>
		<th style="text-align:right">Item Price</th>
		<th style="text-align:right">Sub-Total</th>
	</tr>


	<?php foreach ($this->cart->contents() as $items): ?>

		<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

		<tr>
			<td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
			<td>
				<?php echo $items['name']; ?>

			</td>
			<td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
			<td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
		</tr>

		<?php $i++; ?>

	<?php endforeach; ?>

	<tr>
		<td colspan="2"></td>
		<td class="right"><strong>Total</strong></td>
		<td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
	</tr>

</table>
<?php echo form_hidden('count', $i); ?>

<p><?php echo form_submit('', 'به روز رسانی'); ?></p>

<?php echo form_open('https://sandbox.api.parspal.com/v1/'); ?>
<p><?php echo form_submit('', 'نهایی کردن خرید'); ?></p>
<?php echo form_close() ?>

<a href="https://sandbox.api.parspal.com/v1/">پرداخت</a>

<?php echo form_open(base_url() . 'index.php/FactorController/destroyCart/'); ?>
<p><?php echo form_submit('', 'انصراف از خرید'); ?></p>
