<?php


class EmployeeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

	}

	public function register()
	{

		$this->load->model('Users_Employee');

		if (isset($_POST) && !empty($_POST)) {
			$userEmployee = new Users_Employee();
			if ($userEmployee->registerEmployee()) {
				echo "register shod";
			} else {
				echo "in hesab vojod drd";
			}
		} else {
			echo "request must be post";
		}
	}

	public function login()
	{    //TODO: sessions and cookies
		$this->load->model('Users_Employee');

		if (isset($_POST) && !empty($_POST)) {
			if ($this->session->has_userdata('isLogin')) {
				echo "shoma qablan login shodeid";
				return;
			}
			$userEmployee = new Users_Employee();
			if ($userEmployee->loginEmployee()) {
				echo "login shod";
				$this->load->model('Users_Customers');
				$user = new Users();
				$user->updateLoginAgentIp();
				$this->session->set_userdata('isLogin', $this->input->post('username'));

				echo $this->session->has_userdata('isLogin');
			} else {
				echo "in hesab vojod nadrd ya password na dorost";
			}
		} else {
			echo "request must be post";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('isLogin');
	}


}
