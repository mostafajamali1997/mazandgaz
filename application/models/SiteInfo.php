<?php


class SiteInfo extends CI_Model
{
    
	public function __construct()
	{
		parent::__construct();
	}

        
        public function getSiteInfo(){
            $query = $this->db->query("select * from Site_Info limit 1");
            return $query->result_array();
        }
}
