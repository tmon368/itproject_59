<?php

class usertype_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('usertype_ID', 'desc');
        $query = $this->db->get('usertype');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function addusertype(){
        $field = array(
            'usertype_ID'=>$this->input->post('userID'),
            'usertype_name'=>$this->input->post('username')  
            );
        $this->db->insert('usertype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editusertype(){
        $id = $this->input->get('id');
        $this->db->where('usertype_ID', $id);
        $query = $this->db->get('usertype');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false; 
        }
    }

    public function updateusertype(){
        $id = $this->input->post('typeeditID');
        $field = array(
        'usertype_name	'=>$this->input->post('typeeditname'),
    

        );
        $this->db->where('usertype_ID', $id);
        $this->db->update('usertype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    function deleteusertype(){
            $id = $this->input->post('usertypeID');
            /*
             $field = array(
             'active_track'=> '1'
             
             );*/
            $this->db->where('usertype_ID', $id);
            $this->db->delete('usertype');
            //$this->db->update('offensecate', $field);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
        public function import_excelusertype(){
            $this->load->view('import_excelusertype');
                 
            
        }
        
    
}