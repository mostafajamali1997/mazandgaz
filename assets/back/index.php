<!DOCTYPE html>
<html dir="rtl" lang="fa">

<!--
Project Secret Name:LibraryCode
Project Administrator:Engineer Arsham Amirnezhad
Front-End(Bootstrap v4,jquery v3.4)
Programmer:Mostafa Jamali https://MostafaJamali.ir
Build By :Asre Ettelaat Hoonam Hooshmand Co.               -->

<head>
    <meta charset="utf-8" />
    <meta content="width=1024" name="viewport">
    <link href="bootstrapmin.css" rel="stylesheet">
    <link href="css/map.css" rel="stylesheet" />
    <title>وب سایت رسمی شرکت صادکو</title>
    <link href="hoonamSiteCss.css" rel="stylesheet" />
    <link href="slick.css" rel="stylesheet" />
    <script src="jquerymin.js"></script>
    <script></script>
    <style>

    </style>

    <script src="hoonamSiteInitialize.js"></script>
    <script></script>
</head>
<body>
<div class="container-fluid">

<!-- Header Begins -->
<div class="row sticky-top">
<header class="w-100 " style="opacity: 0.8;">
    <!-- Top Bar Section Begins -->
    <section class="top-bar">
        <div class="main w-100">
            <!-- Language Area -->
            <div class="float-right lng">
                <a href="#"><img class="h-75 w-75" src="img/englandFlag.png" style="border-radius:90%;"></a>

                <a class="active" href="#"><img class="h-75" src="img/iranFlag.png" style="border-radius:90%;"></a>
            </div>
            <!-- Search Area -->
            <div class="form-inline float-right mt-2 " id="" onkeypress="">
            <input type="search" name="searchBtn" class="form-control form-control-sm w-50 h-50 mr-2" placeholder="...">
                <input type="submit" name="searchSend" class="btn btn-sm " style="width:2.3rem;OPACITY:1;background-image:url('img/file.png');" value="">



            </div>
        </div>
    </section>
    <!-- Top Bar Section Ends -->

    <!-- Head Content Begins -->
    <section class="head-content">
        <div class="main">
            <!-- Site Brand Area -->

            <a class="d-inline-flex justify-content-center site-brand" href="home.html">
                <img alt="شرکت صادکو" class="site-logo " src="/img/mazandgaz.png">
            </a>

            <!-- Navigation Menu Area -->
            <button aria-controls="navbar-content" aria-expanded="false" class="navbar-toggler btn  btn-danger mr-5" data-target="#navbar-content" data-toggle="collapse" id="hoonamMenuBtn"  style="opacity:0.8;margin-right:15rem;width:4.5rem;padding-top:8.7rem;background-color:#ee3439;transition: all .2s ease-in-out;
margin-bottom:3.2rem;">

                <div style="margin-right:0.5rem;margin-top:-2rem;position:absolute;">
                    <div style="width:30px;height:2px;background-color:#DDD;"></div>
                    <div style="width:30px;height:2px;background-color:#DDD;margin-top:5px;"></div>

                    <div style="width:30px;height:2px;background-color:#DDD;margin-top:5px;"></div>
                </div>

            </button>
            <a class="site-brand" href="home.html">
                <img alt="شرکت صادکو" class="mx-auto" src="/img/saadco.png" style="position:absolute;left:-20.5rem;top:-3.5rem;">
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
                    <a aria-current="page" class="nav-link" href="home.html">خانه</a></li>
                <li class="nav-item" id="">
                    <a aria-current="page" class="nav-link" href="home.html">درباره ما</a></li>
                    <li class="nav-item" id="">
                        <a aria-current="page" class="nav-link"
                           href="https://saadco.co/webapp/index.php/FinancialController/getAllProducts">محصولات</a></li>
                <li class="nav-item" id="">
                    <a aria-current="page" class="nav-link" href="home.html">فروشگاه آنلاین</a></li>
                <li class="nav-item" id="">
                    <a aria-current="page" class="nav-link" href="home.html">گالری تصاویر</a></li>
                <li class="nav-item" id="">
                    <a aria-current="page" class="nav-link" href="home.html">اخبار</a></li>
                <li class="nav-item" id="">
                    <a aria-current="page" class="nav-link" href="home.html">تماس با ما</a></li>
            </ul>
        </div>
</div>
    </section>
    <!-- Head Content Ends -->
</header>
</div>
<div class="row">
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
                        <img alt="صادکو" class="first-slide img-fluid justify-content-center" src="img/first-slide.jpg" />
                        <div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
                            <h1>کارخانجات صادکو</h1>
                            <p class="">
                                گروه معظم صادکو، بزرگترین گروه صنعتی شمال کشور در حوزه محصولات گرمایشی و خانگی
                            </p>
                            <a class="btn btn-md btn-lg btn-light pb-n4" href="#" role="button">تور مجازی کارخانه </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="مازندگاز" class="second-slide img-fluid justify-content-center" height="" src="img/fourth-slide.jpg" width="" />
                        <div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
                            <h2>بهره گیری از متدهای صنعتی</h2>
                            <p>
                                گروه صادکو با بهره گیری از ده ها سال تجربه و کادری نوین درخدمت شماست.
                            </p>
                            <a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="صادکو" class="third-slide img-fluid" height="" src="img/third-slide.jpg" width="" />
                        <div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
                            <h2>محصولات ما</h2>
                            <p>
ما در زمینه وسایل گرمایشی و خانگی محصولات خاصی را برای شما به ارمغان آورده ایم.                            </p>
                            <a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="مازندگاز" class="fourth-slide img-fluid" height="" src="img/second-slide.jpg" width="" />
                        <div class="carousel-caption mt-2 bg-primary text-white font-weight-bold">
                            <h2>عنوان اسلاید چهارم</h2>
                            <p>
                                متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید متن اسلاید
                            </p>
                            <a class="btn btn-md btn-lg btn-light mt-n2" href="#" role="button">سفارش کالا</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="صادکو" class="fifth-slide img-fluid" height="" src="img/fifth-slide.jpg" width="" />
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
    <div class="wrap"></div>
    <hr />
    <div class="row mt-5" id="productsRow">
        <div class="container-fluid">
            <div class="card-deck mb-3 ">
                <div class="card mb-4 productsLI px-5">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">محصول پرطرفدار یک</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            $0 <small class="text-muted">/ ماه</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4 view overlay zoom">
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-outline-primary" type="button">
                            سفارش محصول
                        </button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm productsLI px-5">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">محصول پرطرفدار یک</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            $15 <small class="text-muted">/ ماه</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-primary" type="button">
                            مشاهده سایر محصولات این رده
                        </button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm productsLI px-5">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">محصول پرطرفدار یک</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            $29 <small class="text-muted">/ ماه</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                            <li><strong>شرح جزئیات 1 </strong></li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-primary" type="button">
                            ارتباط با ما
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br />

    <div class="row pl-5 ml-5 pr-5 mr-5" id="firstDoubleSlide">
        <!-- badan az lahaz seo tavanmandesh kon -->
        <div class="col-md-4">
            <div class="hoonamDoubleSlideImg">
                <img alt="صادکو" class="hoonamDoubleSlideLeftImage img-fluid " src="img/pr11.jpg" />


            </div>
        </div>
        <div class="col-md-4">
            <div class="hoonamDoubleSlideSecondPart">
                <div class="d-flex flex-column align-items-center h-50 text-center mt-5 pt-5">
                    <h5 class="hoonamDoubleSlideSecondPartTitle text-center" style="">
                        آبگرمکن برقی مدل GAE-120                    </h5>
                    <span class="hoonamDoubleSlideSecondPartDescription text-center">
                        تعداد المنت:<br>
                        یک عدد<br>
                        سایز لوله ورودی آب:<br>
                        4/3 اینچ<br>
                        سایز لوله خروجی آب:<br>
                        4/3 اینچ<br>
                        امکان تنظیم شعله:<br>
                        دارد<br>
                        امکان تنظیم دبی آب (شیر تنظیم دما):<br>
                        دارد<br>
                        ولوم ترموستات:<br>
                        دارد<br>

                    </span>
                    <button class="hoonamDoubleSlideSecondPartBtn align-self-center mb-3 btn w-50 btn-info">
                        جزئیات بیشتر...
                    </button>
                    <div class="d-inline">
                             <span class="material-icons hoonamDoubleSlideFirstImgNextBtn">
                                arrow_forward_ios
                            </span>
                        <span class="material-icons hoonamDoubleSlideFirstImgPrevBtn ">
                                arrow_back_ios
                            </span>


                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="hoonamDoubleSlideRightImg">
                <img alt="محصولات صادکو" class="hoonamDoubleSlideRightImage img-fluid" src="img/pr11back.jpg" />
            </div>
        </div>
    </div>

    <!--                              -->
    <hr />
    <div class="row pl-5 ml-5 pr-5 mr-5" id="storySlide">
        <!-- badan az lahaz seo tavanmandesh kon -->
        <div class="col-md-4">
            <div class="hoonamDoubleSlideSecondPart">
                <div class="d-flex flex-column align-items-center h-50 text-center mt-5 pt-5">
                    <h2 class="hoonamDoubleSlideSecondPartTitle text-right" style="direction:ltr;">
 صادکو
                    </h2>
                    <p class="hoonamDoubleSlideSecondPartDescription text-center">
                        گروه صادکو پس از چندین دهه فعالیت در آبادانی و توسعه كشور عزیزمان ایران، تلاش برای افتخار آفرینی یك شركت معتبر با رعایت اخلاق حرفه ای از طریق:

                        مدیریت و اجرای پروژه های ساخت
                        فعالیت در ارتقاء فرهنگ مشاركت و همكاری و عضویت در كنسرسیوم ها و مشاركت در پروژه های EPCF-EPC
                        مدیریت مهندسی و تامین و تدارك پروژه ها
                        را دنبال نموده
                    ...
                    </p>
                    <button class="hoonamDoubleSlideSecondPartBtn align-self-center mb-3 btn w-50 btn-info">
                        جزئیات بیشتر...
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="hoonamDoubleSlideRightImg">
                <img alt="داستان صادکو" class=" hoonamDoubleSlideRightImage img-fluid card-img" src="img/story1.jpg" />
                <div class="d-inline">
                        <span class="material-icons hoonamDoubleSlideFirstImgNextBtn">
                            arrow_forward_ios
                        </span>
                    <span class="material-icons hoonamDoubleSlideFirstImgPrevBtn">
                            arrow_back_ios
                        </span>

                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row pl-5 ml-5 pr-5 mr-5">
        <div class="col">
            <!-- Start svg -->
            <div class="svg-wrapper">
                <svg enable-background="new 0 0 841.89 595.28" version="1.1" viewBox="0 0 841.89 595.28" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <svg class="map-border">
                            <use xlink:href="svg/main-map.svg#map-border"></use>
                        </svg>
                    <svg class="map-sea">
                            <use xlink:href="svg/main-map.svg#map-sea"></use>
                        </svg>
                    <svg class="map-island">
                            <use xlink:href="svg/main-map.svg#map-island"></use>
                        </svg>

                    <!-- Start Province -->
                    <a class="map-link" xlink:href="#khorasan-r">
                        <svg class="map-province khorasan-r">
                                <use xlink:href="svg/main-map.svg#khorasan-r"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#khorasan-j">
                        <svg class="map-province khorasan-j">
                                <use xlink:href="svg/main-map.svg#khorasan-j"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#kerman">
                        <svg class="map-province kerman">
                                <use xlink:href="svg/main-map.svg#kerman"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#azarbaijan-sh">
                        <svg class="map-province azarbaijan-sh">
                                <use xlink:href="svg/main-map.svg#azarbaijan-sh"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#azarbaijan-gh">
                        <svg class="map-province azarbaijan-gh">
                                <use xlink:href="svg/main-map.svg#azarbaijan-gh"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#ardebil">
                        <svg class="map-province ardebil">
                                <use xlink:href="svg/main-map.svg#ardebil"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#sistan">
                        <svg class="map-province sistan">
                                <use xlink:href="svg/main-map.svg#sistan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#semnan">
                        <svg class="map-province semnan">
                                <use xlink:href="svg/main-map.svg#semnan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#hormozgan">
                        <svg class="map-province hormozgan">
                                <use xlink:href="svg/main-map.svg#hormozgan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#yazd">
                        <svg class="map-province yazd">
                                <use xlink:href="svg/main-map.svg#yazd"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#khorasan-sh">
                        <svg class="map-province khorasan-sh">
                                <use xlink:href="svg/main-map.svg#khorasan-sh"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#isfahan">
                        <svg class="map-province isfahan">
                                <use xlink:href="svg/main-map.svg#isfahan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#fars">
                        <svg class="map-province fars">
                                <use xlink:href="svg/main-map.svg#fars"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#khoozestan">
                        <svg class="map-province khoozestan">
                                <use xlink:href="svg/main-map.svg#khoozestan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#tehran">
                        <svg class="map-province tehran">
                                <use xlink:href="svg/main-map.svg#tehran"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#ghom">
                        <svg class="map-province ghom">
                                <use xlink:href="svg/main-map.svg#ghom"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#kermanshah">
                        <svg class="map-province kermanshah">
                                <use xlink:href="svg/main-map.svg#kermanshah"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#kordestan">
                        <svg class="map-province kordestan">
                                <use xlink:href="svg/main-map.svg#kordestan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#zanjan">
                        <svg class="map-province zanjan">
                                <use xlink:href="svg/main-map.svg#zanjan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#gilan">
                        <svg class="map-province gilan">
                                <use xlink:href="svg/main-map.svg#gilan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#lorestan">
                        <svg class="map-province lorestan">
                                <use xlink:href="svg/main-map.svg#lorestan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#markazi">
                        <svg class="map-province markazi">
                                <use xlink:href="svg/main-map.svg#markazi"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#hamedan">
                        <svg class="map-province hamedan">
                                <use xlink:href="svg/main-map.svg#hamedan"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#mazandaran">
                        <svg class="map-province mazandaran">
                                <use xlink:href="svg/main-map.svg#mazandaran"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#ilam">
                        <svg class="map-province ilam">
                                <use xlink:href="svg/main-map.svg#ilam"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#ghazvin">
                        <svg class="map-province ghazvin">
                                <use xlink:href="svg/main-map.svg#ghazvin"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#alborz">
                        <svg class="map-province alborz">
                                <use xlink:href="svg/main-map.svg#alborz"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#booshehr">
                        <svg class="map-province booshehr">
                                <use xlink:href="svg/main-map.svg#booshehr"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#kohkilooyeh">
                        <svg class="map-province kohkilooyeh">
                                <use xlink:href="svg/main-map.svg#kohkilooyeh"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#charmahal">
                        <svg class="map-province charmahal">
                                <use xlink:href="svg/main-map.svg#charmahal"></use>
                            </svg>
                    </a>
                    <a class="map-link" xlink:href="#golestan">
                        <svg class="map-province golestan">
                                <use xlink:href="svg/main-map.svg#golestan"></use>
                            </svg>
                    </a>
                    <!-- End province -->

                    <svg class="map-sea-names">
                            <use xlink:href="svg/main-map.svg#map-sea-names"></use>
                        </svg>
                    <svg class="map-province-names">
                            <use xlink:href="svg/main-map.svg#map-province-names"></use>
                        </svg>
                    </svg>
                <!-- End svg -->`
            </div>
        </div>
    </div>

    <div class="row card-columns  h-50" style="font-size:14px;">
        <div class="col card mr-2" style="">
            <div class="">
                <div class="col">
                    <img alt="اخبار صادو" class="img-fluid" src="img/img_mountain_dark.jpg" />
                </div>
                <div class="col-10">
                    <div class="card-body">
                        <h5 class="card-title">8 متریال مطرح در صنعت ایران</h5>
                        <p class="card-text">
                            امروزه در بازار و صنعت ایران متریال های مختلفی وجود دارد که صاحبان پروژها به فراخور پروژه ها به سمت آنان جذب خواهند شد اما 8 متریال مطرح در این حوزه عبارتست از ...
                        </p>
                        <p class="card-text">
                            <small class="text-muted">آخرین بروز رسانی در سه روز پیش</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col card mr-2" style="">
            <div class="">
                <div class="col">
                    <img alt="اخبار صادو" class="img-fluid" src="img/img_mountain_dark.jpg" />
                </div>
                <div class="col-10">
                    <div class="card-body">
                        <h5 class="card-title">8 متریال مطرح در صنعت ایران</h5>
                        <p class="card-text">
                            امروزه در بازار و صنعت ایران متریال های مختلفی وجود دارد که صاحبان پروژها به فراخور پروژه ها به سمت آنان جذب خواهند شد اما 8 متریال مطرح در این حوزه عبارتست از ...
                        </p>
                        <p class="card-text">
                            <small class="text-muted">آخرین بروز رسانی در سه روز پیش</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col card" style="">
            <div class="">
                <div class="col">
                    <img alt="اخبار صادو" class="img-fluid" src="img/img_mountain_dark.jpg" />
                </div>
                <div class="col-10">
                    <div class="card-body">
                        <h5 class="card-title">8 متریال مطرح در صنعت ایران</h5>
                        <p class="card-text">
                            امروزه در بازار و صنعت ایران متریال های مختلفی وجود دارد که صاحبان پروژها به فراخور پروژه ها به سمت آنان جذب خواهند شد اما 8 متریال مطرح در این حوزه عبارتست از ...
                        </p>
                        <p class="card-text">

                            <small class="text-muted">آخرین بروز رسانی در سه روز پیش</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 flex-column font-weight-bolder" id="hoonamFooter" style="font-size:13px;">
            <div class="row">
                <div class="col-sm-4 text-white">
                    <h5 class="mt-2">پنل کاربری</h5>
                    <h6>برای ورود سریع ، اطلاعات خود را وارد کنید</h6>
                    <form class="form-group">
                        <label for="yourUsername">نام کاربری</label>
                        <input class="form-control" id="yourUsername" type="text" />
                        <label for="yourPassword">گذرواژه </label>
                        <input class="form-control" id="yourPassword" type="password" />
                        <button class="btn btn-md btn-success mt-2 w-50 mr-auto">
                            ورود
                        </button>
                    </form>
                    <h6 class="mt-2">خبرنامه</h6>
                    <h6>
                        جهت دریافت بروزترین خبرها و جدیدترین تخفیف ها و آفرهاایمیل خود را در کادر زیر ثبت کنید
                    </h6>
                    <form class="form-group">
                        <label for="yourEmail">ایمیلتون</label>
                        <input class="form-control" id="yourEmail" type="text" />
                        <button class="btn btn-md btn-success mt-2 w-50 mr-auto">
                            منو تو خبرنامه عضو کن
                        </button>
                    </form>

                    <i id="goUpBtn">
                        <i class="material-icons md-48">
                            arrow_upward
                        </i>
                    </i>

                    <!-- <div class="hoonamSiteLogo"></div>
            <div class="hoonamSiteLogo"></div>
            <div class="hoonamSiteLogo"></div>
    -->
                </div>
                <div class="col-sm-4 text-white">
                    <h6 class="mt-2">فروش ویژه</h6>

                    <h6>کلینیک ساختمانی</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <h6>محصول یک</h6>
                            </a>
                            <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <h6>محصول دو</h6>
                            </a>
                            <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                        </li>
                        <li class="nav-item font-weight-bolder">
                            <a class="nav-link" href="#">
                                <h6>محصول یک</h6>
                            </a>
                            <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                        </li>
                    </ul>

                    <h6>لوازم آشپزخانه</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <h6>محصول یک</h6>
                            </a>
                            <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <h6>محصول دو</h6>
                            </a>
                            <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 text-white">
                    <h5 class="mt-2">درباره ما</h5>
                    <span class="h6">
                        گروه صادکو پس از چندین دهه فعالیت در آبادانی و توسعه كشور عزیزمان ایران، تلاش برای افتخار آفرینی یك شركت معتبر با رعایت اخلاق حرفه ای از طریق: مدیریت و اجرای پروژه های ساخت فعالیت در ارتقاء فرهنگ مشاركت و همكاری و عضویت در كنسرسیوم ها و مشاركت در پروژه های EPCF-EPC مدیریت مهندسی و تامین و تدارك پروژه ها را دنبال نموده ...
                    </span>
                    <h5 class="mt-2">نشانی ما</h5>
                    <h6 class="font-weight-bold">
                        مازندران ،کلانشهر ساری،میدان خزر جاده فرح آباد
                    </h6>
                    <h5 class="mt-2">ایمیل</h5>
                    <p>info@sadco.com</p>
                    <p>sales@sadco.com</p>
                    <p>company@sadco.com</p>
                        <h4>محصولات گازسوز</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <h6>محصول یک</h6>
                                </a>
                                <p class="display-6">توضیحات توضیحات توضیحات توضیحات</p>
                            </li>
                        </ul>
                </div>

            </div>
            <div class="row">



            </div>
        </div>
    </div>
    <div class="wrap"></div>
    <h4 class="text-center w-100">
        <a class="hoonamFooterLink" href="">طراحی و برنامه نویسی وب اپلیکیشن توسط شرکت هونام هوشمند
        </a>
    </h4>
</div>
<script src="bootstrapmin.js"></script>
<script src="popper.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</body>

</html>