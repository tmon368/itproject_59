<?php

class holiday_model extends CI_Model {
    public function _construct() 
    {
        parent::_construct();
        
    }
 
    public function findByYear($year){
        $this->db->select('*');
        $this->db->from('holiday');
        $this->db->where('YEAR(h_date)',$year);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
        
    }



        
    
    
 public function showAll($year){
    $this->db->select('DATE_ADD(h_date, INTERVAL 543 YEAR) AS dd, h_ID, description, h_type, active_track`');
    $this->db->where('active_track', '0');
    $this->db->where('Year(h_date)', $year-543);
    $this->db->order_by('h_ID', 'ASC');
            $query = $this->db->get('holiday');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function checkkey(){
        $place_ID = $this->input->post('h_ID');
        $this->db->where('h_ID', $h_ID);
        $query = $this->db->get('holiday');
        if($query->num_rows($query) == 0){
            echo "true,<span style='color:green'>สามารถใช้งานได้</span>,";
        }
        else{
            echo "false,<span style='color:red'>ไม่สามารถใช้งานได้</span>,";
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
        
        'h_date'=>$this->input->post('txtdate'),
        'description'=>$this->input->post('txteditname'),
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