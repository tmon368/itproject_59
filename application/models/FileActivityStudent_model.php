<?php

class FileActivityStudent_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        $this->load->helper('url', 'form');
        $this->load->helper('directory');
        $this->load->helper('number');
         
        
    }

    public function selectparticipationactivities(){
        $student = $this->session->userdata('student');
        $status = 1;
        $this->db->select('p.par_ID,p.confirm_name,p.certificat_date,p.activity_time,s.std_fname,s.std_lname,s.email,s.phone,s.behavior_score,sv.service_name,sv.place,sv.service_date,sv.start_time,sv.end_time,ps.person_fname,ps.person_lname');
        $this->db->from('participationactivities p');
        $this->db->join('student s', 'p.S_ID=s.S_ID');
        $this->db->join('service sv', 'p.service_ID=sv.service_ID');
        $this->db->join('personnel ps', 'sv.person_ID=ps.person_ID');
        $this->db->where('s.username', $student);
        $this->db->where('p.results', $status);
        $query = $this->db->get();
        $showall = array();
        $showall = $query->result_array();
        // var_dump($showall);
        // die();
        
    if($showall > 0){
        return $showall;
    }else{
        return false;
    }
}

public function Updatefileparticipationactivities(){
    $student = $this->session->userdata('student');
    $status = 1;
    $this->db->where('s.username', $student);
    $this->db->where('p.results', $status);
    $query = $this->db->get();
    $showall = array();
    $showall = $query->result_array();
    // var_dump($showall);
    // die();
    
if($showall > 0){
    return $showall;
}else{
    return false;
}
}


}