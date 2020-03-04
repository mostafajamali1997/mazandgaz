<?php
$this->load->helper('form');
$this->load->helper('captcha');
$this->load->library('form_validation');

$form_open_attributes = array('class' => 'form_group', 'id' => 'register_form');
$submit_input_data = array('name' => 'submit', 'class' => '‌', 'id' => 'submit', 'value' => 'ارسال اطلاعات و ثبت نام');//For Security

$captcha_data = array(
	'word' => rand(12345, 50000),
	'img_path' => './captcha/',
	'img_url' => 'https://saadco.co/captcha/',
	'img_width' => '130',
	'img_height' => 30,
	'expiration' => 7200,
	'word_length' => 8,
	'font_size' => 16,
	'img_id' => 'Imageid',
	'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

// White background and border, black text and red grid
	'colors' => array(
		'background' => array(255, 255, 255),
		'border' => array(255, 255, 255),
		'text' => array(0, 0, 0),
		'grid' => array(255, 40, 40)
	)
);
$captchaOfPage = create_captcha($captcha_data);
$captchaDatabaseData = array(
	'captcha_time' => time(),
	'ip_address' => $this->input->ip_address(),
	'word' => $captcha_data['word']

);
$captcha_insert_query = $this->db->insert_string('captcha', $captchaDatabaseData);
$this->db->query($captcha_insert_query);
////////////////////////////////////UI////////////////////////////////
/// ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
	<title>ثبت نام :: صادکو</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png"
		  href="<?php echo base_url('assets/loginTemplateFiles/images/icons/favicon.ico'); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/animate/animate.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/css-hamburgers/hamburgers.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/animsition/css/animsition.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/select2/select2.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url('assets/loginTemplateFiles/vendor/daterangepicker/daterangepicker.css'); ?>'">
	<!--===============================================================================================-->
	<link href="<?php echo base_url('assets/dateTimePicker/kendo.common.min.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/dateTimePicker/kendo.default.min.css'); ?>" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginTemplateFiles/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginTemplateFiles/css/main.css'); ?>">
	<script src="https://saadco.co/jquerymin.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/dateTimePicker/JalaliDate.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/HijriDate.js'); ?>"></script>

	<script src="<?php echo base_url('assets/dateTimePicker/kendo.web.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/kendo.web.js'); ?>"></script>

	<script src="<?php echo base_url('assets/dateTimePicker/fa-IR.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/kendo.calendar.fa.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/kendo.datepicker.fa.js'); ?>"></script>

	<script src="<?php echo base_url('assets/dateTimePicker/ar-SA.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/kendo.calendar.ar.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dateTimePicker/kendo.datepicker.ar.js'); ?>"></script>

	<script>
		$(function () {
			$("#Resellers").hide("fast").one();
			$("#serviceWorker").hide("fast").one();
		});

		function handyCareerOptionsJsFunction() {

			if ($("#handyCareerOptions").val() == 'serviceWorker') {
				$("#Resellers").hide("slow");
				$("#serviceWorker").show("slow");
			} else if ($("#handyCareerOptions").val() == 'Customers') {
				$("#Resellers").hide("slow");
				$("#serviceWorker").hide("slow");
			} else {
				$("#serviceWorker").hide("slow");
				$("#Resellers").show("slow");

			}
		}
	</script>
	<style>
		@font-face {
			font-family: 'Vazir';
			src: url('https://saadco.co/Vazir.woff') format('woff');
			font-weight: normal;
			font-style: normal;
		}
	</style>
</head>
<body style="background-color: #999999;font-family:'Vazir'!important;">
<div class="limiter">
	<div class="container-login100">
		<div class="login100-more"
			 style="background-image: url('<?php echo base_url('assets/loginTemplateFiles/images/bg-01.jpg'); ?>');"></div>

		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			<div class="text-box">
				<div class="validation_errors" style="color:red;font-weight: bolder;">
					<?php echo validation_errors();
					echo @$usernameDuplicate;//az controller besh pas mishe $data
					?></div>
				<?php echo form_open('UserController/register', $form_open_attributes); ?><br/>
				<span class="login100-form-title p-b-59 text-center">
						ثبت نام
					</span>

				<div class="wrap-input100 validate-input" data-validate="نام الزامی است">
					<span class="label-input100">نام کوچک</span>
					<input class="input100" type="text" name="fname">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="نام بزرگ الزامی است">
					<span class="label-input100">نام بزرگ</span>
					<input class="input100" type="text" name="lname">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="پست الکترونیک الزامی است">
					<span class="label-input100">پست الکترونیک</span>
					<input class="input100" type="email" name="email" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="نام کاربری الزامی است">
					<span class="label-input100">نام کاربری </span>
					<input class="input100" type="text" name="username" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="گذرواژه الزامی است">
					<span class="label-input100">گذرواژه</span>
					<input class="input100" type="password" name="password" placeholder="*************">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="تکرار گذرواژه الزامی است">
					<span class="label-input100">تکرار گذرواژه</span>
					<input class="input100" type="password" name="repassword" placeholder="*************">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate=" تاریخ تولدالزامی است">
					<span class="label-input100">تاریخ تولد</span>
					<input name="dateOfBirthday" id="datepickerShamsiBirth" value="" style="width:150px;"/>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="آدرس منزل الزامی است">
					<span class="label-input100">آدرس منزل</span>
					<input class="input100" type="text" name="homeAddress">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="آدرس محل کار الزامی است">
					<span class="label-input100">آدرس محل کار</span>
					<input class="input100" type="text" name="workAddress">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="تلفن ثابت الزامی است">
					<span class="label-input100">تلفن ثابت</span>
					<input class="input100 -phone" type="number" name="tel">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="تلفن همراه الزامی می باشد">
					<span class="label-input100">تلفن همراه</span>
					<input class="input100 -mobile-phone" type="number" name="mobile">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="کد ملی الزامی می باشد">
					<span class="label-input100">کد ملی </span>
					<input class="input100 -code" type="number" name="nationalCode">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="کد پستی الزامی است">
					<span class="label-input100">کد پستی </span>
					<input class="input100 -code" type="number" name="postalCode">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="کد شبا الزامی می باشد">
					<span class="label-input100">کد شبا </span>
					<input class="input100 -code" type="text" name="sheba">
				</div>
				<div class="input-group">
					<div class="input-group-prepend mt-2">
						<label class="input-group-text" for="handyCareerOptions">نوع کاربری شما</label>
					</div>
					<select name="handyCareerOptions" id="handyCareerOptions" class="custom-select mr-3 w-50 "
							onChange="handyCareerOptionsJsFunction()">
						<option value="Customers" selected="selected">مشتری عادی</option>
						<option value="serviceWorker">سرویس کار</option>
						<option value="Resellers">نماینده فروش</option>
					</select>

				</div>
				<br/>
				<div class="wrap">
					<div id="serviceWorker" class="login100">
						<div class="wrap-input100 validate-input" data-validate=" زمینه کاری  الزامی است">
							<span class="label-input100">زمینه کاری</span>
							<input class="input100" type="text" name="workingField">
							<span class="focus-input100"></span>
						</div>
						<div id="datepickerforstart" class="k-content">
							<div style="vertical-align: top; display: inline-block;">
								زمان آغاز همکاری <input name="dateOfStartCooperation" id="datepickerShamsi" value=""
														style="width:150px;"/><br/><br/>
								زمان پایان همکاری<input name="dateOfEndCooperation" id="datepickerShamsi2" value=""
														style="width:150px;"/><br/><br/>

							</div>
						</div>


					</div>
				</div>

				<div class="wrap">
					<div id="Resellers" class="login100">
						<div class="wrap-input100 validate-input" data-validate=" کد نمایندگی اجباری است">
							<span class="label-input100">کد نمایندگی</span>
							<input class="input100" type="text" name="resellerCode">
							<span class="focus-input100"></span>
						</div>
						<div id="datepickerforstart" class="k-content">
							<div style="vertical-align: top; display: inline-block;">
								زمان آغاز همکاری<input name="dateOfStartCooperationRes" id="datepickerShamsiRes"
													   value="" style="width:150px;"/><br/><br/>
								زمان پایان همکاری<input name="dateOfEndCooperationRes" id="datepickerShamsiRes2"
														value="" style="width:150px;"/><br/><br/>
							</div>
						</div>


					</div>
				</div>
				<div class="wrap-input100 validate-input" data-validate="کد امنیتی الزامی است">
					<span class="label-input100">کد امنیتی </span>

					<span class="label-input100">
                    <?
					echo $captchaOfPage['image']; ?>
                </span>
					<input class="input100 -code" type="number" name="captcha">
					<span class="focus-input100"></span>
				</div>


				<div class="container-login100">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="termsApproval">
						<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									اینجانب
									<a href="#" class="txt2 hov1">
                                        قوانین و مقررات شرکت 									</a>

را میپذیرم.
                                </span>
						</label>
					</div>


				</div>


				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" id="submit" class="login100-form-btn">
							ثبت نام
						</button>
					</div>

					<a href="login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						ورود به سیستم
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/bootstrap/js/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/daterangepicker/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/loginTemplateFiles/js/main.js'); ?>"></script>
<script>

	$(document).ready(function () {

		$("#datepickerShamsi").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsi2").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsiRes").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsiRes2").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsiBirth").kendoDatePickerShamsi({culture: "fa-IR"});

		$("#timepickerShamsi").kendoTimePicker({culture: "fa-IR"});
		$().onchange(function () {

		});
	});
</script>
</body>
</html>
