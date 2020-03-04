<?php


class Payment extends CI_Model
{
	private $id;
	private $factorId;
	private $payPrice;
	private $payStatus;
	private $payDateTime;
	private $payCodeFromBank;
	private $payerIp;
	private $payerUserAgent;
	private $payerUsername;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');

	}

	public function addPayment()
	{
		$this->factorId = $this->input->post('factorId');
		$this->payPrice = $this->input->post('payPrice');
		$this->payStatus = $this->input->post('payStatus');
		$this->payDateTime = $this->input->post('payDateTime');
		$this->payCodeFromBank = $this->input->post('payCodeFromBank');
		$this->payerIp = $this->input->ip_address();
		$this->payerUserAgent = $this->agent->version() . $this->agent->platform() . $this->agent->browser();
		$this->payerUsername = $this->input->post('payerUsername');

		$data = array(
			'factorId' => $this->factorId,
			'payPrice' => $this->payPrice,
			'payStatus' => $this->payStatus,
			'payDateTime' => $this->payDateTime,
			'payCodeFromBank' => $this->payCodeFromBank,
			'payerIp' => $this->payerIp,
			'payerUserAgent' => $this->payerUserAgent,
			'payerUsername' => $this->payerUsername,
		);

		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Payment');

	}

	public function getAllPayments()
	{
		$res = $this->db->get('Payment')->result_array();
		return $res;
	}

	public function getPaymentsWithFactorId()
	{
		$this->factorId = $this->input->post('factorId');
		$query = $this->db->query("select * from Payment where factorId='" . $this->factorId . "';");
		return $query->result_array();
	}

	public function getPaymentsWithUsername()
	{
		$this->payerUsername = $this->input->post('payerUsername');
		$query = $this->db->query("select * from Payment where payerUsername='" . $this->payerUsername . "';");
		return $query->result_array();
	}

}
