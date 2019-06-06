<?php

class holiday_model extends CI_Model {
    public function _construct() 
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('h_ID', 'desc');
        $this->db->where('active_track', '0');
        $query = $this->db->get('holiday');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function addholiday(){
        $field = array(
            'h_ID'=>$this->input->post('txtID'),
            'h_date'=>$this->input->post('txtdate'),
            'description'=>$this->input->post('txtdescrip'),
            'h_type'=>$this->input->post('addtype')

            
            );
        $this->db->insert('holiday', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editholiday(){
        $id = $this->input->get('id');
        $this->db->where('h_ID', $id);
        $query = $this->db->get('holiday');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updateholiday(){
        $id = $this->input->post('txteditID');
        $field = array(
        'h_ID'=>$this->input->post('txteditname'),
        'h_date'=>$this->input->post('editdate'),
        'description'=>$this->input->post('editdescrip'),
        'h_type'=>$this->input->post('edittype'),

        );
        $this->db->where('h_ID', $id);
        $this->db->update('holiday', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function deleteholiday(){
         $id = $this->input->post('txtdelID');
         
        $field = array(
        'active_track'=> '1'

        );
        $this->db->where('h_ID', $id);
        $this->db->update('holiday', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
}