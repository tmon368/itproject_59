<?php

class headofstudent_affairs_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentstatus(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensestd os');
        $this->db->join('offensehead oh', 'os.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');     
        $this->db->where('os.S_ID',$student);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
     
        //var_dump($student);
        
        
        
        if($student > 0){
            return $student;
        }else{
            return false;
        }
    }
    
    public function selectstudentfirstpage(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('status st', 's.status_ID=st.status_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        
        
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
    public function selectdetailfirstpage(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensehead oh');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->join('Offensestd os', 'os.offensestd_ID=ot.offensestd_ID');
        
        
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
      
    
    
    
    
    
}
