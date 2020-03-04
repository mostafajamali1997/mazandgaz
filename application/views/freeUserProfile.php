<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">پروفایل کاربران آزاد | صادکو</h3>
				</div>

				<!--<a href="<?php echo base_url() . "index.php/UserController/baseProductGroupForm" ?>"
				   class="btn btn-success"
                   style="margin-left:50px;float: left">افزودن دسته جدید</a>
                     -->

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>نام</th>
							<th>نام خانوادگی</th>
                            <th>شماره تماس</th>
                            <th>آدرس</th>

                            <th>کدپستی</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($freeCustomers as $freeCustomer): ?>
							<tr>
								
								<td> <?php echo $freeCustomer['fname'];?>
							
												</td>
								<td>
                                <?php echo $freeCustomer['lname'];?>
									</td>
									<td>
                                    <?php echo $freeCustomer['phone'];?>
									</td>
									<td>
										<?php echo $freeCustomer['address'];?>
									</td>
									<td>
                                    <?php echo $freeCustomer['postalcode'];?>
									</td>

								
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
