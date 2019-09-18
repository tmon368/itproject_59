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
        $this->db->from('Service sv');
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

    function show_whereid(){
        //ส่ง id ไปให้ ชื่อตัวแปร id ส่งแบบ Get
        /*code*/    
        $id = $this->input->get('id');
        //$id=3;
        $this->db->select('*');
        $this->db->from('Service sv');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        $this->db->where('service_ID', $id);
        $query = $this->db->get();
        //var_dump($query->result());
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    

    }

   
}