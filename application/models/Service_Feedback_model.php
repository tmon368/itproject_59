<?php

class Service_Feedback_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }


    //select ข้อมูลที่บุคลากรแต่ละคนต้องอนุมัติ   
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
        $status =0;


        $this->db->select('s.service_ID,s.service_name,s.proposer,s.place,s.service_date,s.start_time,s.end_time,s.received,s.number_of,s.status,std.std_fname,std.std_lname,std.sex,std.email,std.phone,std.behavior_score,ut.usertype_name,s.explanation,p.person_fname,p.person_lname,p.position');
        $this->db->from('service s');
        $this->db->join('student std', 's.proposer=std.S_ID');
        $this->db->join('personnel p', 's.person_ID=p.person_ID');
        $this->db->join('usertype ut', 'std.usertype_ID=ut.usertype_ID');
        
        $this->db->where('p.username', $usergroup);
        $this->db->where('s.status',$status);
        $query = $this->db->get();
    //    var_dump($query->result());
    //    die();
      
       if($query->num_rows() > 0){
           return $query->result();
       }else{
           return false;
       }

    }


    //รออนุมัติการเสนอกิจกรรมบำเพ็ญประโยชน์ สำหรับบุคลากร
    function Updateactivityforperson(){
        $service_ID = $this->input->get('service_ID');
        $getstatus = $this->input->get('status');
        $getannotation = $this->input->get('annotation');
        // $getexplanation = "อิอิ";
        // $service_ID =2;
        // $status = 1;

        // 2 =อนุมัติ 3=ไม่อนุมัติ
        $status = $getstatus == 1? $getstatus: 3;
        $annotation =$status == 1?  "":  $getannotation; 
        
        $field = array(
                
            'status'=>$status,
            'annotation'=>$annotation 
    );
    $this->db->where('service_ID',$service_ID);
    $this->db->update('service', $field);

        //$query = $this->db->get();
    //    var_dump($query->result());
    //    die();
      
       if($this->db->affected_rows() > 0){
           return true;
       }else{
           return false;
       }

    }

    function Updateactivityfordiscipline_officer(){
        $service_ID = $this->input->get('service_ID');
        $getstatus = $this->input->get('status');
        $getannotation = $this->input->get('annotation');
        //  $getexplanation = "อิอิ";
        //  $service_ID =3;
        //  $getstatus = 0;

         $annotation =$getstatus == 1?  "": $getannotation; 
         // 2 =อนุมัติ 3=ไม่อนุมัติ
         $status = $getstatus == 1? 2: 3;
        
        
        $field = array(
                
            'status'=>$status,
            'annotation'=>$annotation 
    );
    $this->db->where('service_ID',$service_ID);
    $this->db->update('service', $field);

        //$query = $this->db->get();
    //    var_dump($query->result());
    //    die();
      
       if($this->db->affected_rows() > 0){
           return true;
       }else{
           return false;
       }

    }




}