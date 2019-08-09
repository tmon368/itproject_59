<?php

class dormitory_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
         
    }
    
    
 public function showAll(){
        $this->db->order_by('dorm_ID', 'ASC');
        $query = $this->db->get('dormitory');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    public function checkkey(){
        $dorm_ID= $this->input->post('dorm_ID');
        $this->db->where('dorm_ID', $dorm_ID);
        $query = $this->db->get('dormitory');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    public function adddormitory(){
        $field = array(
            'dorm_ID'=>$this->input->post('dormID'),
            'dname'=>$this->input->post('dormname'),
            'dorm_type'=>$this->input->post('dormtype')
 
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
        $id = $this->input->post('dormeditID');
        $field = array(
        'dname'=>$this->input->post('dormeditname'),
        'dorm_type'=>$this->input->post('dormedittype'),
    
            
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
         $id = $this->input->post('dormdelID');   
        $this->db->where('dorm_ID', $id);
        $this->db->delete('dormitory');
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