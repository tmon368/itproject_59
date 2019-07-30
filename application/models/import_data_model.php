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
	
	public function checkimport($BUILDID)
	{
	    $BUILDID = $this->input->get($BUILDID);
	    $this->db->where('place_ID', $BUILDID);
	    $query = $this->db->get('place');
	    if($query->num_rows() == 0){
	        return true;
	    }else{
	        return false;
	    }
	    
	}
	
	public function updateplace($data)
	{
	    $BUILDID = $data->$BUILDID;
	    $BUILDTHNAME=$data->$BUILDTHNAME;
	    $this->db->where('place_ID', $BUILDID);
	    $this->db->update('place', $BUILDTHNAME);
	    if($this->db->affected_rows() > 0){
	        return true;
	    }else{
	        return false;
	    }
	    
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
	
	
	
	function clearvalue()
	{
	    $this->db->truncate('place');
	  
	}
	
	
	
}
