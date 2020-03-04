<div class="container" style="margin-right: 400px; margin-top: 50px;">


	<?php echo form_open(base_url() .
		"index.php/UserController/addSecondaryProductGroup/" . $baseProductGroupId); ?>

	<p>عنوان </p>
	<?php echo form_input(['name' => 'title']); ?>
	<br>
	<p>توضیحات </p>
	<?php echo form_input(['name' => 'description']); ?>
	<br>
	<p>sort number</p>
	<?php echo form_input(['name' => 'sortNumber']); ?>
	<br>
	<?php echo form_input(array(
		'type' => 'hidden',
		'name' => 'baseProductGroupId',
		'value' => $baseProductGroupId
	)); ?>

	<?php echo form_submit('btn_addBaseProduct', 'افزودن'); ?>

	<?php form_close(); ?>


</div>

