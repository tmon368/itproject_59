<?php

class dormitory_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('dorm_ID', 'desc');
        $query = $this->db->get('dormitory');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function adddormitory(){
        $field = array(
            'dorm_ID'=>$this->input->post('txtID'),
            'dname'=>$this->input->post('txtname'),
            'dorm_type'=>$this->input->post('txttype')   
            
            );
        $this->db->insert('dormitory', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editdormitory(){
        $id = $this->input->get('id');
        $this->db->where('dorm_ID', $id);
        $query = $this->db->get('dormitory');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatedormitory(){
        $id = $this->input->post('txteditID');
        $field = array(
        'dname'=>$this->input->post('txteditname'),
        'dorm_type'=>$this->input->post('txtedittype'),
        );
        $this->db->where('dorm_ID', $id);
        $this->db->update('dormitory', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function deletedormitory(){
         $id = $this->input->post('txtdelID');
        /*
        $field = array(
        'active_track'=> '1'

        );*/
         
        $this->db->where('dorm_ID', $id);
        $this->db->delete('dormitory');
        //$this->db->update('offense', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function import_exceldormitory(){
        $this->load->view('import_exceldormitory');
        
        
        
        
    }
    
   
    
    
    
    
}