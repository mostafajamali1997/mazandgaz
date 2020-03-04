<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">جدول داده ها مثال ۱</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>محصول</th>
							<th>قیمت فروخته شده</th>
							<th>تعداد تخفیف ها</th>
							<th>تعداد خرید</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($contents as $content): ?>
							<tr>
								<td><?php echo $content['productId'] ?></td>
								<td><?php echo $content['selledPrice'] ?></td>
								<td><?php echo $content['amountOfDiscounts'] ?></td>
								<td><?php echo $content['amountOfBoughtItem'] ?></td>
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
