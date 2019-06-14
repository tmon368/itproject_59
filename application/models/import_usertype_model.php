<?php
class import_usertype_model extends CI_Model
{
    // select from usertype
	function selectusertype()
	{
		$this->db->order_by('usertype_ID', 'DESC');
		$query = $this->db->get('usertype');
		return $query->result();
	}
	function inserttmp_usertype($datatmp)
	{
	    
	    $this->db->insert('tmp_place',$datatmp);
	}
	
    //insert usertype
	function insertusertype($data)
	{
	    
		$this->db->insert('tmp_usertype',$data);
	}
	
	function updateusertype($BUILDID,$dataupdate)
	{
	    $this->db->where('usertype_ID', $BUILDID);
	    $this->db->update('usertype', $dataupdate);
	     
	}
	
	function clearvalue()
	{
	    $this->db->truncate('tmp_usertype');
	  
	}
	
	//
	
}
