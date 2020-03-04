<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>صادکو | کنترل پنل مدیریت</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/adminTemplate/dist/css/bootstrap-theme.css'); ?>">
	<!-- Bootstrap rtl -->
	<link rel="stylesheet" href="<?php echo base_url('assets/adminTemplate/dist/css/rtl.css'); ?>">
	<!-- persian Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dateTimePicker/css/persian-datepicker-0.4.5.min'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/adminTemplate/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/adminTemplate/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/adminTemplate/dist/css/AdminLTE.css'); ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/adminTemplate/dist/css/skins/_all-skins.min.css'); ?>">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url('assets/adminTemplate/bower_components/morris.js/morris.css'); ?>">
	<!-- jvectormap -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/adminTemplate/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
	<!-- Daterange picker -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/adminTemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet"
		  href="<?php echo base_url('assets/adminTemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo base_url() . "index.php/UserController/usersPanel" ?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini">پنل</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>


			<!-- Delete This after download -->
			<a href="https://github.com/hosseinizadeh/AdminLTE_Persian" class="btn hidden-xs"
			   style="margin:6px 100px;padding:9px 50px;background-color:#d61577;border-color:#ad0b5d;font-weight:bold;color:#FFF">SaadCo</a>
			<!-- End Delete-->


			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->
					<li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-envelope-o"></i>
							<span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">۴ پیام خوانده نشده</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li><!-- start message -->
										<a href="#">
											<div class="pull-right">
												<img
													src="<?php echo base_url('assets/adminTemplate'); ?>/dist/img/user2-160x160.jpg"
													class="img-circle" alt="User Image">
											</div>
											<h4>
												علیرضا
												<small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
											</h4>
											<p>متن پیام</p>
										</a>
									</li>
									<!-- end message -->
									<li>
										<a href="#">
											<div class="pull-right">
												<img
													src="<?php echo base_url('assets/adminTemplate'); ?>/dist/img/user3-128x128.jpg"
													class="img-circle" alt="User Image">
											</div>
											<h4>
												نگین
												<small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
											</h4>
											<p>متن پیام</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-right">
												<img
													src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user4-128x128.jpg"
													class="img-circle" alt="User Image">
											</div>
											<h4>
												نسترن
												<small><i class="fa fa-clock-o"></i> امروز</small>
											</h4>
											<p>متن پیام</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-right">
												<img
													src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user3-128x128.jpg"
													class="img-circle" alt="User Image">
											</div>
											<h4>
												نگین
												<small><i class="fa fa-clock-o"></i> دیروز</small>
											</h4>
											<p>متن پیام</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-right">
												<img
													src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user4-128x128.jpg"
													class="img-circle" alt="User Image">
											</div>
											<h4>
												نسترن
												<small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
											</h4>
											<p>متن پیام</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
						</ul>
					</li>
					<!-- Notifications: style can be found in dropdown.less -->
					<li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning">۱۰</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">۱۰ اعلان جدید</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="#">
											<i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">نمایش همه</a></li>
						</ul>
					</li>
					<!-- Tasks: style can be found in dropdown.less -->
					<li class="dropdown tasks-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-flag-o"></i>
							<span class="label label-danger">۹</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">۹ کار برای انجام دارید</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li><!-- Task item -->
										<a href="#">
											<h3>
												ساخت دکمه
												<small class="pull-left">20%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%"
													 role="progressbar"
													 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% تکمیل شده</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												ساخت محصول جدید
												<small class="pull-left">40%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-green" style="width: 40%"
													 role="progressbar"
													 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">40% تکمیل شده</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												تبلیغات
												<small class="pull-left">60%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-red" style="width: 60%"
													 role="progressbar"
													 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">60% تکمیل شده</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												ساخت صفحه فرود
												<small class="pull-left">80%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-yellow" style="width: 80%"
													 role="progressbar"
													 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">80% تکمیل شده</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
								</ul>
							</li>
							<li class="footer">
								<a href="#">نمایش همه</a>
							</li>
						</ul>
					</li>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user2-160x160.jpg"
								 class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo @$userFullName; ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user2-160x160.jpg"
									 class="img-circle" alt="User Image">

								<p>
									<?php echo @$userFullName; ?>
									<small><?php echo @$userGroupName; ?></small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<a href="#">صفحه من</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">فروش</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">دوستان</a>
									</div>
								</div>
								<!-- /.row -->
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">پروفایل</a>
								</div>
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">خروج</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- right side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-right image">
					<img src="<?php echo base_url('assets/adminTemplate/'); ?>dist/img/user2-160x160.jpg"
						 class="img-circle" alt="User Image">
				</div>
				<div class="pull-right info">
					<p><?php echo @$userFullName; ?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
				</div>
			</div>
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="جستجو">
					<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">منو</li>
				<li class="active treeview">
					<a href="#">
						<i class="fa fa-users"></i> <span>کاربران</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="<?php echo site_url('UserController/'); ?>userManagement"><i
									class="fa fa-user"></i> مدیریت کاربران</a></li>
						<li class="active"><a href="<?php echo site_url('UserController/'); ?>userPermissions"><i
									class="fa  fa-object-group"></i> مدیریت سطوح دسترسی کاربران</a></li>
						<li><a href="index2.html"><i class="fa fa-user-plus"></i> ثبت نام کاربر جدید</a></li>

					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa  fa-truck"></i>
						<span>محصولات</span>
						<span class="pull-left-container">
              <span class="label label-primary pull-left">4</span>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo site_url('UserController/productsManagement/0/0'); ?>"><i
									class="fa fa-shopping-cart"></i> مدیریت محصولات</a></li>
									<li><a href="<?php echo site_url('UserController/warrantyManagement'); ?>"><i
									class="fa fa-ambulance"></i> مدیریت گارانتی ها</a></li>
						<li><a href="<?php echo site_url('UserController/productsManagement'); ?>discountsManagement"><i
									class="fa fa-star"></i> مدیریت تحفیف ها</a></li>

						<li><a href="<?php echo site_url('UserController/addProductForm') ?>"><i
									class="fa  fa-cart-plus"></i>افزودن محصول</a></li>
						<li><a href="<?php echo base_url() . "index.php/UserController/baseProductsGroupManagement" ?>"><i
									class="fa  fa-list"></i> مدیریت دسته های محصولات</a></li>
						<li>
							<a href="<?php echo base_url() . "index.php/UserController/baseProductsGroupManagement2/0" ?>"><i
									class="fa  fa-outdent"></i> مدیریت زیردسته های محصولات</a></li>
					</ul>
				</li>
				<li>
					<a href="pages/widgets.html">
						<i class="fa fa-th"></i> <span> سفارشات</span>
						<span class="pull-left-container">
              <small class="label pull-left bg-green"> ۲۰+</small>
            </span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-file"></i>
						<span>فاکتورها</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo site_url('UserController/factorsManagement'); ?>"><i
									class="fa fa-file-text"></i>مدیریت فاکتورها</a></li>
						<li><a href="pages/charts/morris.html"><i class="fa fa-plus"></i>افزودن فاکتور</a></li>
						<li><a href="pages/charts/flot.html"><i class="fa fa-remove"></i>ابطال فاکتور</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-laptop"></i>
						<span>امور مالی</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> مدیریت پرداختی ها</a></li>
						<li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> مشاهده آخرین پرداختی ها</a>
						</li>
						<li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i>پرداختی های ناموفق</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-newspaper-o"></i> <span>اطلاع رسانی</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="pages/forms/general.html"><i class="fa  fa-hacker-news"></i> مدیریت مطالب سایت</a>
						</li>
						<li><a href="pages/forms/advanced.html"><i class="fa  fa-info"></i> مدیریت نوتیفیکشن ها</a></li>
						<li><a href="pages/forms/editors.html"><i class="fa  fa-inbox"></i> مدیریت ایمیل ها</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-table"></i> <span>پشتیبانی</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo site_url('UserController/ticketsManager'); ?>"><i class="fa fa-circle-o"></i> مدیریت تیکت ها</a></li>
						<li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> تیکت های در انتظار</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder"></i> <span>امنیت سایبری</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> مدیریت امنیت</a></li>
						<li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> تعیین سطح امنیتی</a>
						</li>
						<li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> اعلان وضعیت اضطراری</a>
						</li>
						<li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> گزارش جامع امنیتی و
								رخدادی</a></li>
						<li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> مسدود سازی گروهی
								کاربران</a></li>
						<li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> مسدود سازی کاربران</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-share"></i> <span>پنل هونام هوشمند</span>
						<span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li class="treeview">
							<a href="#"><i class="fa fa-circle-o"></i> پشتیبانی
								<span class="pull-left-container">
                  <i class="fa fa-angle-right pull-left"></i>
                </span>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o"></i> پشتبانی آموزشی </a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> پشتبانی فنی </a></li>
								<li class="treeview">
									<a href="#"><i class="fa fa-circle-o"></i> پشتیبانی امنیتی و فوری

									</a>

								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>مستندات</span></a></li>
				<li class="header">برچسب ها</li>
				<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>مهم</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>هشدار</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>اطلاعات</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				مرکز فرماندهی
				<small>کنترل پنل</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
				<li class="active">مرکز فرماندهی</li>
			</ol>
		</section>


		<?
