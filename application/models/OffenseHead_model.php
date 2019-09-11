<?php

class OffenseHead_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentoffensehead(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensestd ostd');
        $this->db->join('offensehead oh', 'ostd.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID'); 
        $this->db->join('place p', 'oh.place_ID=p.place_ID');
        $this->db->join('offevidence ov', 'oh.oh_ID=ov.oh_ID');
        $this->db->where('ostd.S_ID',$student);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        

        
        if($student > 0){
            return $student;
         }else{
         return false;
         }
    }
    
   public function selectoffenseorder(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensehead oh');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->where('oh.S_ID',$student);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        

        
        if($student > 0){
            return $student;
        }else{
            return false;
        }
    }
    
   
    
  
   
    
}