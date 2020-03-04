<div class="card-deck mb-3 text-center">
	<?php foreach ($products as $pr): ?>
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h5 class="my-0 font-weight-normal"><?php echo $pr['title'] ?></h5>
			</div>
			<div class="card-body">
				<h3 class="card-title pricing-card-title"> <?php echo $pr['amountForSell'] ?> <small class="text-muted">
						تومان</small></h3>
				<ul class="list-unstyled mt-3 mb-4">
					<li><strong><?php echo $pr['secondaryTitr'] ?> </strong></li>
					<li><strong><?php echo $pr['shortDescription'] ?></strong></li>

				</ul>
				<button type="button" class="btn btn-lg btn-block btn-outline-primary"><a
						href="<?php echo base_url() . "index.php/FinancialController/product/" . $pr['id'] ?>">سفارش
						محصول</a></button>
			</div>
		</div>
	<?php endforeach; ?>


</div>
<br/>
<div class="row">

	<div>
	</div>

	<div class="row pl-5 ml-5 pr-5 mr-5" id="firstDoubleSlide">
		<!-- badan az lahaz seo tavanmandesh kon -->
		<div class="col-md-4">
			<div class="hoonamDoubleSlideImg">
				<img alt="صادکو" class="hoonamDoubleSlideLeftImage img-fluid "
					 src="https://saadco.co/assets/img/pr11.jpg"/>


			</div>
		</div>
		<div class="col-md-4">
			<div class="hoonamDoubleSlideSecondPart">
				<div class="d-flex flex-column align-items-center h-50 text-center mt-5 pt-5">
					<h5 class="hoonamDoubleSlideSecondPartTitle text-center" style="">
						آبگرمکن برقی مدل GAE-120 </h5>
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
				<img alt="محصولات صادکو" class="hoonamDoubleSlideRightImage img-fluid"
					 src="https://saadco.co/assets/img/pr11back.jpg"/>
			</div>
		</div>
	</div>

	<!--                              -->
	<hr/>
	<div class="row pl-5 ml-5 pr-5 mr-5" id="storySlide">
		<!-- badan az lahaz seo tavanmandesh kon -->
		<div class="col-md-4">
			<div class="hoonamDoubleSlideSecondPart">
				<div class="d-flex flex-column align-items-center h-50 text-center mt-5 pt-5">
					<h2 class="hoonamDoubleSlideSecondPartTitle text-right" style="direction:ltr;">
						صادکو
					</h2>
					<p class="hoonamDoubleSlideSecondPartDescription text-center">
						گروه صادکو پس از چندین دهه فعالیت در آبادانی و توسعه كشور عزیزمان ایران، تلاش برای افتخار آفرینی
						یك شركت معتبر با رعایت اخلاق حرفه ای از طریق:

						مدیریت و اجرای پروژه های ساخت
						فعالیت در ارتقاء فرهنگ مشاركت و همكاری و عضویت در كنسرسیوم ها و مشاركت در پروژه های EPCF-EPC
						مدیریت مهندسی و تامین و تدارك پروژه ها
						را دنبال نموده
						...
					</p> <!-- test -->
					<button class="hoonamDoubleSlideSecondPartBtn align-self-center mb-3 btn w-50 btn-info">
						جزئیات بیشتر...
					</button>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="hoonamDoubleSlideRightImg">
				<img alt="داستان صادکو" class=" hoonamDoubleSlideRightImage img-fluid card-img"
					 src="https://saadco.co/assets/img/story1.jpg"/>
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
	<hr/>
	<div class="row pl-5 ml-5 pr-5 mr-5">
		<div class="col-12">
			<!-- Start svg -->
			<div class="svg-wrapper">
				<svg enable-background="new 0 0 841.89 595.28" version="1.1" viewBox="0 0 841.89 595.28"
					 xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <svg class="map-border">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#map-border"></use>
						</svg>
					<svg class="map-sea">
						<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#map-sea"></use>
					</svg>
					<svg class="map-island">
						<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#map-island"></use>
					</svg>

					<!-- Start Province -->
					<a class="map-link" xlink:href="#khorasan-r">
						<svg class="map-province khorasan-r">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#khorasan-r"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#khorasan-j">
						<svg class="map-province khorasan-j">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#khorasan-j"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#kerman">
						<svg class="map-province kerman">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#kerman"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#azarbaijan-sh">
						<svg class="map-province azarbaijan-sh">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#azarbaijan-sh"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#azarbaijan-gh">
						<svg class="map-province azarbaijan-gh">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#azarbaijan-gh"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#ardebil">
						<svg class="map-province ardebil">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#ardebil"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#sistan">
						<svg class="map-province sistan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#sistan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#semnan">
						<svg class="map-province semnan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#semnan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#hormozgan">
						<svg class="map-province hormozgan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#hormozgan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#yazd">
						<svg class="map-province yazd">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#yazd"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#khorasan-sh">
						<svg class="map-province khorasan-sh">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#khorasan-sh"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#isfahan">
						<svg class="map-province isfahan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#isfahan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#fars">
						<svg class="map-province fars">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#fars"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#khoozestan">
						<svg class="map-province khoozestan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#khoozestan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#tehran">
						<svg class="map-province tehran">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#tehran"></use>
						</svg>
					</a>0
					<a class="map-link" xlink:href="#ghom">
						<svg class="map-province ghom">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#ghom"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#kermanshah">
						<svg class="map-province kermanshah">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#kermanshah"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#kordestan">
						<svg class="map-province kordestan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#kordestan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="<?php echo base_url('assets/'); ?>#zanjan">
						<svg class="map-province zanjan">
							<use xlink:href="svg/main-map.svg#zanjan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#gilan">
						<svg class="map-province gilan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#gilan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#lorestan">
						<svg class="map-province lorestan">
							<use xlink:href="<?php echo base_url('assets/'); ?>/main-map.svg#lorestan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#markazi">
						<svg class="map-province markazi">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#markazi"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#hamedan">
						<svg class="map-province hamedan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#hamedan"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#mazandaran">
						<svg class="map-province mazandaran">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#mazandaran"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#ilam">
						<svg class="map-province ilam">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#ilam"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#ghazvin">
						<svg class="map-province ghazvin">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#ghazvin"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#alborz">
						<svg class="map-province alborz">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#alborz"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#booshehr">
						<svg class="map-province booshehr">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#booshehr"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#kohkilooyeh">
						<svg class="map-province kohkilooyeh">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#kohkilooyeh"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#charmahal">
						<svg class="map-province charmahal">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#charmahal"></use>
						</svg>
					</a>
					<a class="map-link" xlink:href="#golestan">
						<svg class="map-province golestan">
							<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#golestan"></use>
						</svg>
					</a>
					<!-- End province -->

					<svg class="map-sea-names">
						<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#map-sea-names"></use>
					</svg>
					<svg class="map-province-names">
						<use xlink:href="<?php echo base_url('assets/'); ?>svg/main-map.svg#map-province-names"></use>
					</svg>
                    </svg>
				<!-- End svg -->`
			</div>
		</div>
	</div>

