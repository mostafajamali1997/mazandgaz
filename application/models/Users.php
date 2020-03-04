<?php

//TODO: kelase barresie hoviat sanjie karbar dar qesmate core neveshte shavad.

class Users extends CI_Model
{
	private $id; //auto increment
	private $username;
	private $password;
	private $fname;
	private $lname;
	private $age;
	private $tel;
	private $mobile;
	private $nationalCode;
	private $userIpWhenRegister;
	private $userAgentWhenRegister;
	private $registerDateAndTime;
	private $isUserAccountActive;
	private $email;
	private $isSospend;
	private $lastLoginIp;
	private $lastLoginUserAgent;
	private $lastLoginDateTime;
	private $homeAddress;
	private $workAddress;
	private $nationalBankAccountCodeOrShaba;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');

	}

	public function registerUsers($data1)
	{
		$this->username = $data1['username'];
		$this->password = $data1['password'];
		$this->fname = $data1['fname'];
		$this->lname = $data1['lname'];
		$this->age = $data1['age'];
		$this->tel = $data1['tel'];
		$this->mobile = $data1['mobile'];
		$this->nationalCode = $data1['nationalCode'];
		$this->email = $data1['email'];
		$this->homeAddress = $data1['homeAddress'];
		$this->workAddress = $data1['workAddress'];
		$this->nationalBankAccountCodeOrShaba = $data1['nationalBankAccountCodeOrShaba'];
		$this->userIpWhenRegister = $data1['userIpWhenRegister'];
		$this->userAgentWhenRegister = $data1['userAgentWhenRegister'];
		$this->lastLoginIp = $data1['lastLoginIp'];
		$this->lastLoginUserAgent = $data1['lastLoginUserAgent'];

		$data = array(
			'username' => $this->username,
			'password' => $this->password,
			'fname' => $this->fname,
			'lname' => $this->lname,
			'age' => $this->age,
			'tel' => $this->tel,
			'mobile' => $this->mobile,
			'nationalCode' => $this->nationalCode,
			'email' => $this->email,
			'homeAddress' => $this->homeAddress,
			'workAddress' => $this->workAddress,
			'nationalBankAccountCodeOrShaba' => $this->nationalBankAccountCodeOrShaba,
			'userIpWhenRegister' => $this->userIpWhenRegister,
			'userAgentWhenRegister' => $this->userAgentWhenRegister,
			'lastLoginIp' => $this->lastLoginIp,
			'lastLoginUserAgent' => $this->lastLoginUserAgent,
		);
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Users');

		return true;
	}

	public function editUser($data1)
	{
		$this->username = $data1['username'];
		$this->password = $data1['password'];
		$this->fname = $data1['fname'];
		$this->lname = $data1['lname'];
		$this->age = $data1['age'];
		$this->tel = $data1['tel'];
		$this->mobile = $data1['mobile'];
		$this->nationalCode = $data1['nationalCode'];
		$this->email = $data1['email'];
		$this->homeAddress = $data1['homeAddress'];
		$this->workAddress = $data1['workAddress'];
		$this->nationalBankAccountCodeOrShaba = $data1['nationalBankAccountCodeOrShaba'];
		$this->userIpWhenRegister = $data1['userIpWhenRegister'];
		$this->userAgentWhenRegister = $data1['userAgentWhenRegister'];
		$this->lastLoginIp = $data1['lastLoginIp'];
		$this->lastLoginUserAgent = $data1['lastLoginUserAgent'];

		$data = array(
			'password' => $this->password,
			'fname' => $this->fname,
			'lname' => $this->lname,
			'age' => $this->age,
			'tel' => $this->tel,
			'mobile' => $this->mobile,
			'nationalCode' => $this->nationalCode,
			'email' => $this->email,
			'homeAddress' => $this->homeAddress,
			'workAddress' => $this->workAddress,
			'nationalBankAccountCodeOrShaba' => $this->nationalBankAccountCodeOrShaba,
			'userIpWhenRegister' => $this->userIpWhenRegister,
			'userAgentWhenRegister' => $this->userAgentWhenRegister,
			'lastLoginIp' => $this->lastLoginIp,
			'lastLoginUserAgent' => $this->lastLoginUserAgent,
		);
		$this->db->where('username', $this->username);
		$this->db->update('Users', $data);

	}

	public function getIdWithUsername($username)
	{
		$query = $this->db->query("select id from Users where username=" . $username . ";");
		$res = $query->result_array();
		return $res[0]['id'];
	}

	public function checkUsernamePassword($username, $password)
	{
		$query = $this->db->query("select id,password from Users where username=" . $username . ";");
		$res = $query->result_array();
		if ($res[0]['password'] == $password) {
			return $res[0]['id'];
		}
		return 0;
	}

	public function updateLoginAgentIp()
	{
		$this->username = $this->db->escape($this->input->post('username'));
		$this->lastLoginIp = $this->input->ip_address();
		$this->lastLoginUserAgent = $this->agent->agent_string();
		///////////////////////////////////////////////
		$this->load->helper('date');
		$this->lastLoginDateTime = "1111-11-11 12:12:12";

		$query = $this->db->query("update Users set lastLoginIp='" . $this->lastLoginIp . "',lastLoginUserAgent='" . $this->lastLoginUserAgent . "'
        ,lastLoginDateTime='" . date('Y-m-d H:i:s') . "' where username=" . $this->username . ";");
		if ($query) {
			return true;
		}
		return false;
	}


}
