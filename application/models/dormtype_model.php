<?php

class dormtype_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
 public function showAll(){
        $this->db->order_by('dormtype_ID', 'desc');
        $query = $this->db->get('dormtype');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function adddormtype(){
        $field = array(
           
            'dormtype_ID'=>$this->input->post('txtID'),
            'type_name'=>$this->input->post('txtname')
            
            );
        $this->db->insert('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editdormtype(){
        $id = $this->input->get('id');
        $this->db->where('dormtype_ID', $id);
        $query = $this->db->get('dormtype');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatedormtype(){
        $id = $this->input->post('txteditID');
        $field = array(
        'type_name'=>$this->input->post('txteditname'),
    

        );
        $this->db->where('dormtype_ID', $id);
        $this->db->update('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function deletedormtype(){
         $id = $this->input->post('txtdelID');
        /*
        $field = array(
        'active_track'=> '1'

        );*/
        $this->db->where('dormtype_ID', $id);
        $this->db->delete('dormtype');
        //$this->db->delete('dormtype', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function import_exceldormtype(){
        $this->load->view('import_exceldormtype');
        
        
        
        
    }
    
   
    
    
    
    
}