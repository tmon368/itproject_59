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
	function inserttmp_place($datatmp)
	{
	    
	    $this->db->insert('tmp_place',$datatmp);
	}
	
    //insert place
	function insertplace($data)
	{
	    
		$this->db->insert('place',$data);
	}
	
	
	function insertdormtype($data)
	{
	    
	    $this->db->insert('dormtype',$data);
	}
	
	function insertusertype($data)
	{
	    
	    $this->db->insert('usertype',$data);
	}
	
	function insertoffense($data)
	{
	    
	    $this->db->insert('offense',$data);
	}
	function insertoffensecate($data)
	{
	    
	    $this->db->insert('offensecate',$data);
	}
	function insertholiday($data)
	{
	    
	    $this->db->insert('holiday',$data);
	}
	
	function updateplace($BUILDID,$dataupdate)
	{
	    $this->db->where('place_ID', $BUILDID);
	    $this->db->update('place', $dataupdate);
	    
	   
	}
	
	function clearvalue()
	{
	    $this->db->truncate('place');
	  
	}
	
	
	
}
