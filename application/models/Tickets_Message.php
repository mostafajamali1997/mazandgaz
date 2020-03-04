<?php


class Tickets_Message extends CI_Model
{
	private $id;
	private $ticketId;
	private $sender_username;
	private $titleOfGroup;
	private $text;
	private $haveAttachment;
	private $ifHaveAttachmentWhatsFilename;
	private $doesSee;
	private $senderIp;
	private $senderUserAgent;
	private $dateTimeOfSent;
	private $viewStatus;
	private $ifEmployee;
	private $whatsRate;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');

	}

	public function addTicketMessage()
	{
		$this->ticketId = $this->input->post('ticketId');
		$this->sender_username = $this->input->post('sender_username');
		$this->titleOfGroup = $this->input->post('titleOfGroup');
		$this->text = $this->input->post('text');
		$this->haveAttachment = $this->input->post('haveAttachment');
		$this->ifHaveAttachmentWhatsFilename = $this->input->post('ifHaveAttachmentWhatsFilename');

		$this->senderIp = $this->input->ip_address();
		$this->senderUserAgent = $this->agent->version() . $this->agent->platform() . $this->agent->browser();

		$data = array(
			'ticketId' => $this->ticketId,
			'sender_username' => $this->sender_username,
			'titleOfGroup' => $this->titleOfGroup,
			'text' => $this->text,
			'haveAttachment' => $this->haveAttachment,
			'ifHaveAttachmentWhatsFilename' => $this->ifHaveAttachmentWhatsFilename,
			'senderIp' => $this->senderIp,
			'senderUserAgent' => $this->senderUserAgent,
		);

		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Tickets_Message');
	}

	public function getTicketMessages()
	{
		$this->ticketId = $this->input->post('ticketId');
		$query = $this->db->query("select * from Tickets_Message where ticketId='" . $this->ticketId . "';");
		return $query->result_array();
	}

}
