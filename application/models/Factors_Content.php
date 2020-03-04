<?php


class Factors_Content extends CI_Model
{
	private $id;
	private $factorId;
	private $productId;
	private $selledPrice;
	private $amountOfDiscounts;
	private $amountOfBoughtItem;

	public function __construct()
	{
		parent::__construct();

	}

	public function addFactorContent($factorId, $productId, $amountForSell, $amountOfBoughtItem)
	{
		//$this->factorId = $this->input->post('factorId');
		$this->factorId = $factorId;

		//$this->productId = $this->input->post('productId');
		$this->productId = $productId;

		//$this->selledPrice = $this->input->post('selledPrice');
		$this->selledPrice = $amountForSell;

		$this->amountOfDiscounts = $this->input->post('amountOfDiscounts');
		//$this->amountOfBoughtItem = $this->input->post('amountOfBoughtItem');
		$this->amountOfBoughtItem = $amountOfBoughtItem;

		$data = array(
			'factorId' => $this->factorId,
			'productId' => $this->productId,
			'selledPrice' => $this->selledPrice,
			'amountOfDiscounts' => $this->amountOfDiscounts,
			'amountOfBoughtItem' => $this->amountOfBoughtItem,

		);
		//$this->db->set($data);
		//$this->db->insert($this->db->dbprefix . 'Factors_Content');
		$this->db->insert('Factors_Content', $data);
	}

	public function getContentsWithFactorId($factorId)
	{
		//$this->factorId = $this->input->post('factorId');
		$this->factorId = $factorId;

		//$query = $this->db->query("select * from Factors_Content where factorId='".$this->factorId."';");
		//return $query->result_array();
		$res = $this->db->get_where('Factors_Content', array('factorId' => $this->factorId));
		return $res->result_array();
	}

	public function deleteFactorContent()
	{
		$this->id = $this->input->post('id');
		//$query = $this->db->query("delete from Financial_Product where id=".$this->id.";");
		$this->db->where('id', $this->id);
		$this->db->delete('Factors_Content');
	}

}
