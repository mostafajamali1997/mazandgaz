<?php
include('Financial_SecondaryProductGroup.php');

class Financial_Product extends Financial_SecondaryProductGroup
{
	private $id; //auto increment
	private $title;
	private $secondaryTitr;
	private $shortDescription;
	private $baseProductGroupId;
	private $secondaryProductGroupId;
	private $dateOfAddProduct;          //current date in database
	private $adderUsername;
	private $doesHaveDiscount;
	private $amountForSell;
	private $usersCanSendComment;
	private $usersCanSeeThisProduct;
	private $status;

	public function __construct()
	{
		parent::__construct();
	}

	public function addProduct()
	{
		$this->title = $this->input->post('title');
		$this->secondaryTitr = $this->input->post('secondaryTitr');
		$this->shortDescription = $this->input->post('shortDescription');
		//$this->adderUsername = $this->input->post('adderUsername');
		$this->adderUsername = 'ilaman'; //TODO: felan ilaman bashe badan az session mikhunim ...

		$this->doesHaveDiscount = $this->input->post('doesHaveDiscount');
		$this->amountForSell = $this->input->post('amountForSell');
		$this->usersCanSendComment = $this->input->post('usersCanSendComment');
		$this->usersCanSeeThisProduct = $this->input->post('usersCanSeeThisProduct');
		$this->status = $this->input->post('status');
		$this->baseProductGroupId = $this->input->post('baseProductGroupId');
		$this->secondaryProductGroupId = $this->input->post('secondaryProductGroupId');

		$data = array(
			'title' => $this->title,
			'secondaryTitr' => $this->secondaryTitr,
			'shortDescription' => $this->shortDescription,
			'adderUsername' => $this->adderUsername,
			'doesHaveDiscount' => $this->doesHaveDiscount,
			'amountForSell' => $this->amountForSell,
			'usersCanSendComment' => $this->usersCanSendComment,
			'usersCanSeeThisProduct' => $this->usersCanSeeThisProduct,
			'status' => $this->status,
			'baseProductGroupId' => $this->baseProductGroupId,
			'secondaryProductGroupId' => $this->secondaryProductGroupId,
		);

		//$this->db->set($data);
		//$this->db->insert($this->db->dbprefix . 'Financial_Product');

		$this->db->insert('Financial_Product', $data);
		return $this->db->insert_id();
	}

	public function editProduct()
	{
		$this->id = $this->input->post('id');
		$this->title = $this->input->post('title');
		$this->secondaryTitr = $this->input->post('secondaryTitr');
		$this->shortDescription = $this->input->post('shortDescription');
		$this->adderUsername = $this->input->post('adderUsername');
		$this->doesHaveDiscount = $this->input->post('doesHaveDiscount');
		$this->amountForSell = $this->input->post('amountForSell');
		$this->usersCanSendComment = $this->input->post('usersCanSendComment');
		$this->usersCanSeeThisProduct = $this->input->post('usersCanSeeThisProduct');
		$this->status = $this->input->post('status');
		$this->baseProductGroupId = $this->input->post('baseProductGroupId');
		$this->secondaryProductGroupId = $this->input->post('secondaryProductGroupId');
		$data = array(
			'title' => $this->title,
			'secondaryTitr' => $this->secondaryTitr,
			'shortDescription' => $this->shortDescription,
			'adderUsername' => $this->adderUsername,
			'doesHaveDiscount' => $this->doesHaveDiscount,
			'amountForSell' => $this->amountForSell,
			'usersCanSendComment' => $this->usersCanSendComment,
			'usersCanSeeThisProduct' => $this->usersCanSeeThisProduct,
			'status' => $this->status,
			'baseProductGroupId' => $this->baseProductGroupId,
			'secondaryProductGroupId' => $this->secondaryProductGroupId,
		);
		$this->db->set($data);
		$this->db->where('id', $this->id);
		$this->db->update('Financial_Product');

	}

	public function deleteProduct()
	{
		$this->id = $this->input->post('id');
		//$query = $this->db->query("delete from Financial_Product where id=".$this->id.";");
		$this->db->where('id', $this->id);
		$this->db->delete('Financial_Product');
	}

	public function getAllProduct()
	{
		$res = $this->db->get('Financial_Product')->result_array();
		return $res;
	}

	public function getProductWithId($id)
	{
		//$this->id = $this->input->post('id');
		$this->id = $id;
		//$query = $this->db->query("select * from Financial_Product where id='".$this->id."';");
		$res = $this->db->get_where('Financial_Product', array('id' => $this->id));
		return $res->result_array();
	}

	public function getProductsWithSecondaryGroupId($secondaryProductGroupId)
	{
		$this->secondaryProductGroupId = $secondaryProductGroupId;
		$res = $this->db->get_where('Financial_Product', array(
			'secondaryProductGroupId' => $this->secondaryProductGroupId
		));
		return $res->result_array();
	}

	public function getProductsWithBaseGroupId()
	{
		$this->baseProductGroupId = $this->input->post('baseProductGroupId');
		$res = $this->db->get_where('Financial_Product', array(
			'baseProductGroupId' => $this->baseProductGroupId
		));
		return $res->result_array();
	}


}
