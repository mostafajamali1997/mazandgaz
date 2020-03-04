<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">مدیریت کارت گارنتی های صادرشده</h3>
				</div>

				<a href="<?php echo base_url() . "index.php/UserController/addWarrantyForm" ?>"
				   class="btn btn-success"
                   style="margin-left:50px;float: left">صدور گارانتی جدید</a>

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>محصول</th>
							<th>نام سرویس کار</th>
                            <th>کد گارانتی</th>
                            <th>تاریخ صدور</th>
                            <th>تاریخ انقضا</th>
                            <th>حساب کاربری مشتری</th>
                            <th>تصویرکارت</th>
                            <th>وضعیت گارانتی</th>



						</tr>
						</thead>
						<tbody>
						<?php echo form_open('UserController/showImage/');?>
						<?php foreach ($warrantyAndProductsTitle as $oneWarrantyCard): ?>
							<tr>
								<td><?php echo $oneWarrantyCard['title'] ?></td>
								<td> <?php echo $oneWarrantyCard['fname']." ".
												$oneWarrantyCard['lname']." - ".
												$oneWarrantyCard['mobile']; ?>    
												</td>
								<td>
										<?php echo $oneWarrantyCard['warranty_code'];?>
									</td>
									<td>
										<?php echo $oneWarrantyCard['issuance_regdate'];?>
									</td>
									<td>
										<?php echo $oneWarrantyCard['issuance_expiredate'];?>
									</td>
									<td>
										<?php 
										if($oneWarrantyCard['is_system_user'])
										{
											 echo '
											 <a target="_blank" href="'.base_url('UserController/userManagement/'.$oneWarrantyCard['system_user_username']).' ">مشاهده اطلاعات</a>
											 ';
										}
											 else
											 {
												echo '
												<a target="_blank" href="'.base_url('UserController/freeUsers/'.$oneWarrantyCard['free_customer_id']).' "> مشاهده اطلاعات| کاربرآزاد</a>
												';
											 }

										?>
									</td>
								<td>

								
								<?php echo form_hidden('av',$oneWarrantyCard['warranty_picture_fileaddress'] );//av=addressvalue
								?>
								<button 
								class="btn btn-primary">مشاهده</a>
								</td>
							
								<td>
									<?php if($oneWarrantyCard['warranty_status'])
									{
										 ?>
									<span class="btn btn-success">فعال</button>
									<?php
									}
										else
										{
											?>
									<span class="btn btn-danger">منقضی</span>
										<?php
										}
										?>
							
								
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
						<?php echo form_close();?>

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
