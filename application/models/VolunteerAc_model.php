<?php

class VolunteerAc_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable student โดยเรียงลำดับจาก student_ID
    public function showAll(){
        $this->db->order_by('service_ID', 'ASC');
        $query = $this->db->get('Service');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    //ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางstudent
    public function checkkey(){
        $service_ID = $this->input->post('service_ID');
        $this->db->where('service_ID', $service_ID);
        $query = $this->db->get('Service');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable student
    public function addVolunteerAc(){
        $field = array(
            'service_ID'=>$this->input->post('txtID'),
            
        );
        $this->db->insert('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable student
    public function editVolunteerAc(){
        $id = $this->input->get('id');
        $this->db->where('service_ID', $id);
        $query = $this->db->get('Service');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updateVolunteerAc(){
        $id = $this->input->post('txteditID');
        $field = array(
            
            
        );
        $this->db->where('service_ID', $id);
        $this->db->update('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable student
    function deleteVolunteerAc(){
        $id = $this->input->post('txtdelID');
        
        $this->db->where('service_ID', $id);
        $this->db->delete('Service');
        //$this->db->update('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_excelVolunteerAc(){
        $this->load->view('import_excelVolunteerAc');
        
        
        
        
    }
    
    
    
    
}