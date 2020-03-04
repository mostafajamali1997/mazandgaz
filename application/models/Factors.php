<?php


class Factors extends CI_Model
{
	private $id;
	private $orderedBy;
	private $dateOfOrder;  //current timeStamp in database
	private $orderingUserIp;
	private $orderingUserAgent;
	private $orderStatus;
	private $creatureBy;
	private $paidStatus;
	private $paidCodeInPaymentList;
	private $dateTimeOfPaid;
	private $deliveryStatus;
	private $totalPrice;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}

	public function addFactor($totalPrice)
	{

		//$this->orderedBy = $this->input->post('orderedBy');
		$this->orderedBy = 'ilaman'; // bayad az session khande shavad...fln betor default esme khodmo nvhstm

		$this->orderingUserIp = $this->input->ip_address();
		$this->orderingUserAgent = $this->agent->agent_string();
		//$this->orderStatus = $this->input->post('orderStatus');
		$this->orderStatus = 1; //dar avale order status 1 ast chon hanooz batel nshode

		$this->paidStatus = $this->input->post('paidStatus');
		$this->paidCodeInPaymentList = $this->input->post('paidCodeInPaymentList');
		//$this->totalPrice = $this->input->post('totalPrice');
		$this->totalPrice = $totalPrice;

		// $this->creatureBy = $this->input->post('creatureBy');
		$this->dateTimeOfPaid = $this->input->post('dateTimeOfPaid');

		$data = array(
			'orderedBy' => $this->orderedBy,// in username karbare edit konandas hala az har goroohi bashe
			'orderingUserIp' => $this->orderingUserIp,
			'orderingUserAgent' => $this->orderingUserAgent,
			'orderStatus' => $this->orderStatus,
			//  'paidStatus' => $this->paidStatus ,be tore pishfarz to db 1 kardm
			'paidCodeInPaymentList' => $this->paidCodeInPaymentList,
			'totalPrice' => $this->totalPrice,
			// 'creatureBy' => $this->creatureBy , created by betor default usere halate dgash karmande
			'dateTimeOfPaid' => $this->dateTimeOfPaid,
			'dateOfOrder' => time()
		);

		$this->db->insert('Factors', $data);
		return $this->db->insert_id();
	}

	public function setDeliveryStatus()
	{
		$this->id = $this->input->post('id');
		$this->deliveryStatus = $this->input->post('deliveryStatus');

		$data2 = array(
			'deliveryStatus' => $this->deliveryStatus,
		);
		$this->db->set($data2);
		$this->db->where('id', $this->id);
		$this->db->update('Factors');
	}

	public function getAllFactors()
	{
		$res = $this->db->get('Factors')->result_array();
		return $res;
	}

	public function getFactorsWithUsername()
	{
		//$this->orderedBy = $this->input->post('orderedBy');
		$this->orderedBy = "ilaman"; //TODO: badan mostafa jan az session mikhune


		//$query = $this->db->query("select * from Factors where orderingBy='".$this->orderedBy."';");
		//return $query->result_array();
		$res = $this->db->get_where('Factors', array('orderedBy' => $this->orderedBy));
		return $res->result_array();
	}

	public function getFactorsPaidStatusFalse()
	{
		//$query = $this->db->query("select * from Factors where paidStatus=0");  ///0 or False id dont know
		//return $query->result_array();
		$this->db->get_where('Factors', array('paidStatus' => $this->paidStatus));
	}


}
