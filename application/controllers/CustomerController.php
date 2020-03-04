<?php


class CustomerController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

	}

	public function index()
	{


	}

	public function register()
	{

		$this->load->model('Users_Customers');

		if (isset($_POST) && !empty($_POST)) {
			$userCustomer = new Users_Customers();
			if ($userCustomer->registerCustomers()) {
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
		$this->load->model('Users_Customers');

		if (isset($_POST) && !empty($_POST)) {
			if ($this->session->has_userdata('isLogin')) {
				echo "shoma qablan login shodeid";
				return;
			}
			$userCustomer = new Users_Customers();
			if ($userCustomer->loginCustomers()) {
				echo "login shod\n";
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

	public function addComment()
	{

		$this->load->model('Products_Comment');
		if (isset($_POST) && !empty($_POST)) {
			$comment = new Products_Comment();
			$comment->addComment();
		}


	}

	public function getProfile()
	{
		$this->load->model('Users_Customers');
		if (isset($_POST) && !empty($_POST)) {
			$customer = new Users_Customers();
			$res = $customer->getProfileCustomer();
			foreach ($res as $row) {
				echo $row['fname'] . "\n";
			}
		}
	}

	public function editProfile()
	{
		$this->load->model('Users_Customers');
		if (isset($_POST) && !empty($_POST)) {
			$customer = new Users_Customers();
			$customer->editProfileCustomer();
			echo "edit shod";
		} else {
			echo "request bayad post va por bashad";
		}
	}

	public function createTicket()
	{
		$this->load->model('Tickets');
		if (isset($_POST) && !empty($_POST)) {
			$ticket = new Tickets();
			$ticket->addTicket();
			echo "ticket created";
		}

	}

	public function sendMessageToTicket()
	{
		$this->load->model('Tickets_Message');

		if (isset($_POST) && !empty($_POST)) {
			$ticketMessage = new Tickets_Message();
			$ticketMessage->addTicketMessage();
			echo "ersal shod";
		} else {
			echo "request bayad post bashad";
		}

	}

	public function getCreatedTickets()
	{
		$this->load->model('Tickets');
		if (isset($_POST) && !empty($_POST)) {
			$ticket = new Tickets();
			$res = $ticket->getTicketsWithUsername();
			foreach ($res as $row) {
				echo $row['id'] . "   " . $row['department'] . "   " . $row['level'];
			}
		}
	}

	public function showTicket()
	{
		$this->load->model('Tickets_Message');
		if (isset($_POST) && !empty($_POST)) {
			$ticketMessage = new Tickets_Message();
			$res = $ticketMessage->getTicketMessages();

			foreach ($res as $row) {
				echo $row['sender_username'] . "   " . $row['text'] . "\n";
			}
		}
	}


}
