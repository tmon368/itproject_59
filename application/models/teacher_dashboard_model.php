<?php

class teacher_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
    
    public function selectscorestudent(){
        //SELECT COUNT(DISTINCT S_ID) FROM offensestd
        $this->db->select('COUNT(DISTINCT S_ID) as numberstudent');
        $this->db->from('offensestd');



    
        
        // $this->db->join('offevidence ov', 'o.oh_ID=ov.oh_ID');
         //$this->db->join('offensestd os', 'ov.oh_ID=os.oh_ID');
         $query = $this->db->get();
         //var_dump($query->result());
         //die();
         if($query->num_rows() > 0){
             
             return $query->row();
         }else{
             return false;
         }
     }



     public function selectstudentall(){
        //$student = $this->session->userdata('student');
        //SELECT DISTINCT offensestd.S_ID,student.std_fname,student.std_lname,student.behavior_score FROM offensestd,student WHERE offensestd.S_ID=student.S_ID


        $this->db->distinct();
        $this->db->order_by('s.behavior_score', 'ASC');
        $this->db->select('ostd.S_ID,s.std_fname,s.std_lname,s.behavior_score');
        //$this->db->select('*');
        $this->db->from('offensestd ostd');
        $this->db->join('student s','ostd.S_ID=s.S_ID');

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