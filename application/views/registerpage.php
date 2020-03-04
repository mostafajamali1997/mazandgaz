<head>
	<link href="<?php echo base_url('assets/dateTimePicker/kendo.common.min.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/dateTimePicker/kendo.default.min.css'); ?>" rel="stylesheet"/>

	<script src="https://saadco.co/jquerymin.js"></script>

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

</head>

<div id="userRegisterPage">
	<h3> Dear users,for register in SaadCo Company Web Application please send your information by this form
		carefully.</h3>
	<?php
	$this->load->helper('form');
	$this->load->helper('captcha');
	$form_open_attributes = array('class' => 'form_group', 'id' => 'register_form');
	$username_input_data = array('name' => 'username', 'class' => '', 'id' => 'username');
	$password_input_data = array('name' => 'password', 'class' => '', 'id' => 'password');
	$rePassword_input_data = array('name' => 'repassword', 'class' => '', 'id' => 'repassword');
	$fname_input_data = array('name' => 'fname', 'class' => '', 'id' => 'fname');
	$lname_input_data = array('name' => 'lname', 'class' => '', 'id' => 'lname');
	$age_input_data = array('name' => 'age', 'class' => '', 'id' => 'age');
	$email_input_data = array('name' => 'email', 'class' => '', 'id' => 'email');
	$homeAddress_input_data = array('name' => 'homeAddress', 'class' => '', 'id' => 'homeAddress');
	$workAddress_input_data = array('name' => 'workAddress', 'class' => '', 'id' => 'workAddress');
	$tel_input_data = array('name' => 'tel', 'class' => '', 'id' => 'tel');
	$mobile_input_data = array('name' => 'mobile', 'class' => '', 'id' => 'mobile');
	$nationalCode_input_data = array('name' => 'nationalCode', 'class' => '', 'id' => 'nationalCode');
	$nationalBankAccountCodeOrShaba_input_data = array('name' => 'nationalBankAccountCodeOrShaba', 'class' => '', 'id' => 'nationalBankAccountCodeOrShaba');
	$captcha_input_data = array('name' => 'captcha', 'class' => '', 'id' => 'captcha');
	$submit_input_data = array('name' => 'submit', 'class' => '', 'id' => 'submit', 'value' => 'Submit');
	////ServiceWorker and Resellers/////////
	$workingField_input_data = array('name' => 'workingField', 'class' => '', 'id' => 'workingField');
	$resellersCode_input_data = array('name' => 'resellerCode', 'class' => '', 'id' => 'resellerCode');
	$dateOfStartCooperation_input_data = array('name' => 'dateOfStartCooperation', 'class' => '', 'id' => 'dateOfStartCooperation');
	$dateOfEndCooperation_input_data = array('name' => 'dateOfEndCooperation', 'class' => '', 'id' => 'dateOfEndCooperation');
	$handyCareerOptionsJs = array('id' => "handyCareerOptions", 'onChange' => "handyCareerOptionsJsFunction()");
	$handyCareerOptions = array('Customers' => 'Customers', 'serviceWorker' => 'serviceWorker', 'Resellers' => 'Resellers');
	///////////////////////////
	///
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
	<div class="validation_errors" style="color:red;font-weight: bolder;">
		<?php echo validation_errors();
		echo @$usernameDuplicate;//az controller besh pas mishe $data
		?>
	</div>
	<?
	echo form_open('UserController/register', $form_open_attributes); ?><br/>
	UserName: <? echo form_input($username_input_data); ?><br/>
	Password: <? echo form_password($password_input_data); ?><br/>
	Re-Enter Password: <? echo form_password($rePassword_input_data); ?><br/>
	FirstName: <? echo form_input($fname_input_data); ?><br/>
	LastName: <? echo form_input($lname_input_data); ?><br/>
	Age: <? echo form_input($age_input_data); ?><br/>
	Email: <? echo form_input($email_input_data); ?><br/>
	homeAddress: <? echo form_input($homeAddress_input_data); ?><br/>
	workAddress: <? echo form_input($workAddress_input_data); ?><br/>
	tel: <? echo form_input($tel_input_data); ?><br/>
	mobile: <? echo form_input($mobile_input_data); ?><br/>
	NationalCode: <? echo form_input($nationalCode_input_data); ?><br/>
	nationalBankAccountCodeOrShaba: <? echo form_input($nationalBankAccountCodeOrShaba_input_data); ?><br/>
	<? //Amade kardn sabte nam moonde
	echo form_dropdown('handyCareerOptions', $handyCareerOptions, 'Customers', $handyCareerOptionsJs);
	?>
	<div id="serviceWorker">
		Working Field: <? echo form_input($workingField_input_data); ?><br/>
		<div id="datepickerforstart" class="k-content">
			<div style="vertical-align: top; display: inline-block;">
				dateOfStartCooperation:<input name="dateOfStartCooperation" id="datepickerShamsi" value=""
											  style="width:150px;"/><br/><br/>
				dateOfEndCooperation:<input name="dateOfEndCooperation" id="datepickerShamsi2" value=""
											style="width:150px;"/><br/><br/>

			</div>
		</div>

	</div>
	<div id="Resellers">
		Reseller_Code: <? echo form_input($resellersCode_input_data); ?><br/>
		<div id="datepickerforstart" class="k-content">
			<div style="vertical-align: top; display: inline-block;">
				dateOfStartCooperation:<input name="dateOfStartCooperationRes" id="datepickerShamsiRes" value=""
											  style="width:150px;"/><br/><br/>
				dateOfEndCooperation:<input name="dateOfEndCooperationRes" id="datepickerShamsiRes2" value=""
											style="width:150px;"/><br/><br/>

			</div>
		</div>

	</div>

</div>
Captcha:
<?
echo $captchaOfPage['image']; ?><br/>
<? echo form_input($captcha_input_data); ?><br/>
<? echo form_submit($submit_input_data);
////////////////////////////////////endUI////////////////////////////////

?>

</div>
<script>

	$(document).ready(function () {

		$("#datepickerShamsi").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsi2").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsiRes").kendoDatePickerShamsi({culture: "fa-IR"});
		$("#datepickerShamsiRes2").kendoDatePickerShamsi({culture: "fa-IR"});

		$("#timepickerShamsi").kendoTimePicker({culture: "fa-IR"});
		$().onchange(function () {

		});
	});
</script>
