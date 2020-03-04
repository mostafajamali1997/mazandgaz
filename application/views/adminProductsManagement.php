<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">جدول داده ها مثال ۱</h3>
				</div>
				<!-- /.box-header -->
				<?php if ($baseProductGroupId != 0 && $secondaryProductGroupId != 0): ?>
					<a href="<?php echo base_url() . "index.php/UserController/addProductForm/"
						. $secondaryProductGroupId . '/' . $baseProductGroupId ?>"
					   class="btn btn-success"
					   style="margin-left:50px;float: left">افزودن محصول جدید</a>
				<?php endif; ?>


				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>عنوان</th>
							<th>تیتر</th>
							<th>توضیح کوتاه</th>
							<th>زیردسته۱</th>
							<th>زیردسته۲</th>
							<th>تاریخ ایجاد</th>
							<th>ایجادکننده</th>
							<th>تخفیف</th>
							<th>قیمت</th>
							<th>کاربران می توانند نظر بدهند؟</th>
							<th>کاربران می توانند این محصول را ببینند؟</th>
							<th>وضعیت محصول</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($products as $product): ?>
							<tr>
								<td><?php echo $product['title'] ?></td>
								<td><?php echo $product['secondaryTitr'] ?></td>
								<td><?php echo $product['shortDescription'] ?></td>
								<td><?php echo $product['baseProductGroupId'] ?></td>
								<td><?php echo $product['secondaryProductGroupId'] ?></td>
								<td><?php echo $product['dateOfAddProduct'] ?></td>
								<td><?php echo $product['adderUsername'] ?></td>
								<td><?php echo $product['doesHaveDiscount'] ?></td>
								<td><?php echo $product['amountForSell'] ?></td>
								<td><?php echo $product['usersCanSendComment'] ?></td>
								<td><?php echo $product['usersCanSeeThisProduct'] ?></td>
								<td><?php echo $product['status'] ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
						<tr>
							<th>موتور رندر</th>
							<th>مرورگر</th>
							<th>سیستم عامل</th>
							<th>ورژن</th>
							<th>امتیاز</th>
						</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->


			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
