<?php

#TODO: delete echo
class Financial_BaseProductGroup extends CI_Model
{
	private $id; //auto increment
	private $title;
	private $description;
	private $sortNumber;

	public function __construct()
	{
		parent::__construct();
	}

	public function addBaseProductGroup()
	{
		$this->title = $this->input->post('title');
		$this->description = $this->input->post('description');
		$this->sortNumber = $this->input->post('sortNumber');

		$data = array(
			'title' => $this->title,
			'description' => $this->description,
			'sortNumber' => $this->sortNumber,
		);

		$this->db->insert('Financial_BaseProductGroup', $data);
	}


	public function editBaseProductGroup()
	{
		$this->id = $this->input->post('id');
		$this->title = $this->input->post('title');
		$this->description = $this->input->post('description');
		$this->sortNumber = $this->input->post('sortNumber');
		$data = array(
			'title' => $this->title,
			'description' => $this->description,
			'sortNumber' => $this->sortNumber,
		);

		//$query = $this->db->query("update Financial_BaseProductGroup set title='".$this->title
		//."', description='".$this->description."', sortNumber='".$this->sortNumber."' where id=".$this->id.";");
		$this->db->set($data);
		$this->db->where('id', $this->id);
		$this->db->update('Financial_BaseProductGroup');


	}


	public function deleteBaseProductGroup()
	{
		$this->id = $this->input->post('id');
		//$query = $this->db->query("delete from Financial_BaseProductGroup where id='".$this->id."';");
		$this->db->where('id', $this->id);
		$this->db->delete('Financial_BaseProductGroup');


	}

	public function getAllBaseGroupProduct()
	{
		$res = $this->db->get('Financial_BaseProductGroup')->result_array();
		return $res;
	}

}
