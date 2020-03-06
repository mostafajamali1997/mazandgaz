<?php

class UserController extends MY_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->model('UserModel');//khodesh ye object ba esm UserModel misaze
	}

	public function index()
	{
		echo "user controllerrrrrrrrrrrrr";
	}

	public function register()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
			redirect('/UserController/usersPanel/');
		else {
			if ($this->doesUserSendForms() == 'requestMustBePost') // badan peyghamasho bezar
				$this->load->view('newRegisterPage');
			else {
				if ($this->doesRegisterValidationSuccessful($this->input->post('handyCareerOptions')))

					if (strcasecmp($statusOfFunctionWork = $this->UserModel->register(), 'Duplicate') == 0)//age barabar bood 0 mide na 1
					{
						$data['usernameDuplicate'] = 'this Username that you entered is duplicate with another please enter new username ';
						$this->load->view('newRegisterPage', $data);
						return 0;
					}
				redirect('UserController/usersPanel');
			}
		}
		return 0;
	}

	private function doesRegisterValidationSuccessful($handyCareer)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'required|matches[password]');

		$this->form_validation->set_rules('fname', 'FirstName', 'required');
		$this->form_validation->set_rules('lname', 'LastName', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('tel', 'Tel', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('dateOfBirthday', 'DateOfBirthday', 'required');
		$this->form_validation->set_rules('nationalCode', 'nationalCode', 'required');
		$this->form_validation->set_rules('postalCode', 'postalCode', 'required');
		$this->form_validation->set_rules('sheba', 'sheba', 'required');
		$this->form_validation->set_rules('termsApproval', 'termsApproval', 'required');

		if ($handyCareer == "Resellers") {
			$this->form_validation->set_rules('dateOfStartCooperationRes', 'dateOfStartCooperationRes', 'required');
			$this->form_validation->set_rules('dateOfEndCooperationRes', 'dateOfEndCooperationRes', 'required');
			// if($handyCareer=="Resellers")
			$this->form_validation->set_rules('resellerCode', 'resellerCode', 'required');
			//   else
			// $this->form_validation->set_rules('workingField','workingField','required');

		} else if ($handyCareer == "serviceWorker") {
			$this->form_validation->set_rules('dateOfStartCooperation', 'dateOfStartCooperation', 'required');
			$this->form_validation->set_rules('dateOfEndCooperation', 'dateOfEndCooperation', 'required');
			// if($handyCareer=="Resellers")
			//    $this->form_validation->set_rules('resellerCode','resellerCode','required');
			//  else
			$this->form_validation->set_rules('workingField', 'workingField', 'required');

		}
		$this->doesCaptchaFilledCorrectly();// jaye in ba ye rule ekhtesasi $this->form_validation->set_rules('captcha','captcha','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('newRegisterPage');
			return false;
		} else {
			return true;
		}
	}
	//////////////////////////////////////////////////////////
	/// //////////////////////////////////////////////////////
	/// /////////////////////////////////////////////////////////
	/// /////////////////////////////////////////////////////////////

	public function login()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core inja bas false bashe ama register true
			redirect('/UserController/usersPanel/');
		else {
			{
				if ($this->doesUserSendForms() == 'requestMustBePost') // badan peyghamasho bezar
					$this->load->view('newLoginPage');
				else {
					if ($this->doesLoginValidationSuccessful()) {
						$statusOfFunctionWork = $this->UserModel->login();
						if ($statusOfFunctionWork == 'usernameIsWrong' || $statusOfFunctionWork == 'passwordIsWrong') {
							$data['userPassError'] = 'Username or password was incorrect';
							$this->load->view('newLoginPage', $data);
						} else if ($statusOfFunctionWork == 'isntActive') {
							$data['userPassError'] = 'Your Account isn\'t Activate';
							$this->load->view('newLoginPage', $data);
						}
					}
				}
			}
		}
	}

	private function doesLoginValidationSuccessful()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->doesCaptchaFilledCorrectly();// jaye in ba ye rule ekhtesasi $this->form_validation->set_rules('captcha','captcha','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('newLoginPage');
			return false;
		} else {
			return true;
		}
	}

	public function usersPanel()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$templateData['pageTitle'] = 'پنل کاربری';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminHome', $templateData);
			$this->load->view('adminFooter');
		}
	}

	public function userManagement()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('UserModel');
			$userModel = new UserModel();
			$res = $userModel->getAllUsers();
			$data = array(
				'users' => $res,
				'pageTitle' => 'مدیریت کاربران'
			);
			$templateData['pageTitle'] = 'مدیریت کاربران';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminUserManagement', $data);
			$this->load->view('adminFooter');
		}
	}

	public function userPermissions()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$templateData['pageTitle'] = 'مدیریت سطح دسترسی کاربران';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminUserPermissions', $templateData);
			$this->load->view('adminFooter');
		}
	}
	public function freeUsers($id)
	{
			$this->load->model('UserModel');
			$templateData['freeCustomers']=$this->UserModel->getFreeCustomerWithId($id);
	    	$templateData['pageTitle'] = 'کاربران آزاد | صادکو';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('freeUserProfile', $templateData);
			$this->load->view('adminFooter');
	}
	public function addProductForm($secondaryProductGroupId, $baseProductGroupId)
	{

		$this->load->view('adminHeader');
		$this->load->view('adminAddProduct', array(
			'baseProductGroupId' => $baseProductGroupId,
			'secondaryProductGroupId' => $secondaryProductGroupId
		));
		$this->load->view('adminFooter');
	}

	public function addProduct()
	{

		$this->load->model('Financial_Product');
		$this->load->model('Products_Image');
		$imageModel = new Products_Image();
		$productModel = new Financial_Product();

		$productId = $productModel->addProduct();
		echo "product id : " . $productId;

		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			echo "error";
			var_dump($error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			var_dump($data);
			$imageModel->addProductImage($data['upload_data'], $productId);

			$baseProductGroupId = $this->input->post('baseProductGroupId');
			$secondaryProductGroupId = $this->input->post('secondaryProductGroupId');
			$this->productsManagement($secondaryProductGroupId, $baseProductGroupId);
		}


	}

	public function productsManagement($secondaryProductGroupId, $baseProductGroupId)
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('Financial_Product');
			$product = new Financial_Product();
			if ($secondaryProductGroupId == 0) {
				$res = $product->getAllProduct();
			} else {
				$res = $product->getProductsWithSecondaryGroupId($secondaryProductGroupId);
			}
			$data = array(
				'products' => $res,
				'pageTitle' => 'مدیریت محصولات',
				'baseProductGroupId' => $baseProductGroupId,
				'secondaryProductGroupId' => $secondaryProductGroupId
			);
			$templateData['pageTitle'] = 'مدیریت محصولات';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminProductsManagement', $data);
			$this->load->view('adminFooter');
		}
	}

	public function discountsManagement()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$templateData['pageTitle'] = 'مدیریت تخفیف ها';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminDiscountsManagement', $templateData);
			$this->load->view('adminFooter');
		}
	}

	public function baseProductsGroupManagement()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model("Financial_BaseProductGroup");
			$base = new Financial_BaseProductGroup();
			$res = $base->getAllBaseGroupProduct();
			$data = array(
				'baseProductGroups' => $res,
				'pageTitle' => 'مدیریت گروه های محصولات'
			);
			$templateData['pageTitle'] = 'مدیریت گروه های محصولات';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminBaseProductsManagement', $data);
			$this->load->view('adminFooter');
		}
	}

	public function baseProductsGroupManagement2($baseProductGroupID)
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('Financial_SecondaryProductGroup');
			$secondary = new Financial_SecondaryProductGroup();
			if ($baseProductGroupID == 0) {
				$res = $secondary->getAllSecondaryGroupProduct();
			} else {
				$res = $secondary->getSecondaryProductGroupsWithBaseId($baseProductGroupID);
			}

			$data = array(
				'secondaryProductGroups' => $res,
				'pageTitle' => 'مدیریت زیر گروه های محصولات',
				'baseProductGroupId' => $baseProductGroupID
			);
			$templateData['pageTitle'] = 'مدیریت زیر گروه های محصولات';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminSecondaryProductsManagement', $data);
			$this->load->view('adminFooter');
		}
	}

	public function baseProductGroupForm()
	{

		$templateData['pageTitle'] = '';
		$this->load->view('adminHeader', $templateData);
		$this->load->view('adminAddBaseProduct');
		$this->load->view('adminFooter');

	}

	public function addBaseProductGroup()
	{
		$this->load->model('Financial_BaseProductGroup');
		$baseModel = new Financial_BaseProductGroup();
		$baseModel->addBaseProductGroup();
		$res = $baseModel->getAllBaseGroupProduct();

		$templateData['pageTitle'] = 'مدیریت گروه های محصولات';
		$this->load->view('adminHeader', $templateData);
		$this->load->view('adminBaseProductsManagement', array(
			'baseProductGroups' => $res
		));
		$this->load->view('adminFooter');

	}

	public function secondaryProductGroupForm($baseId)
	{

		$templateData['pageTitle'] = '';
		$this->load->view('adminHeader', $templateData);
		$this->load->view('adminAddSecondaryProduct', array(
			'baseProductGroupId' => $baseId
		));
		$this->load->view('adminFooter');

	}

	public function addSecondaryProductGroup($baseProductGroupId)
	{
		$this->load->model('Financial_SecondaryProductGroup');
		$secondary = new Financial_SecondaryProductGroup();
		$secondary->addSecondaryProductGroup();
		$res = $secondary->getSecondaryProductGroupsWithBaseId($baseProductGroupId);

		$templateData['pageTitle'] = 'مدیریت گروه های محصولات';
		$this->load->view('adminHeader', $templateData);
		$this->load->view('adminSecondaryProductsManagement', array(
			'secondaryProductGroups' => $res,
			'baseProductGroupId' => $baseProductGroupId
		));
		$this->load->view('adminFooter');

	}
	public function warrantyManagement()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model("Warranty_Model");
			$res = $this->Warranty_Model->getAllWarranty();
			$usersSession=$this->session->userdata('usersSession');
			$serviceWorkersProducts=$this->Warranty_Model->getDedicateProductsForServiceWorker($usersSession['username']);
			//var_dump($res);
			//exit();
			$data = array(
				'warrantyAndProductsTitle' => $res,
				'pageTitle' => 'مدیریت کارت گارانتی ها'
			);
			$templateData['pageTitle'] = 'مدیریت کارت های گارنتی';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminWarrantyManagement', $data);
			$this->load->view('adminFooter');
		}
	}
	public function addWarrantyForm()
	{
		$this->load->model('Warranty_Model');
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			//$res = $this->Warranty_Model->getAllWarranty();
			$data = array(
				//'warrantyAndProductsTitle' => $res,
				'pageTitle' => 'صدور گارانتی جدید'
			);
			$usersSession=$this->session->userdata('usersSession');
			$data['products']=$this->Warranty_Model->getDedicateProductsForServiceWorker($usersSession['username']);
			$templateData['pageTitle'] = 'صدور گارانتی جدید';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminWarrantyAdd', $data);
			$this->load->view('adminFooter');
		}
	}
	public function addWarranty()//ehsas dobare kari daram
	{
		$this->load->model('Warranty_Model');
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$usersSession=$this->session->userdata('usersSession');
			$serviceWorkersProducts=$this->Warranty_Model->getDedicateProductsForServiceWorker($usersSession['username']);//forvalidation
			$count=0;
			$productId=array();
			foreach($serviceWorkersProducts as $product)
			{
				$productsId[$count]=$product['id'];
				$count++;
			}

			$this->load->library('form_validation');
			$validation_rules=array(
				array('field'=>'product_id','label'=>'نوع محصول','rules'=>'trim|required|is_natural|in_list['.implode(",",$productsId).']' ),
				array('field'=>'inputFname','label'=>'نام','rules'=>'trim|required|alpha'),
				array('field'=>'inputLname','label'=>'نام خانوادگی','rules'=>'trim|required|alpha'),	
				array('field'=>'inputPhone','label'=>'شماره تماس','rules'=>'trim|required|is_natural'),	
				array('field'=>'inputAddress','label'=>'آدرس','rules'=>'trim|required|alpha_numeric_spaces'),
				array('field'=>'inputPostalCode','label'=>'کدپستی','rules'=>'trim|required|is_natural'),	


			);
			$this->form_validation->set_rules($validation_rules);
			if($this->form_validation->run() == FALSE)
			{
				$usersSession=$this->session->userdata('usersSession');
				$data['products']=$this->Warranty_Model->getDedicateProductsForServiceWorker($usersSession['username']);//engar dobare kari kardm
				$templateData=array('pageTitle'=>'خطا|صدورگارانتی جدید');
				$this->load->view('adminHeader', $templateData);
				$this->load->view('adminWarrantyAdd', $data);
				$this->load->view('adminFooter');
			}
			else
			$this->Warranty_Model->addWarranty();
			/*$res = $this->Warranty_Model->getAllWarranty();
			$data = array(
				//'warrantyAndProductsTitle' => $res,
				'pageTitle' => 'صدور گارانتی جدید'
			);
			$usersSession=$this->session->userdata('usersSession');
			$data['products']=$this->Warranty_Model->getDedicateProductsForServiceWorker($usersSession['username']);
			$templateData['pageTitle'] = 'صدور گارانتی جدید';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminWarrantyAdd', $data);
			$this->load->view('adminFooter');
			*/
		}
	}
	public function showImage()
	{ //mamoolan az view ha besh arg midim
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
		$this->load->helper('showImageSecure_helper');
		//$this->showImageSecure_helper->showImageSecure(); eshtebahe helper dastane loadesh fargh dare
		showImageSecure();
		}
	}
	//////////////////////////////////////////////////////////
	/// //////////////////////////////////////////////////////
	/// /////////////////////////////////////////////////////////
	/// /////////////////////////////////////////////////////////////

	public function factorsManagement()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('Factors');
			$factorModel = new Factors();
			$res = $factorModel->getAllFactors();
			$data = array(
				'factors' => $res,
				'pageTitle' => 'مدیریت فاکتورها'
			);
			$templateData['pageTitle'] = 'مدیریت فاکتورها';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminFactorsManagement', $data);
			$this->load->view('adminFooter');
		}
	}

	public function factorContentsManagement($factorId)
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('Factors_Content');
			$contentsModel = new Factors_Content();
			$res = $contentsModel->getContentsWithFactorId($factorId);
			$data = array(
				'contents' => $res,
				'pageTitle' => 'مدیریت فاکتورها'
			);
			$templateData['pageTitle'] = 'مدیریت فاکتورها';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminFactorContentsManagement', $data);
			$this->load->view('adminFooter');
		}
	}
	public function ticketsManager()
	{
		if ($this->doesUserLoggedInWithSessionOrCookies())//Az My Controller to folder core
		{
			$this->load->model('Factors');
			$factorModel = new Factors();
			$res = $factorModel->getAllFactors();
			$data = array(
				'factors' => $res,
				'pageTitle' => 'مدیریت تیکت ها'
			);
			$templateData['pageTitle'] = 'مدیریت تیکت ها';
			$this->load->view('adminHeader', $templateData);
			$this->load->view('adminFactorsManagement', $data);
			$this->load->view('adminFooter');
		}
	}



}
