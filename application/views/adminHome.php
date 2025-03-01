<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>150</h3>

					<p>سفارش جدید</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>53<sup style="font-size: 20px">%</sup></h3>

					<p>افزایش امتیاز</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>44</h3>

					<p>کاربران ثبت شده</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>65</h3>

					<p>بازدید جدید</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row -->
	<div class="row">
		<section class="col-lg-12 col-md-12">
			<div class="box box-info">
				<div class="box-header">
					<i class="fa fa-info-circle"></i>
					<h3 class="box-title">گزارش کار </h3>
					<!-- tools box -->
					<div class="pull-left box-tools">
						<button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i
								class="fa fa-minus"></i>
						</button>
					</div>
					<!-- /. tools -->
				</div>
				<div class="box-body">
					اوضاع امنیتی تحت کنترل میباشد.
					
				</div>
			</div>
		</section>
	</div>
	<!-- Main row -->
	<div class="row">
		<!-- right col -->
		<section class="col-lg-7 connectedSortable">
			<!-- Custom tabs (Charts with tabs)-->
			<div class="nav-tabs-custom">
				<!-- Tabs within a box -->
				<ul class="nav nav-tabs pull-left">
					<li class="active"><a href="#revenue-chart" data-toggle="tab">نمودار</a></li>
					<li><a href="#sales-chart" data-toggle="tab">چارت</a></li>
					<li class="pull-right header"><i class="fa fa-inbox"></i> فروش</li>
				</ul>
				<div class="tab-content no-padding">
					<!-- Morris chart - Sales -->
					<div class="chart tab-pane active" id="revenue-chart"
						 style="position: relative; height: 300px;"></div>
					<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
				</div>
			</div>
			<!-- /.nav-tabs-custom -->

			<!-- Chat box -->
			<div class="box box-success">
				<div class="box-header">
					<i class="fa fa-comments-o"></i>

					<h3 class="box-title">گفتگو</h3>

					<div class="box-tools pull-left" data-toggle="tooltip" title="وضعیت">
						<div class="btn-group" data-toggle="btn-toggle">
							<button type="button" class="btn btn-default btn-sm active"><i
									class="fa fa-square text-green"></i>
							</button>
							<button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="box-body chat" id="chat-box">
					<!-- chat item -->
					<div class="item">
						<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user4-128x128.jpg"
							 alt="user image" class="online">

						<p class="message">
							<a href="#" class="name">
								<small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 2:15</small>
								نسترن
							</a>
							فایل مورد نظر شما
						</p>
						<div class="attachment">
							<h4>فایل ضمیمه</h4>

							<p class="filename">
								Theme-thumbnail-image.jpg
							</p>

							<div class="pull-left">
								<button type="button" class="btn btn-primary btn-sm btn-flat">دانلود</button>
							</div>
						</div>
						<!-- /.attachment -->
					</div>
					<!-- /.item -->
					<!-- chat item -->
					<div class="item">
						<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user3-128x128.jpg"
							 alt="user image" class="offline">

						<p class="message">
							<a href="#" class="name">
								<small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:15</small>
								نگین
							</a>
							ممنونم
						</p>
					</div>
					<!-- /.item -->
					<!-- chat item -->
					<div class="item">
						<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user2-160x160.jpg"
							 alt="user image" class="offline">

						<p class="message">
							<a href="#" class="name">
								<small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:30</small>
								محمد
							</a>
							با تشکر از شما
						</p>
					</div>
					<!-- /.item -->
				</div>
				<!-- /.chat -->
				<div class="box-footer">
					<div class="input-group">
						<input class="form-control" placeholder="Type message...">

						<div class="input-group-btn">
							<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box (chat box) -->

			<!-- TO DO List -->
			<div class="box box-primary">
				<div class="box-header">
					<i class="ion ion-clipboard"></i>

					<h3 class="box-title">لیست کارها</h3>

					<div class="box-tools pull-left">
						<ul class="pagination pagination-sm inline">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
					<ul class="todo-list">
						<li>
							<!-- drag handle -->
							<span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<!-- checkbox -->
							<input type="checkbox" value="">
							<!-- todo text -->
							<span class="text">ساخت قالب</span>
							<!-- Emphasis label -->
							<small class="label label-danger"><i class="fa fa-clock-o"></i> ۲ دقیقه</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<input type="checkbox" value="">
							<span class="text">بهینه سازی قالب سایت</span>
							<small class="label label-info"><i class="fa fa-clock-o"></i> ۴ ساعت</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<input type="checkbox" value="">
							<span class="text">ایجاد صفحه فرود سایت</span>
							<small class="label label-warning"><i class="fa fa-clock-o"></i> ۱ روز</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<input type="checkbox" value="">
							<span class="text">تبلیغات سایت</span>
							<small class="label label-success"><i class="fa fa-clock-o"></i> ۳ روز</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<input type="checkbox" value="">
							<span class="text">بررسی اعلان ها</span>
							<small class="label label-primary"><i class="fa fa-clock-o"></i> ۱ هفته</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
							<input type="checkbox" value="">
							<span class="text">طراحی سیستم جدید</span>
							<small class="label label-default"><i class="fa fa-clock-o"></i> ۲ ماه</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix no-border">
					<button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> جدید</button>
				</div>
			</div>
			<!-- /.box -->

			<!-- quick email widget -->
			<div class="box box-info">
				<div class="box-header">
					<i class="fa fa-envelope"></i>

					<h3 class="box-title">ایمیل</h3>
					<!-- tools box -->
					<div class="pull-left box-tools">
						<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
								title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
					<!-- /. tools -->
				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="emailto" placeholder="ایمیل">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" placeholder="موضوع">
						</div>
						<div>
                  <textarea class="textarea" placeholder="متن ایمیل"
							style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
					</form>
				</div>
				<div class="box-footer clearfix">
					<button type="button" class="pull-left btn btn-default" id="sendEmail">ارسال
						<i class="fa fa-arrow-circle-left"></i></button>
				</div>
			</div>

		</section>
		<!-- /.right col -->
		<!-- left col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-5 connectedSortable">

			<!-- Map box -->
			<div class="box box-solid bg-light-blue-gradient">
				<div class="box-header">
					<!-- tools box -->
					<div class="pull-left box-tools">
						<button type="button" class="btn btn-primary btn-sm daterange pull-left" data-toggle="tooltip"
								title="Date range">
							<i class="fa fa-calendar"></i></button>
						<button type="button" class="btn btn-primary btn-sm pull-left" data-widget="collapse"
								data-toggle="tooltip" title="Collapse" style="margin-left: 5px;">
							<i class="fa fa-minus"></i></button>
					</div>
					<!-- /. tools -->

					<i class="fa fa-map-marker"></i>

					<h3 class="box-title">
						بازدید ها
					</h3>
				</div>
				<div class="box-body">
					<div id="world-map" style="height: 250px; width: 100%;"></div>
				</div>
				<!-- /.box-body-->
				<div class="box-footer no-border">
					<div class="row">
						<div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
							<div id="sparkline-1"></div>
							<div class="knob-label">بازدید ها</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
							<div id="sparkline-2"></div>
							<div class="knob-label">آنلاین</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center">
							<div id="sparkline-3"></div>
							<div class="knob-label">فعال</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.box -->

			<!-- solid sales graph -->
			<div class="box box-solid bg-teal-gradient">
				<div class="box-header">
					<i class="fa fa-th"></i>

					<h3 class="box-title">نمودار فروش</h3>

					<div class="box-tools pull-left">
						<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i
								class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i
								class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<div class="box-body border-radius-none">
					<div class="chart" id="line-chart" style="height: 250px;"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer no-border">
					<div class="row">
						<div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
							<input type="text" class="knob" data-readonly="true" value="20" data-width="60"
								   data-height="60"
								   data-fgColor="#39CCCC">

							<div class="knob-label">سفارش ایمیلی</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
							<input type="text" class="knob" data-readonly="true" value="50" data-width="60"
								   data-height="60"
								   data-fgColor="#39CCCC">

							<div class="knob-label">سفارش آنلاین</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center">
							<input type="text" class="knob" data-readonly="true" value="30" data-width="60"
								   data-height="60"
								   data-fgColor="#39CCCC">

							<div class="knob-label">سفارش فیزیکی</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->

			<!-- Calendar -->
			<div class="box box-solid bg-green-gradient">
				<div class="box-header">
					<i class="fa fa-calendar"></i>

					<h3 class="box-title">تقویم</h3>
					<!-- tools box -->
					<div class="pull-left box-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
							<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bars"></i></button>
							<ul class="dropdown-menu pull-left" role="menu">
								<li><a href="#">رویداد تازه</a></li>
								<li><a href="#">حذف رویدادها</a></li>
								<li class="divider"></li>
								<li><a href="#">نمایش تقویم</a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
								class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i
								class="fa fa-times"></i>
						</button>
					</div>
					<!-- /. tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<!--The calendar -->
					<div id="calendar" style="width: 100%"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-black">
					<div class="row">
						<div class="col-sm-6">
							<!-- Progress bars -->
							<div class="clearfix">
								<span class="pull-right">نمایشگاه</span>
								<small class="pull-left">90%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
							</div>

							<div class="clearfix">
								<span class="pull-right">کمپین ۳۰ درصد</span>
								<small class="pull-left">70%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
							<div class="clearfix">
								<span class="pull-right">کمپین ایمیل</span>
								<small class="pull-left">60%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
							</div>

							<div class="clearfix">
								<span class="pull-right">کمپین تجارت الکترونیک</span>
								<small class="pull-left">40%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
							</div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.box -->

		</section>
		<!-- left col -->
	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
