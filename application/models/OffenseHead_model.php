<?php

class OffenseHead_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectstudentoffensehead(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('status st', 's.status_ID=st.status_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        
        
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        var_dump($query->result());
        
        /*
         if($query->num_rows() > 0){
         return $query->result();
         }else{
         return false;
         }*/
    }
    
    function selectstudent(){
        $student = $this->session->userdata('student');
        
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions dvs', 'c.dept_ID=dvs.dept_ID');
        $this->db->join('dormitory d', 's.dorm_ID=d.dorm_ID');
        $this->db->join('dormtype dt', 'd.dormtype_ID=dt.dormtype_ID');
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
    
    
}