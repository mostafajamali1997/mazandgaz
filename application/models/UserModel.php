<?php

class UserModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->library('user_agent');
		$this->load->library('form_validation');
	}

	public function register()
	{

		$username = $this->input->post('username');
		if (!$this->checkUsernameDuplicating($username))
			return 'Duplicate';//barresi stringi duplicate baraye elan peygham monaseb
		$userData = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),//tabe makhsuse hash pass az khode php.net hash mikonim
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'homeAddress' => $this->input->post('homeAddress'),
			'workAddress' => $this->input->post('workAddress'),
			'nationalCode' => $this->input->post('nationalCode'),
			'postalCode' => $this->input->post('postalCode'),
			'sheba' => $this->input->post('sheba'),
			'mobile' => $this->input->post('mobile'),
			'tel' => $this->input->post('tel'),
			'userIpWhenRegister' => $this->input->ip_address(),
			'userAgentWhenRegister' => $this->agent->agent_string(),
			'registerDateAndTime' => time(),//df is persian date time time eng zakhire bad tabdil be shamsi
			//  'isSuspend'=> default too database meghdar mide khode mysql

		);
		$dateOfBirthdayExplode = explode("/", $this->input->post('dateOfBirthday'));
		$userData['dateOfBirthday'] = time($this->jdf->jalali_to_gregorian($dateOfBirthdayExplode[0], $dateOfBirthdayExplode[1], $dateOfBirthdayExplode[2]));
		$baseUsersTableInsertingQuery = $this->db->insert('Users', $userData);
		switch ($this->input->post('handyCareerOptions')) {//daste shoghli
			case 'Customers':
				$setupUnderTableOfThisUser = 'Users_customers';
				$this->db->insert($setupUnderTableOfThisUser, $baseUsersTableInsertingQuery->result_id);
				break;
			case 'Resellers':
				$setupUnderTableOfThisUser = 'Users_Resellers';
				$resellerCode = $this->input->post('resellerCode');//baghie chizaye reseller 0e
				$dateOfStartCooperationExplode = explode("/", $this->input->post('dateOfStartCooperationRes'));
				$dateOfEndCooperationExplode = explode("/", $this->input->post('dateOfEndCooperationRes'));
				$dateOfStartCooperation = time($this->jdf->jalali_to_gregorian($dateOfStartCooperationExplode[0], $dateOfStartCooperationExplode[1], $dateOfStartCooperationExplode[2]));
				$dateOfEndCooperation = time($this->jdf->jalali_to_gregorian($dateOfEndCooperationExplode[0], $dateOfEndCooperationExplode[1], $dateOfEndCooperationExplode[2]));
				$this->db->insert($setupUnderTableOfThisUser, array('userId' => $this->db->insert_id(), 'resellerCode' => $resellerCode, 'dateOfStartCooperation' => $dateOfStartCooperation, 'dateOfEndCooperation' => $dateOfEndCooperation));// noe insertesh fekr kon
				break;
			case 'serviceWorker':
				$setupUnderTableOfThisUser = 'Users_ServiceWorker';
				$workingField = $this->input->post('workingField');
				$dateOfStartCooperationExplode = explode("/", $this->input->post('dateOfStartCooperation'));
				$dateOfEndCooperationExplode = explode("/", $this->input->post('dateOfEndCooperation'));
				$dateOfStartCooperation = time($this->jdf->jalali_to_gregorian($dateOfStartCooperationExplode[0], $dateOfStartCooperationExplode[1], $dateOfStartCooperationExplode[2]));
				$dateOfEndCooperation = time($this->jdf->jalali_to_gregorian($dateOfEndCooperationExplode[0], $dateOfEndCooperationExplode[1], $dateOfEndCooperationExplode[2]));
				$this->db->insert($setupUnderTableOfThisUser, array('userId' => $this->db->insert_id(), 'workingField' => $workingField, 'dateOfStartCooperation' => $dateOfStartCooperation, 'dateOfEndCooperation' => $dateOfEndCooperation));// noe insertesh fekr kon
				break;
			default:
				return 'errorChoice';
		}
		return true;      //  if($this->doesUserSendForms();//Az My Controller to folder core
		// $this->load->view('registerpage');//age 2ta tabe bala return nade in ejra mishe
	}

	private function checkUsernameDuplicating($username)
	{//false yani username tekrarie va nmishe sabtenam kard bash
		$checkUsernameDuplicateQuery = $this->db->get_where('Users', array('username' => $username), 1);
		if ($checkUsernameDuplicateQuery->num_rows() > 0)
			return false;
		return true;

	}

	public function login()
	{//last Edit By Mostafa (4dec,2019 3:54 pm
		$username = $this->input->post('username');
		$password = $this->input->post('password');//tabe makhsuse hash pass az khode php.net hash mikonim
		$do_remember = $this->input->post('rememberme');//TRUE,FALSE
		$loginUsernameCheckQuery = $this->db->get_where('Users', array('username=' => $username));//bejaye = deghat kon ba khate paein matc
		if ($loginUsernameCheckQuery->num_rows() <= 0)
			return 'usernameIsWrong';
		$loginPasswordCheckQuery = $this->db->get_where('Users', array('username' => $username), 1);
		$loginPasswordResult = $loginPasswordCheckQuery->row();
		if (!password_verify($password, $loginPasswordResult->password))
			return 'passwordIsWrong';
		//age ta inja false nashod yani ba movaffaghiat login shod.
		//////////check activation/////////
		$loginIsActiveCheckQuery = $this->db->get_where('Users', array('username' => $username, 'isActive=' => true), 1);//bejaye = deghat kon ba khate paein matc
		if ($loginIsActiveCheckQuery->num_rows() <= 0)
			return 'isntActive';
		///////////
		$setUserSuccessfulLoginSession = array(
			'username' => $username,
			'logged_in' => TRUE
			//BADAN SABTE IP OK SHE
		);
		$this->session->set_userdata('usersSession', $setUserSuccessfulLoginSession);
		if ($do_remember == TRUE) {
			$setUserSuccessfulLoginCookie = array(
				'name' => 'loggingCookieStatus',
				'value' => 'TRUE',
				'expire' => time() + (86400 * 7),//86400=1day(ilamannnnnnnnnn)
				'domain' => base_url(),
				'path' => '/',
				'secure' => 'TRUE'//Just SSL


			);
			set_cookie($setUserSuccessfulLoginCookie);
			return true;
		}
		redirect('UserController/usersPanel');
		return true;

	}

	public function deleteUser()
	{
		$username = $this->input->post('username');
		$res = $this->db->query("select * from user where 
        username='" . $username . "' and deleted_at='0';")->result_array();
		var_dump($res);
		if (empty($res)) {
			return false;
		}
		$this->db->set('deleted_at', 1, FALSE);
		$this->db->where('username', $username);
		$this->db->update('user');

		return true;

	}

	public function getAllUsers()
	{
		$res = $this->db->get('Users')->result_array();

		return $res;
	}
	public function getAllFreeCustomers()
	{
		$res = $this->db->get('free_customers')->result_array();

		return $res;
	}
	public function getFreeCustomerWithId($id)
	{
		$res = $this->db->get_where('free_customers',array('id'=>$id))->result_array();
		
		return $res;
	}


}



