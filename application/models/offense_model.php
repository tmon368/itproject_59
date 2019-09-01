<?php

class offense_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('off_ID', 'ASC');
        $query = $this->db->get('offense');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    public function checkkey(){
        $off_ID = $this->input->post('off_ID');
        $this->db->where('off_ID', $off_ID);
        $query = $this->db->get('offense');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }

    public function addoffense(){
        $field = array(
            'off_ID'=>$this->input->post('txtID'),
            'off_desc'=>$this->input->post('txtname'),
            'point'=>$this->input->post('txtpoint'),
            'oc_ID'=>$this->input->post('txt_oc'),
           
            
            );
        $this->db->insert('offense', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editoffense(){
        $id = $this->input->get('id');
        $this->db->where('off_ID', $id);
        $query = $this->db->get('offense');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updateoffense(){
        $id = $this->input->post('txteditID');
        $field = array(
        'off_desc'=>$this->input->post('txteditname'),
        'point'=>$this->input->post('txteditpoint'),
        'oc_ID'=>$this->input->post('txteditoc'),
    

        );
        $this->db->where('off_ID', $id);
        $this->db->update('offense', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function deleteoffense(){
         $id = $this->input->post('txtdelID');
        /*
        $field = array(
        'active_track'=> '1'

        );*/
         
        $this->db->where('off_ID', $id);
        $this->db->delete('offense');
        //$this->db->update('offense', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    function selectoffensecate()
    {
        $this->db->order_by('oc_ID','ASC');
        $query = $this->db->get('offensecate');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function import_exceloffense(){
        $this->load->view('import_exceloffense');
        
        
        
        
    }   
}