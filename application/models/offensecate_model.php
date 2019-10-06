<?php

class offensecate_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('oc_ID', 'ASC');
        $query = $this->db->get('offensecate');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    public function checkkey(){
        $oc_ID = $this->input->post('oc_ID');
        $this->db->where('oc_ID', $oc_ID);
        $query = $this->db->get('offensecate');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    public function checknameoffensecate($nameoffensecate){
        $this->db->where('oc_desc',$nameoffensecate);
        $query = $this->db->get('offensecate');
        
        if($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    

    public function addoffensecate(){
        
    
        $oc_desc = $this->input->post('txtname');
        $oc_desc = trim($oc_desc);
        $checkname = $this->checknameoffensecate($oc_desc);
        if($checkname == true){
            return "falsename";
            
            
        }else{
            $field = array(
                'oc_ID'=>$this->input->post('txtID'),
                'oc_desc'=>$oc_desc
           
                
            );
            $this->db->insert('offensecate', $field);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    }

    public function editoffensecate(){
        $id = $this->input->get('id');
        $this->db->where('oc_ID', $id);
        $query = $this->db->get('offensecate');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

     
    public function updateoffensecate(){
        $id = $this->input->post('txteditID');
        $editoc_desc = $this->input->post('txteditname');
        $editoc_desc = trim($editoc_desc);
        $checkname = $this->checknameoffensecate($editoc_desc);
        if($checkname == true){
            return "falsename";
            
            
        }else{
            $field = array(
                'oc_desc'=>$editoc_desc
                
                
            );
            $this->db->where('oc_ID', $id);
            $this->db->update('offensecate', $field);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    }

    function deleteoffensecate(){
         $id = $this->input->post('txtdelID');
         $field = array(
             'flag'=> '0'
             
         );
         $this->db->where('oc_ID', $id);
         $this->db->delete('offense' ,$field);
       
         
        $this->db->where('oc_ID', $id);
        $this->db->delete('offensecate');
        //$this->db->update('offensecate', $field);
        if($this->db->affected_rows() > 0){
            
            $field = array(
                'flag'=> '0'
                
            ); 
            $this->db->where('oc_ID', $id);
            $this->db->update('offense' ,$field);
            if($this->db->affected_rows() > 0){
                
            return true;
        }else{
            return false;
        }
        }}
    public function import_exceloffensecate(){
        $this->load->view('import_exceloffensecate');
        
        
        
        
    }
    
   
    
    
    
    
}