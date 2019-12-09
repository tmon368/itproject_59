<?php

class dormitory_supervisor_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboard(){

        // $headdorm=$this->session->userdata('username');
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
        $this->db->group_by('dm.dorm_ID');
        // $this->db->where('p.person_ID',$headdorm);
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
  
    
    
    
}
