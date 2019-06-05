<?php
class import_data_model extends CI_Model
{
    // select from place
	function selectplace()
	{
		$this->db->order_by('place_ID', 'DESC');
		$query = $this->db->get('place');
		return $query;
	}
    //insert place
	function insertplace($data)
	{
		$this->db->insert('place',$data);
	}
	
	
	
}
