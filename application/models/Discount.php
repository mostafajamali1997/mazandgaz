<?php


class Discount extends CI_Model
{
	private $id;
	private $description;
	private $productId;
	private $percentOfDiscount;
	private $dateTimeOfStart;
	private $status;
	private $whoCanUse;
	private $dateTimeOfEnd;

	public function __construct()
	{
		parent::__construct();
	}

	public function addDiscount()
	{
		$this->description = $this->input->post('description');
		$this->productId = $this->input->post('productId');
		$this->percentOfDiscount = $this->input->post('percentOfDiscount');
		$this->dateTimeOfStart = $this->input->post('dateTimeOfStart');
		$this->dateTimeOfEnd = $this->input->post('dateTimeOfEnd');
		$this->status = $this->input->post('status');
		$this->whoCanUse = $this->input->post('whoCanUse');

		$data = array(
			'description' => $this->description,
			'productId' => $this->productId,
			'percentOfDiscount' => $this->percentOfDiscount,
			'dateTimeOfStart' => $this->dateTimeOfStart,
			'dateTimeOfEnd' => $this->dateTimeOfEnd,
			'status' => $this->status,
			'whoCanUse' => $this->whoCanUse,
		);
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Discount');
	}

	public function getAllDiscounts()
	{
		$res = $this->db->get('Discount')->result_array();
		return $res;
	}

	public function getProductDiscount($productId)
	{
		$this->productId = $productId;
		//$query = $this->db->query("select * from Discount where productId='".$this->productId."';");
		$query = $this->db->get_where('Discount', array(
			'productId' => $this->productId
		));
		return $query->result_array();
	}

	public function getProductEnableDiscounts()
	{
		$this->productId = $this->input->post('productId');
		$query = $this->db->query("select * from Discount where productId='" . $this->productId . "' and status=1");  ///or True i dont knox
		return $query->result_array();
	}

	public function editProductDiscount()
	{
		$this->id = $this->input->post('id');

		$data = array(
			'description' => $this->input->post('description'),
			'productId' => $this->input->post('productId'),
			'percentOfDiscount' => $this->input->post('percentOfDiscount'),
			'dateTimeOfStart' => $this->input->post('dateTimeOfStart'),
			'dateTimeOfEnd' => $this->input->post('dateTimeOfEnd'),
			'status' => $this->input->post('status'),
			'whoCanUse' => $this->input->post('whoCanUse'),
		);

		$this->db->where('id', $this->id);
		$this->db->update('Discount', $data);
	}


}
