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
        $this->db->join('student s', 'ostd.S_ID=s.S_ID');
        $this->db->join('offensehead oh', 'ostd.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
       // $this->db->join('proofargument pr', 's.S_ID=ostd.S_ID');
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
        
        //$student = $this->session->userdata('student');
        $id = $this->input->get('id');
        //$id = 37;
        /*
         $query = $this->db->get('offensestd');
         $this->db->where('offensestd_ID',$id);
         if($query->num_rows() > 0){
         return $query->row();
         }else{
         return false;
         }*/
        
        
        
        $this->db->select('*');
        $this->db->from('offensestd ostd');
        //$this->db->join('report r', 'ostd.offensestd_ID=r.offensestd_ID');
        $this->db->join('student s', 'ostd.S_ID=s.S_ID');
        //$this->db->join('proofargument pr', 'r.report_ID=r.report_ID');
        $this->db->join('offensehead oh', 'ostd.oh_ID=oh.oh_ID');
        $this->db->join('offevidence ovd', 'oh.oh_ID=ovd.oh_ID');
        $this->db->join('offense of', 'oh.off_ID=of.off_ID');
        $this->db->join('place p', 'oh.place_ID=p.place_ID');
        $this->db->where('ostd.offensestd_ID',$id);
        
        
        
        $query = $this->db->get();
        /*
         $student = array();
         $student = $query->result_array();
         
         */
        
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    
    public function selectoffenseforinsert(){
        
        //$student = $this->session->userdata('student');
        $id = $this->input->get('id');
       // $id = 37;
 

        $this->db->select('*');
        $this->db->from('offensestd ostd');
        $this->db->join('report r', 'ostd.offensestd_ID=r.offensestd_ID');
        $this->db->join('student s', 'ostd.S_ID=s.S_ID');
        $this->db->where('ostd.offensestd_ID',$id);
        
        
        
        $query = $this->db->get();
        /*
         $student = array();
         $student = $query->result_array();
         
         */
        
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    public function insertproofargument(){
        //$id = $this->input->post('txteditID');
        $field = array(
            'report_ID'=>$this->input->post('report_ID'),
            'S_ID'=>$this->input->post('S_ID'),
            'person_ID'=>$this->input->post('person_ID'),
            'proof_name'=>$this->input->post('proof_name'),
            'proof_date'=>$this->input->post('proof_date'),
            'Explanation'=>$this->input->post('Explanation'),
            'results'=> '0'
            
            
        );
        
        //var_dump($field);
        //die();
        // $this->db->where('place_ID', $id);
        $this->db->insert('proofargument', $field);
        
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
        
        
        
        
    }

    public function getoffenseID(){
        $getid = $this->input->post('offensestd_ID');
         $date = $this->input->post('report_date');
        //$id = $this->input->post('id');
        // $getid = [39,40];
        // $date = "2020-01-12";

        $id = $getid == null ? "" :  $getid;
        if($id == null){
            return false;
        }
        for($i=0;$i <count($id);$i++){
        $field = array(
            'offensestd_ID'=>$id[$i],
            'report_date'=>$date, 
            'report_status'=>'0',
            'reason'=>'testinsert'
            
        );
        $this->db->insert('report', $field);
   }

        //var_dump($field);
        //die();
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
        
        
        
        
    }
    
    
}