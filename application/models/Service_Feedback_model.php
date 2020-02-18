<?php

class Service_Feedback_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }


    function selectservice(){
        $usergroup =$this->session->userdata('student') == null ? "":$this->session->userdata('student');
    if($usergroup == ""){
    $usergroup =$this->session->userdata('admin') == null ? "":$this->session->userdata('admin');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('teacher') == null ? "":$this->session->userdata('teacher');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('discipline_officer') == null ? "":$this->session->userdata('discipline_officer');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('headofstudent_affairs') == null ? "":$this->session->userdata('headofstudent_affairs');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('dormitory_supervisor') == null ? "":$this->session->userdata('dormitory_supervisor');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('dormitory_advisor') == null ? "":$this->session->userdata('dormitory_advisor');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('branch_head') == null ? "":$this->session->userdata('branch_head');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('dean') == null ? "":$this->session->userdata('dean');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('security_guard') == null ? "":$this->session->userdata('security_guard');
    }
    if($usergroup == ""){
    $usergroup =$this->session->userdata('employee') == null ? "":$this->session->userdata('employee');
    }
        //$usergroup = "jsomsri";
        // echo $usergroup;
        //die();


        $this->db->select('s.service_ID,s.service_name,s.proposer,s.place,s.service_date,s.start_time,s.end_time,s.received,s.number_of,s.status,std.std_fname,std.std_lname,std.sex,std.email,std.phone,std.behavior_score');
        $this->db->from('service s');
        $this->db->join('student std', 's.proposer=std.S_ID');
        $this->db->join('personnel p', 's.person_ID=p.person_ID');
        $this->db->where('p.username', $usergroup);
        $query = $this->db->get();
    //    var_dump($query->result());
    //    die();
      
       if($query->num_rows() > 0){
           return $query->result();
       }else{
           return false;
       }

    }




}