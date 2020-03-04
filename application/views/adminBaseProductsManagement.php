<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">جدول داده ها مثال ۱</h3>
				</div>

				<a href="<?php echo base_url() . "index.php/UserController/baseProductGroupForm" ?>"
				   class="btn btn-success"
				   style="margin-left:50px;float: left">افزودن دسته جدید</a>

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>عنوان</th>
							<th>توضیحات</th>
							<th>زیردسته ها</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($baseProductGroups as $baseProduct): ?>
							<tr>
								<td><?php echo $baseProduct['title'] ?></td>
								<td> <?php echo $baseProduct['description'] ?>    </td>
								<td>
									<a href="<? echo base_url() . "index.php/UserController/baseProductsGroupManagement2/"
										. $baseProduct['id'] ?>">زیردسته ها</a></td>

								<td><a href="" class="btn btn-primary">ویرایش</a></td>
								<td><a href="" class="btn btn-danger">حذف</a></td>
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
