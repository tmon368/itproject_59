<?php

class holiday_model extends CI_Model {
    public function _construct() 
    {
        parent::_construct();
        
    }

public function findByYear($year){
    // // $this->db->select('*')
    // $this->db->from('holiday');
    // $this->db->where('YEAR(h_date)','2018');
    // // $this->db->like('')
    // $query = $this->db->get();
    // if($query->num_rows() > 0){
    //     return $query->result();
    // }else{
    //     return false;
    // }
    
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
        $id = $this->input->post('txteditid');
        $field = array(
        'h_date'=>$this->input->post('txtdate'),
        'description'=>$this->input->post('txtdescrip'),
        'h_type'=>$this->input->post('addtype'),

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