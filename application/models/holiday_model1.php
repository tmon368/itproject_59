<?php

class holiday_model1 extends CI_Model {
    public function _construct() 
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('hh_ID', 'desc');
        $this->db->where('active_track', '0');
        $query = $this->db->get('holiday1');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function addholiday(){
        $field = array(
            'hh_ID'=>$this->input->post('txtID'),
            'h_year'=>$this->input->post('txtdate'),
            

            
            );
        $this->db->insert('holiday1', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editholiday(){
        $id = $this->input->get('id');
        $this->db->where('hh_ID', $id);
        $query = $this->db->get('holiday1');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updateholiday(){
        $id = $this->input->post('txteditID');
        $field = array(
        'hh_ID'=>$this->input->post('txteditname'),
        'h_year'=>$this->input->post('editdate'),
        

        );
        $this->db->where('hh_ID', $id);
        $this->db->update('holiday1', $field);
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
        $this->db->where('hh_ID', $id);
        $this->db->update('holiday1', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
}