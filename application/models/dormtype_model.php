<?php

class dormtype_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    //ฟังก์ชันแสดงข้อมูลทั้งหมด จาก table dormtype โดยเรียงลำดับจาก dormtype_ID
 public function showAll(){
     $flag=1;
     
     $this->db->select('*');
     $this->db->from('Dormitory c'); // หมวดความผิด // หอพัก
     $this->db->join('DormType d', 'c.dormtype_ID=d.dormtype_ID'); // ฐานความผิด  // ประเภทหอพัก
     //$this->db->order_by('off_ID', 'ASC');
     $this->db->where('flagg', $flag);
     $query = $this->db->get();
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
    
    public function checknamedormtype($namedormtype){
        $this->db->where('type_name',$namedormtype);
        $query = $this->db->get('dormtype');
        
        if($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable dromtype
    public function adddormtype(){
       
           // ไม่เหมือน offense เช็คใหม่
        $dormtypename = $this->input->post('txtname');
        $dormtypename = trim($dormtypename);
        $checkname = $this->checknamedormtype($dormtypename);
        if($checkname == true){
            return "falsename";
            
            
        }else{
            $field = array(
                'dormtype_ID'=>$this->input->post('txtID'),
                'type_name'=>$dormtypename,
                'flag'=>'1'
                
                // 'description'=>$this->input->post('txtdescription')
                
                  );
       $this->db->insert('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
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
        $editdormtypename = $this->input->post('txteditname');
        $editdormtypename = trim($editdormtypename);
        $checkname = $this->checknamedormtype($editdormtypename);
        if($checkname == true){
            return "falsename";
            
            
        }else{
            $field = array(
                'type_name'=>$editdormtypename
                // 'description'=>$this->input->post('txteditdescription')
                
            );
            $this->db->where('dormtype_ID', $id);
            $this->db->update('dormtype', $field);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    }
    //ฟังก์ชันลบข้อมูลในtable dormtype
    function deletedormtype(){
         $id = $this->input->post('txtdelID');
         
         $field = array(
             'flag'=>'0'
             // 'description'=>$this->input->post('txteditdescription')
             
         );
         $this->db->where('dormtype_ID', $id);
         $this->db->update('dormtype', $field);
        
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
   
        
    
    
   
       
   
}
    
    
    
