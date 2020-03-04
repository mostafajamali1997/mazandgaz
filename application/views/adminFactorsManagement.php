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
							<th>عنوان</th>
							<th>تاریخ سفارش</th>
							<th>وضعیت سفارش</th>
							<th>creatureBy</th>
							<th>وضعیت پرداخت</th>
							<th>کد رسید پرداخت</th>
							<th>تاریخ پرداخت</th>
							<th>وضعیت تحویل</th>
							<th>قیمت کل</th>
							<th>مشاهده جزییات</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($factors as $factor): ?>
							<tr>
								<td><?php echo $factor['orderedBy'] ?></td>
								<td> <?php echo $factor['dateOfOrder'] ?></td>
								<td> <?php echo $factor['orderStatus'] ?></td>
								<td> <?php echo $factor['creatureBy'] ?></td>
								<td> <?php echo $factor['paidStatus'] ?></td>
								<td> <?php echo $factor['paidCodeInPaymentList'] ?></td>
								<td> <?php echo $factor['dateTimeOfPaid'] ?></td>
								<td> <?php echo $factor['deliveryStatus'] ?></td>
								<td> <?php echo $factor['totalPrice'] ?></td>
								<td><a href="<?php echo base_url() . "index.php/UserController/
								factorContentsManagement/" . $factor['id'] ?>">جزییات</a></td>
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
