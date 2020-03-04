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
							<th>نام کاربری</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<th>تاریخ تولد</th>
							<th>تلفن</th>
							<th>موبایل</th>
							<th>کدپستی</th>
							<th>کدملی</th>
							<th>ایمیل</th>
							<th>آدرس منزل</th>
							<th>آدرس محل کار</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user['username'] ?></td>
								<td><?php echo $user['fname'] ?></td>
								<td><?php echo $user['lname'] ?></td>
								<td><?php echo $user['dateOfBirthday'] ?></td>
								<td><?php echo $user['tel'] ?></td>
								<td><?php echo $user['mobile'] ?></td>
								<td><?php echo $user['postalCode'] ?></td>
								<td><?php echo $user['nationalCode'] ?></td>
								<td><?php echo $user['email'] ?></td>
								<td><?php echo $user['homeAddress'] ?></td>
								<td><?php echo $user['workAddress'] ?></td>
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
