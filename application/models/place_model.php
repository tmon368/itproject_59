<?php

class place_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable place โดยเรียงลำดับจาก place_ID
 public function showAll(){
        $this->db->order_by('place_ID', 'desc');
        $query = $this->db->get('place');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางplace
    public function checkkey(){
        $place_ID = $this->input->post('place_ID');
        $this->db->where('place_ID', $place_ID);
        $query = $this->db->get('place');
        if($query->num_rows($query) == 0){
            echo "true,<span style='color:green'>สามารถใช้งานได้</span>,";
        }
        else{
            echo "false,<span style='color:red'>ไม่สามารถใช้งานได้</span>,";
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable place
    public function addplace(){
        $field = array(
            'place_ID'=>$this->input->post('txtID'),
            'place_name'=>$this->input->post('txtname'),
            'description'=>$this->input->post('txtdescription')
            
            );
        $this->db->insert('place', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable place
    public function editplace(){
        $id = $this->input->get('id');
        $this->db->where('place_ID', $id);
        $query = $this->db->get('place');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable place
    public function updateplace(){
        $id = $this->input->post('txteditID');
        $field = array(
        'place_name'=>$this->input->post('txteditname'),
        'description'=>$this->input->post('txteditdescription')

        );
        $this->db->where('place_ID', $id);
        $this->db->update('place', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable place
    function deleteplace(){
         $id = $this->input->post('txtdelID');
         /*
        $field = array(
        'flag'=> '1'

        );*/
        $this->db->where('place_ID', $id);
        $this->db->delete('place');
        //$this->db->update('place', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_excelplace(){
        $this->load->view('import_excelplace');
        
        
        
        
    }
    
    
    
    
}