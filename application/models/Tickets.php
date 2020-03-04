<?php


class Tickets extends CI_Model
{
	private $id;
	private $createdBy_username;
	private $createdDateTime;   //current timestamp database
	private $department;
	private $level;
	private $status;
	private $viewStatus;
	private $doesSeeByCompany;

	public function __construct()
	{
		parent::__construct();
	}

	public function addTicket()
	{
		$this->createdBy_username = $this->input->post('createdBy_username');
		$this->department = $this->input->post('department');
		$this->level = $this->input->post('level');

		$data = array(
			'createdBy_username' => $this->createdBy_username,
			'department' => $this->department,
			'level' => $this->level,
		);
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix . 'Tickets');
	}

	public function getAllTickets()
	{
		$res = $this->db->get('Tickets')->result_array();
		return $res;
	}

	public function getTicketsWithUsername()
	{   //TODO: username must be session data
		$this->createdBy_username = $this->input->post('createdBy_username');
		$query = $this->db->query("select * from Tickets where createdBy_username='" . $this->createdBy_username . "';");
		return $query->result_array();
	}

	public function getTicketsDoesNotSee()
	{
		$query = $this->db->query("select * from Tickets where doesSeeByCompany=0");
		return $query->result_array();
	}

	public function setDoesSeeByCompany()
	{
		$this->doesSeeByCompany = $this->input->post('doesSeeByCompany');
		$this->id = $this->input->post('id');
		$query = $this->db->query("update Tickets set doesSeeByCompany='" . $this->doesSeeByCompany . "';");
		echo $query;
	}

	public function setStatus()
	{
		$this->status = $this->input->post('status');
		$this->id = $this->input->post('id');
		$query = $this->db->query("update Tickets set status='" . $this->status . "';");
		echo $query;
	}

	public function setViewStatus()
	{
		$this->viewStatus = $this->input->post('viewStatus');
		$this->id = $this->input->post('id');
		$query = $this->db->query("update Tickets set viewStatus='" . $this->viewStatus . "';");
		echo $query;
	}

}
