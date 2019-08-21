<?php

class student_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
    function selectstudent(){
        //$id = $this->input->post('txtdelID');
        $username = $this->session->userdata('username');
       $this->db->where('S_ID', $username);
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
     //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable student โดยเรียงลำดับจาก student_ID
 public function showAll(){
       $this->db->order_by('S_ID', 'ASC');
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางstudent
    public function checkkey(){
        $S_ID = $this->input->post('S_ID');
        $this->db->where('S_ID', $S_ID);
        $query = $this->db->get('student');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable student
    public function addstudent(){
        $field = array(
            'S_ID'=>$this->input->post('txtID'),
            'student_name'=>$this->input->post('txtname'),
            'description'=>$this->input->post('txtdescription')
            
            );
        $this->db->insert('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable student
    public function editstudent(){
        $id = $this->input->get('id');
        $this->db->where('S_ID', $id);
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updatestudent(){
        $id = $this->input->post('txteditID');
        $field = array(
        'student_name'=>$this->input->post('txteditname'),
        'description'=>$this->input->post('txteditdescription')

        );
        $this->db->where('S_ID', $id);
        $this->db->update('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable student
    function deletestudent(){
         $id = $this->input->post('txtdelID');
      
        $this->db->where('S_ID', $id);
        $this->db->delete('student');
        //$this->db->update('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_excelstudent(){
        $this->load->view('import_excelstudent');
        
        
        
        
    }
    
    
    
    
}