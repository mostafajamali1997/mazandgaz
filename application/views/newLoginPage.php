<?php
$this->load->helper('form');
$this->load->helper('captcha');
$this->load->library('form_validation');

$form_open_attributes = array('class' => 'form_group', 'id' => 'login_form');//For_Security
$captcha_data = array(
	'word' => rand(12345, 50000),
	'img_path' => './captcha/',
	'img_url' => base_url('captcha'),
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
	<title> ورود :: صادکو</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginTemplateFiles/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginTemplateFiles/css/main.css'); ?>">
	<script src="https://saadco.co/jquerymin.js"></script>

	<!--===============================================================================================-->
	<style>
		@font-face {
			font-family: 'Vazir';
			src: url('<?php echo base_url('Vazir.woff') ?>') format('woff');
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
					echo @$userPassError;
					?></div>
				<?php echo form_open('UserController/login', $form_open_attributes); ?><br/>
				<span class="login100-form-title p-b-59 text-center">
ورود به سامانه
                </span>


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

				<div class="wrap-input100 validate-input" data-validate="کد امنیتی الزامی است">
					<span class="label-input100">کد امنیتی </span>

					<span class="label-input100">
                    <?php
					echo $captchaOfPage['image']; ?>
                </span>
					<input class="input100 -code" type="number" name="captcha">
					<span class="focus-input100"></span>
				</div>


				<div class="container-login100">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="rememberme">
						<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
                                    مرا به یاد دار و تا خروج کامل از سامانه از من هویت سنجی نکن!
                                </span>
						</label>
					</div>


				</div>


				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" id="submit" class="login100-form-btn">
							ورد به سامانه
						</button>
					</div>

					<a href="register" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						ثبت نام
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
</body>
</html>
