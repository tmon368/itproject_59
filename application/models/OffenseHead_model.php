<?php

class OffenseHead_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable student โดยเรียงลำดับจาก student_ID
    public function showAll(){
        $this->db->order_by('oh_ID', 'ASC');
        $query = $this->db->get('OffenseHead');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    //ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางstudent
    public function checkkey(){
        $oh_ID = $this->input->post('oh_ID');
        $this->db->where('oh_ID', $oh_ID);
        $query = $this->db->get('OffenseHead');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable student
    public function addOffenseHead(){
        $field = array(
            'oh_ID'=>$this->input->post('txtID'),
            
        );
        $this->db->insert('OffenseHead', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable student
    public function editOffenseHead(){
        $id = $this->input->get('id');
        $this->db->where('oh_ID', $id);
        $query = $this->db->get('OffenseHead');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updateOffenseHead(){
        $id = $this->input->post('txteditID');
        $field = array(
            
            
        );
        $this->db->where('oh_ID', $id);
        $this->db->update('OffenseHead', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable student
    function deleteOffenseHead(){
        $id = $this->input->post('txtdelID');
        
        $this->db->where('oh_ID', $id);
        $this->db->delete('OffenseHead');
        //$this->db->update('OffenseHead', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_excelOffenseHead(){
        $this->load->view('import_excelOffenseHead');
        
        
        
        
    }
    
    
    
    
}