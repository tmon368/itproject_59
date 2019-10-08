<?php

class student_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }



    public function selectstudentname(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        if($student > 0){
            return $student;
        }else{
            return false;
        }

        }
    
    public function selectstudentstatus(){
        $i=0;
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensestd os');
        $this->db->join('offensehead oh', 'os.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');     
        $this->db->where('os.S_ID',$student);
        
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        foreach($student as $value){
            
            $data = $value['statusoff'];
            $status = $this->utilstatus($data);
            $student[$i]["statusoffname"] = $status;
            $i+=1;

        }
        
        //var_dump($student);   
       // die();     
        if($student > 0){
            return $student;
        }else{
            return false;
        }
    }  
    public function utilstatus($statusID){

        $data = array("รอรายงานตัว","รอการอนุมัติหลักฐาน","หมดเขตการรายงานตัวกรุณาติดต่อเจ้าหน้าที่"   ,
                                                 "รอการอบรม","รอการบำเพ็ญประโยชน","รอการรับรองกิจกรรม",
        ,"เกินระยะเวลาการบำเพ็ญประโยชน์กรุณาติดต่อเจ้าหน้าที่","คืนคะแนนความประพฤติ"     );
        return $data[$statusID];
    }  


    public function selectstudentfirstpage(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('status st', 's.status_ID=st.status_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        
        
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    
    
    
    public function selectdetailfirstpage(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('offensehead oh');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->join('Offensestd os', 'os.offensestd_ID=ot.offensestd_ID');
        
        
        $this->db->where('S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
      
    public function selectstudentpoint(){
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->where('s.S_ID',$student);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    
    
}