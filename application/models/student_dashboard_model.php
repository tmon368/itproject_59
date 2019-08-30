<?php

class student_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentfirstpage(){
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('status st', 's.status_ID=st.status_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        
        
        $this->db->where('S_ID',$username);
        $query = $this->db->get();
        var_dump($query->result());
        
        /*
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }*/
    }
    
    
    
    public function selectdetailfirstpage(){
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('offensehead oh');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        
        
        $this->db->where('S_ID',$username);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
      
    
    
    
    
    
}