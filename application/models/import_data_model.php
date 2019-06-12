<?php
class import_data_model extends CI_Model
{
    // select from place
	function selectplace()
	{
		$this->db->order_by('place_ID', 'DESC');
		$query = $this->db->get('place');
		return $query->result();
	}
    //insert place
	function insertplace($data)
	{
	    
		$this->db->insert('tmp_place',$data);
	}
	
	function updateplace($BUILDID,$dataupdate)
	{
	    $this->db->where('place_ID', $BUILDID);
	    $this->db->update('place', $dataupdate);
	    
	   
	}
	
	function clearvalue()
	{
	    $this->db->truncate('tmp_place');
	  
	}
	
	
	
}
