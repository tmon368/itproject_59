<?php

class Proofargument_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentproofargument(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('proofargument pfm');
        $this->db->join('report r', 'pfm.report_ID=r.report_ID');
        $this->db->join('offensestd os', 'r.offensestd_ID=os.offensestd_ID');
        $this->db->join('offensehead oh', 'os.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->where('pfm.S_ID',$student);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        
        
        
        if($student > 0){
            return $student;
        }else{
            return false;
        }
    }
    /*
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
    }*/
    
    
    
    
    
    
}