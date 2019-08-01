<?php

class dormtype_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    //ฟังก์ชันแสดงข้อมูลทั้งหมด จาก table dormtype โดยเรียงลำดับจาก dormtype_ID
 public function showAll(){
       $this->db->order_by('dormtype_ID', 'ASC');
        $query = $this->db->get('dormtype');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    //ฟังก์ชันตรวจสอบ id ซ้ำกัน ตาราง dromtype
    public function checkkey(){
        $dormtype_ID = $this->input->post('dormtype_ID');
        $this->db->where('dormtype_ID', $dormtype_ID);
        $query = $this->db->get('dormtype');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable dromtype
    public function adddormtype(){
        $field = array(
           
            'dormtype_ID'=>$this->input->post('txtID'),
            'type_name'=>$this->input->post('txtname')
            
            );
        $this->db->insert('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable dormtype
    public function editdormtype(){
        $id = $this->input->get('id');
        $this->db->where('dormtype_ID', $id);
        $query = $this->db->get('dormtype');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    //ฟังก์ชันอัพเดตข้อมูลในtable dormtype
    public function updatedormtype(){
        $id = $this->input->post('txteditID');
        $field = array(
        'type_name'=>$this->input->post('txteditname'),
    

        );
        $this->db->where('dormtype_ID', $id);
        $this->db->update('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable dormtype
    function deletedormtype(){
         $id = $this->input->post('txtdelID');
         
        $this->db->where('dormtype_ID', $id);
        $this->db->delete('dormtype');
        
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_exceldormtype(){
        $this->load->view('import_exceldormtype');
        
        
        
        
    }
    
   
       
    
}