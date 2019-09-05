<?php

class OffenseHead_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentoffensehead(){
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
    
    public function selectoffenseorder(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensehead oh');
        $this->db->join('student s', 'oh.S_ID=s.S_ID');
        $this->db->join('place p', 'oh.place_ID=p.place_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->join('offevidence od', 'oh.oh_ID=od.oh_ID');
        $this->db->where('oh.S_ID',$student);
        $query = $this->db->get();
        $offenseorder = array();
        $offenseorder = $query->result_array();
        

        
        if($offenseorder > 0){
            return $offenseorder;
        }else{
            return false;
        }
    }
    
    public function showAll(){
        $this->db->order_by('S_ID', 'desc');
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
  
    public function addoffensehead(){
        $field = array(
            'proof_ID'=>$this->input->post('txtproofid'),
            'explanation'=>$this->input->post('txtexplanation'),
            'proof_name'=>$this->input->post('txtproofname')
            
        );
        $this->db->insert('proofargument', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
}