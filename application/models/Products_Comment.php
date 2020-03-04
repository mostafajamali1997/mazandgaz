<?php
//TODO: add productId foreign key in database and add it here...if product's comment

class Products_Comment extends CI_Model
{
	private $id; //auto increment
	private $senderName;
	private $productId;
	private $sentDateTime; //current timestamp
	private $senderUserAgent;
	private $isOurUser;
	private $ifIsOutUserWhatsUsername;
	private $senderEmail;
	private $message;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');

	}

	public function addComment()
	{   //TODO: empty fields --> if is our user whats username
		$this->senderName = $this->input->post('senderName');
		$this->productId = $this->input->post('productId');
		$this->senderEmail = $this->input->post('senderEmail');
		$this->message = $this->input->post('message');

		$this->senderUserAgent = $this->agent->version() . $this->agent->platform() . $this->agent->browser();
		$data = array(
			'senderName' => $this->senderName,
			'productId' => $this->productId,
			'senderEmail' => $this->senderEmail,
			'message' => $this->message,
			'senderUserAgent' => $this->senderUserAgent,
		);

		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Products_Comment');
	}

	public function getProductComments($id)
	{
		//$this->productId = $this->input->post('id');
		$this->productId = $id;
		//$query = $this->db->query("select * from Products_Comment where productId='".$this->productId."';");
		//return $query->result_array();
		$res = $this->db->get_where('Products_Comment', array('productId' => $this->productId));
		return $res->result_array();
	}


}
