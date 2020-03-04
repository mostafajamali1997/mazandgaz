<html>
<head>
	<title>Upload Form</title>
</head>
<body>


<?php echo form_open_multipart('FinancialController/addProductImage'); ?>
<?php echo form_input(array('name' => 'productId', 'id' => 'productId')); ?>
<input type="file" name="userfile" size="20"/>

<br/><br/>

<input type="submit" value="upload"/>

</form>

</body>
</html>
