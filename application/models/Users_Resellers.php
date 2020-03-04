<?php


class Users_Resellers extends Users
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}

	public function registerResellers()
	{
		$username = $this->input->post('username');
		$query = $this->db->query("select * from Users where username='" . $username . "';");
		if ($query->result_array()) {
			echo "exists";
			return false;
		}
		$data1 = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'age' => $this->input->post('age'),
			'tel' => $this->input->post('tel'),
			'mobile' => $this->input->post('mobile'),
			'nationalCode' => $this->input->post('nationalCode'),
			'email' => $this->input->post('email'),
			'homeAddress' => $this->input->post('homeAddress'),
			'workAddress' => $this->input->post('workAddress'),
			'nationalBankAccountCodeOrShaba' => $this->input->post('nationalBankAccountCodeOrShaba'),
			'userIpWhenRegister' => $this->input->ip_address(),
			'userAgentWhenRegister' => $this->agent->agent_string(),
			'lastLoginIp' => $this->input->ip_address(),
			'lastLoginUserAgent' => $this->agent->agent_string(),
		);
		parent::registerUsers($data1);
		$this_id = parent::getIdWithUsername($this->db->escape($this->input->post('username')));
		$data2 = array(
			'userId' => $this_id,
			'resellerCode' => $this->input->post('resellerCode'),
			'allOfBoughtItem' => 0,
			'allOfSelledItem' => 0,
		);
		$this->db->set($data2);
		$this->db->insert($this->db->dbprefix . 'Users_Resellers');

		return true;
	}

	public function loginResellers()
	{
		$username = $this->db->escape($this->input->post('username'));
		$password = $this->input->post('password');
		$userId = parent::checkUsernamePassword($username, $password);
		if ($userId != 0) {
			$query = $this->db->query("select * from Users_Resellers where userId=" . $userId . ";");
			$res = $query->result_array();
			if (!empty($res)) {
				return true;
			}
		}
		return false;
	}


}
