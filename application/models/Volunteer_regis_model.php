<?php

class Volunteer_regis_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
   
 
    function showAll(){
      
         
        //$service_ID= $this->input->post('txtdelID');
       //$student=59111111;
        //echo $person_ID;
    //$student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student s');
       $this->db->join('service sv', 's.S_ID=sv.S_ID');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        //$this->db->where('s.S_ID', $student);
        $query = $this->db->get();
        //var_dump($query->result());
        //die;
       
        if($query->result() > 0){
            return $query->result();
        }else{
            return false;
        }
        
    }

    function show_whereid (){
        //ส่ง id ไปให้
        /*code*/    
    

    }
}