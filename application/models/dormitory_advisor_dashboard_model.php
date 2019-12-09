<?php

class dormitory_advisor_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    public function getDashboard(){

        $dean=$this->session->userdata('username');
        //  $dean=5060156;
        $this->db->distinct();
        $this->db->select('oc.oc_ID,oc.oc_desc as label,count(ostd.S_ID) as countstd');   
        $this->db->from('personnel p');
        $this->db->join('dormitory dm','p.person_ID=dm.person_ID');
        $this->db->join('student s','dm.dorm_ID=s.dorm_ID');  
        $this->db->join('offensestd ostd','s.S_ID=ostd.S_ID');  
        $this->db->join('offensehead o','ostd.oh_ID=o.oh_ID');
        $this->db->join('offense of','o.off_ID=of.off_ID');
        $this->db->join('offensecate oc','of.oc_ID=oc.oc_ID');
        $this->db->group_by('oc.oc_ID');
        $this->db->where('p.person_ID',$dean);
        // $this->db->where('p.dept_ID=d.dept_ID');



        $query = $this->db->get();
        $data = array();
        $data = $query->result_array();
        $calnumstd =0;
        foreach($data as $value){
            $cal = intval($value['countstd']);
            $calnumstd += $cal;
        }
       $data['numstd'] = $calnumstd;
         //var_dump($data);
         //die();
        if($data !=NULL){
            return $data;
        }else{
            return false;
        }
    }

    public function getAllSTD(){
    $dorm=$this->session->userdata('username');
    
    // $perid = 7054545;
    //SELECT DISTINCT offensestd.S_ID,student.std_fname,student.std_lname,student.behavior_score FROM offensestd,student WHERE offensestd.S_ID=student.S_ID
    //  $cur_ID = $_GET['cur_ID'];
    // $cur_ID = 18;
    $this->db->distinct();
    $this->db->select('ostd.S_ID,s.std_fname,s.std_lname,s.behavior_score,dm.room_number,og.num_of');
    //$this->db->select('*');
    $this->db->distinct();
    $this->db->from('personnel p');
    $this->db->join('dormitory dm','p.person_ID=dm.person_ID');
    $this->db->join('student s','dm.dorm_ID=s.dorm_ID');  
    $this->db->join('offensestd ostd','s.S_ID=ostd.S_ID');  
    $this->db->join('offensehead o','ostd.oh_ID=o.oh_ID');
    $this->db->join('offense of','o.off_ID=of.off_ID');
    $this->db->join('offensecate oc','of.oc_ID=oc.oc_ID');
    $this->db->join('offcategory og','s.S_ID=og.S_ID');
    $this->db->group_by('S_ID');
    $this->db->where('p.person_ID',$dorm);
    // $this->db->where('p.cur_ID=p.cur_ID');
    $query = $this->db->get();
    $students = array();
    $student = $query->result_array();
    
    
    if($student > 0){
        return $student;
    }else{
        return false;
    }
}
    
    
    
}
