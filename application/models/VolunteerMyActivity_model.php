<?php

class VolunteerMyActivity_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    function deletemyactivity(){
        $par_ID = $this->input->post('par_ID');
        // $par_ID = 0;

        $this->db->where('par_ID', $par_ID);
        $this->db->delete('participationactivities');
        //$this->db->update('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
}