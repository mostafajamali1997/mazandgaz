<!DOCTYPE html>
<html dir="rtl" lang="fa">

<!--
Project Secret Name:LibraryCode
Project Administrator:Engineer Arsham Amirnezhad
Front-End(Bootstrap v4,jquery v3.4)
Programmer:Mostafa Jamali https://MostafaJamali.ir
Build By :Asre Ettelaat Hoonam Hooshmand Co.               -->

<head>
	<meta charset="utf-8"/>
	<meta content="width=1024" name="viewport">
	<link href="https://saadco.co/assets/bootstrapmin.css" rel="stylesheet">
	<link href="https://saadco.co/assets/css/map.css" rel="stylesheet"/>
	<title>وب سایت رسمی شرکت صادکو</title>
	<link href="https://saadco.co/assets/hoonamSiteCss.css" rel="stylesheet"/>
	<link href="https://saadco.co/assets/slick.css" rel="stylesheet"/>
	<script src="https://saadco.co/assets/jquerymin.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

	<script></script>
	<style>

	</style>

	<script src="https://saadco.co/assets/hoonamSiteInitialize.js"></script>
	<script></script>
</head>

<body>
<div class="container-fluid">

	<!-- Header Begins -->
	<div class="row sticky-top ">
		<header class="col-12" style="opacity: 0.8;">
			<!-- Top Bar Section Begins -->
			<section class="top-bar">
				<div class="main w-100">
					<!-- Language Area -->
					<div class="float-right lng">
						<a href=""><img class="h-75 w-75" src="https://saadco.co/assets/img/englandFlag.png"
										style="border-radius:90%;"></a>

						<a class="active" href="#"><img class="h-75" src="https://saadco.co/assets/img/iranFlag.png"
														style="border-radius:90%;"></a>

						<a href="/index.php/FactorController/"
						   class="fa fa-shopping-cart" style="color: #7FFF00;
    font-size: 34px;"></a>

						<a href="<?php echo base_url() . "index.php/FactorController/getUserFactors" ?>"
						   class="btn btn-warning" style="width:7rem;">فاکتورهای من
						</a>
					</div>
					<!-- Search Area -->
					<div class="form-inline float-right mt-2 " id="" onkeypress="">
						<input type="search" name="searchBtn" class="form-control form-control-sm w-50 h-50 mr-2"
							   placeholder="...">
						<input type="submit" name="searchSend" class="btn btn-sm "
							   style="width:2.3rem;OPACITY:1;background-image:url('https://saadco.co/assets/img/file.png');"
							   value="">


					</div>
				</div>
			</section>
			<!-- Top Bar Section Ends -->

			<!-- Head Content Begins -->
			<section class="head-content">
				<div class="main">
					<!-- Site Brand Area -->

					<a class="d-inline-flex justify-content-center site-brand" href="<?php echo base_url() ?>">
						<img alt="شرکت صادکو" class="site-logo " src="https://saadco.co/assets/img/mazandgaz.png">
					</a>

					<!-- Navigation Menu Area -->
					<button aria-controls="navbar-content" aria-expanded="false"
							class="navbar-toggler btn  btn-danger mr-5" data-target="#navbar-content"
							data-toggle="collapse" id="hoonamMenuBtn" style="opacity:0.8;margin-right:15rem;width:4.5rem;padding-top:8.7rem;background-color:#ee3439;transition: all .2s ease-in-out;
margin-bottom:3.2rem;">

						<div style="margin-right:0.5rem;margin-top:-2rem;position:absolute;">
							<div style="width:30px;height:2px;background-color:#DDD;"></div>
							<div style="width:30px;height:2px;background-color:#DDD;margin-top:5px;"></div>

							<div style="width:30px;height:2px;background-color:#DDD;margin-top:5px;"></div>
						</div>

					</button>
					<a class="site-brand" href="<?php echo base_url() ?>">
						<img alt="شرکت صادکو" class="mx-auto" src="https://saadco.co/assets/img/saadco.png"
							 style="position:absolute;left:-20.5rem;top:-3.5rem;">
					</a>
					<div class="collapse" id="navbar-content" style="
            left:auto;
            right:0;
            top: 0!important;
    left: 0;
    z-index: 2;
    width: 100vw;
    position: fixed;
    transition: all .5s;
    background-color: #DDD;
    font-size:30px;
  ;
    opacity:0.7;
">

						<ul class="navbar-nav" id="primary-menu">
							<li class="nav-item">
								<button type="button" id="collapseClose" class="close">&times;</button>

							</li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="<?php echo base_url() ?>">خانه</a></li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link"
								   href="<?php echo base_url() . "index.php/FinancialController/getAllProducts" ?>">محصولات</a>
							</li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="home.html">فروشگاه آنلاین</a></li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="home.html">گالری تصاویر</a></li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="home.html">اخبار</a></li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="home.html">تماس با ما</a></li>
							<li class="nav-item" id="">
								<a aria-current="page" class="nav-link" href="home.html">درباره ما</a></li>
						</ul>
					</div>
				</div>
			</section>
			<!-- Head Content Ends -->
		</header>
	</div>
	<div class="row">
		<div class="col-12">
		<div class="carousel slide" data-ride="carousel" id="hoonamCarousel">
			<ol class="carousel-indicators pb-n3">
				<li class="active" data-slide-to="5" data-target="#hoonamCarousel"></li>
				<li class="" data-slide-to="4" data-target="#hoonamCarousel"></li>
				<li class="" data-slide-to="3" data-target="#hoonamCarousel"></li>
				<li class="" data-slide-to="2" data-target="#hoonamCarousel"></li>
				<li class="" data-slide-to="1" data-target="#hoonamCarousel"></li>
				<li class="" data-slide-to="0" data-target="#hoonamCarousel"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img alt="صادکو" class="first-slide img-fluid justify-content-center"
						 src="https://saadco.co/assets/img/first-slide.jpg"/>
					<div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
						<h1>کارخانجات صادکو</h1>
						<p class="">
							گروه معظم صادکو، بزرگترین گروه صنعتی شمال کشور در حوزه محصولات گرمایشی و خانگی
						</p>
						<a class="btn btn-md btn-lg btn-light pb-n4" href="#" role="button">تور مجازی کارخانه </a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="مازندگاز" class="second-slide img-fluid justify-content-center" height=""
						 src="https://saadco.co/assets/img/fourth-slide.jpg" width=""/>
					<div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
						<h2>بهره گیری از متدهای صنعتی</h2>
						<p>
							گروه صادکو با بهره گیری از ده ها سال تجربه و کادری نوین درخدمت شماست.
						</p>
						<a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="صادکو" class="third-slide img-fluid" height=""
						 src="https://saadco.co/assets/img/third-slide.jpg" width=""/>
					<div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
						<h2>محصولات ما</h2>
						<p>
							ما در زمینه وسایل گرمایشی و خانگی محصولات خاصی را برای شما به ارمغان آورده ایم. </p>
						<a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="مازندگاز" class="fourth-slide img-fluid" height=""
						 src="https://saadco.co/assets/img/second-slide.jpg" width=""/>
					<div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
						<h2>عنوان اسلاید چهارم</h2>
						<p>
							متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید
						</p>
						<a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="صادکو" class="fifth-slide img-fluid" height=""
						 src="https://saadco.co/assets/img/fifth-slide.jpg" width=""/>
					<div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
						<h2>عنوان اسلاید پنجم</h2>
						<p>
							متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید
						</p>
						<a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" data-slide="prev" href="#hoonamCarousel" role="button">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" data-slide="next" href="#hoonamCarousel" role="button">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>
	</div>
	<div class="wrap"></div>
	<hr/>


	<br/>
