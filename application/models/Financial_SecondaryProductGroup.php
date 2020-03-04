<?php
include('Financial_BaseProductGroup.php');


class Financial_SecondaryProductGroup extends Financial_BaseProductGroup
{
	private $id;
	private $title;
	private $description;
	private $sortNumber;
	private $baseProductGroupId;

	public function __construct()
	{
		parent::__construct();
	}

	public function addSecondaryProductGroup()
	{
		$this->title = $this->input->post('title');
		$this->description = $this->input->post('description');
		$this->sortNumber = $this->input->post('sortNumber');
		$this->baseProductGroupId = $this->input->post('baseProductGroupId');

		$data = array(
			'title' => $this->title,
			'description' => $this->description,
			'sortNumber' => $this->sortNumber,
			'baseProductGroupId' => $this->baseProductGroupId,
		);

		//$this->db->set($data);
		//$this->db->insert($this->db->dbprefix . 'Financial_SecondaryProductGroup');
		$this->db->insert('Financial_SecondaryProductGroup', $data);
	}

	public function editSecondaryProductGroup()
	{
		$this->id = $this->input->post('id');
		$this->title = $this->input->post('title');
		$this->description = $this->input->post('description');
		$this->sortNumber = $this->input->post('sortNumber');
		$this->baseProductGroupId = $this->input->post('baseProductGroupId');
		$data = array(
			'title' => $this->title,
			'description' => $this->description,
			'sortNumber' => $this->sortNumber,
		);

		//$query = $this->db->query("update Financial_SecondaryProductGroup set title='".$this->title
		//    ."' description='".$this->description."' sortNumber='".$this->sortNumber."'
		//    baseProductGroupId='".$this->baseProductGroupId."' where id='".$this->id."';");
		$this->db->set($data);
		$this->db->where('id', $this->id);
		$this->db->update('Financial_SecondaryProductGroup');
	}

	public function deleteSecondaryProductGroup()
	{
		$this->id = $this->input->post('id');
		//$query = $this->db->query("delete from Financial_SecondaryProductGroup where id='".$this->id."';");

		$this->db->where('id', $this->id);
		$this->db->delete('Financial_SecondaryProductGroup');
	}

	public function getAllSecondaryGroupProduct()
	{
		$res = $this->db->get('Financial_SecondaryProductGroup')->result_array();
		return $res;
	}

	public function getSecondaryProductGroupsWithBaseId($baseProductGroupId)
	{
		$this->baseProductGroupId = $baseProductGroupId;
		$res = $this->db->get_where('Financial_SecondaryProductGroup', array('baseProductGroupId' => $this->baseProductGroupId));
		return $res->result_array();
	}

}
