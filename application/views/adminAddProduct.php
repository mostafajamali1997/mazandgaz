<div class="container" style="margin-right: 400px; margin-top: 50px;">


	<?php echo form_open_multipart(base_url() . "index.php/UserController/addProduct"); ?>
	<?php echo form_input(array('type' => 'hidden',
		'name' => 'baseProductGroupId',
		'value' => $baseProductGroupId)); ?>
	<?php echo form_input(array('type' => 'hidden',
		'name' => 'secondaryProductGroupId',
		'value' => $secondaryProductGroupId)); ?>

	<?php echo form_input(array('type' => 'hidden',
		'name' => 'status',
		'value' => 1)); ?>


	<p>عنوان </p>
	<?php echo form_input(['name' => 'title']); ?>
	<br>

	<p>تیتر</p>
	<?php echo form_input(['name' => 'secondaryTitr']); ?>
	<br>

	<p>توضیحات</p>
	<?php echo form_input(['name' => 'shortDescription']); ?>
	<br>

	<p>تخفیف دارد؟</p>
	<?php echo form_input(['name' => 'doesHaveDiscount']); ?>
	<br>

	<p>قیمت</p>
	<?php echo form_input(['name' => 'amountForSell']); ?>
	<br>

	<p>کاربران میتوانند نظر بدهند؟</p>
	<?php echo form_input(['name' => 'usersCanSendComment']); ?>
	<br>

	<p>کاربران میتوانند این محصول را مشاهده کنند؟</p>
	<?php echo form_input(['name' => 'usersCanSeeThisProduct']); ?>
	<br>

	<p style="margin-top: 20px;">لطفا تصویر محصول را انتخاب کنید</p>
	<input type="file" name="userfile" size="20"/>
	<br>

	<?php echo form_submit('btn_addBaseProduct', 'افزودن'); ?>
	<?php form_close(); ?>
</div>
