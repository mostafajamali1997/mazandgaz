<html>
<head>


</head>
<body>

<section>
	<!--for demo wrap-->
	<h1>جزییات فاکتور</h1>
	<div class="tbl-header">
		<table cellpadding="0" cellspacing="0" border="0">
			<thead>
			<tr>
				<th>محصول</th>
				<th>قیمت</th>
				<th>تخفیف ها</th>
				<th>تعداد خرید</th>
			</tr>
			</thead>
		</table>
	</div>
	<div class="tbl-content">
		<table cellpadding="0" cellspacing="0" border="0">
			<tbody>
			<?php foreach ($contents as $content): ?>
				<tr>
					<td><?php echo $content['productTitle'] ?></td>
					<td><?php echo $content['selledPrice'] ?> </td>
					<td><?php echo $content['amountOfDiscounts'] ?></td>
					<td><?php echo $content['amountOfBoughtItem'] ?></td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</section>


</body>

<style>
	a {
		text-decoration: none;
	}

	h1 {
		font-size: 30px;
		color: #110a11;
		text-transform: uppercase;
		font-weight: 300;
		text-align: center;
		margin-bottom: 15px;
	}

	table {
		width: 100%;
		table-layout: fixed;
	}

	.tbl-header {
		background-color: rgba(255, 255, 255, 0.3);
	}

	.tbl-content {
		height: 300px;
		overflow-x: auto;
		margin-top: 0px;
		border: 1px solid rgba(255, 255, 255, 0.3);
	}

	th {
		padding: 20px 15px;
		text-align: left;
		font-weight: 500;
		font-size: 12px;
		color: #110404;
		text-transform: uppercase;
	}

	td {
		padding: 15px;
		text-align: left;
		vertical-align: middle;
		font-weight: 300;
		font-size: 12px;
		color: #110404;
		border-bottom: solid 1px rgba(255, 255, 255, 0.1);
	}


	/* demo styles */


	/* follow me template */
	.made-with-love {
		margin-top: 40px;
		padding: 10px;
		clear: left;
		text-align: center;
		font-size: 10px;
		font-family: arial;
		color: #110404;
	}

	.made-with-love i {
		font-style: normal;
		color: #F50057;
		font-size: 14px;
		position: relative;
		top: 2px;
	}

	.made-with-love a {
		color: #110404;
		text-decoration: none;
	}

	.made-with-love a:hover {
		text-decoration: underline;
	}


	/* for custom scrollbar for webkit browser*/

	::-webkit-scrollbar {
		width: 6px;
	}

	::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
	}

	::-webkit-scrollbar-thumb {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
	}

</style>


</html>
