<?php

class offensecate_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('oc_ID', 'desc');
        $query = $this->db->get('offensecate');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function addoffensecate(){
        $field = array(
            'oc_ID'=>$this->input->post('txtID'),
            'oc_desc'=>$this->input->post('txtname'),
           
            
            );
        $this->db->insert('offensecate', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
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
        $field = array(
        'oc_desc'=>$this->input->post('txteditname'),
    

        );
        $this->db->where('oc_ID', $id);
        $this->db->update('offensecate', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function deleteoffensecate(){
         $id = $this->input->post('txtdelID');
        /*
        $field = array(
        'active_track'=> '1'

        );*/
         
        $this->db->where('oc_ID', $id);
        $this->db->delete('offensecate');
        //$this->db->update('offensecate', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function import_exceloffensecate(){
        $this->load->view('import_exceloffensecate');
        
        
        
        
    }
    
   
    
    
    
    
}