<?php


class Products_Image extends CI_Model
{
	private $id; //auto increment
	private $productId;
	private $imageName;
	private $uploadedAddress;
	private $size;

	public function __construct()
	{
		parent::__construct();
	}

	public function addProductImage($data, $productId)
	{
		//$this->productId = $this->input->post('productId');
		$this->productId = $productId;

		$this->imageName = $data['file_name'];
		$this->uploadedAddress = $data['file_path'];
		$this->size = $data['file_size'];
		$this->uploadedAddress = str_replace('/home/saadco/domains/', '', $this->uploadedAddress);
		$this->uploadedAddress = str_replace('/public_html', '/', $this->uploadedAddress);
		$data = array(
			'productId' => $this->productId,
			'imageName' => $this->imageName,
			'uploadedAddress' => $this->uploadedAddress,
			'size' => $this->size,
		);
		//$this->db->set($data);
		//$this->db->insert($this->db->dbprefix . 'Products_Image');
		$this->db->insert('Products_Image', $data);
	}

	public function getProductImages($id)
	{  //get with product id with post method
		//$this->productId = $this->input->post('id');
		$this->productId = $id;
		//$query = $this->db->query("select * from Products_Image where productId=".$this->productId.";");

		$res = $this->db->get_where('Products_Image', array('productId' => $this->productId));
		return $res->result_array();
	}
}
