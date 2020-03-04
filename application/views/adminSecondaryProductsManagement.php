<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">جدول داده ها مثال ۱</h3>
				</div>

				<?php if ($baseProductGroupId != 0): ?>
					<a href="<?php echo base_url() .
						"index.php/UserController/secondaryProductGroupForm/" . $baseProductGroupId ?>"
					   class="btn btn-success" style="margin-left:50px;float: left">افزودن دسته جدید</a>
				<?php endif; ?>

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>عنوان</th>
							<th>توضیحات</th>
							<th>دسته</th>
							<th>محصولات این زیر دسته</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($secondaryProductGroups as $secondaryGroups): ?>
							<tr>
								<td><?php echo $secondaryGroups['title'] ?></td>
								<td> <?php echo $secondaryGroups['description'] ?>    </td>
								<td> <?php echo $secondaryGroups['baseProductGroupId'] ?>    </td>
								<td><a href="<?php echo base_url() . "index.php/UserController/productsManagement/"
										. $secondaryGroups['id'] . '/' . $baseProductGroupId ?>">مشاهده</a></td>

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
