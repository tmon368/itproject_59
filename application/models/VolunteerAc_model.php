<?php

class VolunteerAc_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
   
 
    function showAll(){
      
         
        //$service_ID= $this->input->post('txtdelID');
        //$username=59123456;
        //echo $person_ID;
        // $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('service sv', 's.S_ID=sv.S_ID');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        //$this->db->where('s.S_ID', $username);
        $query = $this->db->get();
        //var_dump($query->result());
       
        if($query->result() > 0){
            return $query->result();
        }else{
            return false;
        }
        
    }
    //ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางstudent
    public function checkkey(){
        $service_ID = $this->input->post('service_ID');
        $this->db->where('service_ID', $service_ID);
        $query = $this->db->get('Service');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable student
    public function addVolunteerAc(){
    
    $field = array(
            
        'service_ID'=>$this->input->post('service_ID'),
        'service_name'=>$this->input->post('service_name'),
        'person_ID'=>$this->input->post('person_ID'),
        'S_ID'=>$this->input->post('S_ID'),
        'place'=>$this->input->post('place'),
        'service_date'=>$this->input->post('service_date'),
        'start_time'=>$this->input->post('start_time'),
        'end_time'=>$this->input->post('end_time'),
        'service_time'=>$this->input->post('service_time'),
        'service_hour'=>$this->input->post('service_hour'),
        'status'=>$this->input->post('status'),
        'results'=>$this->input->post('results'),
        'document_file'=>$this->input->post('document_file'),
        'explanation '=>$this->input->post('explanation ')

    );
        $this->db->insert('Service', $field);

    if($this->db->affected_rows() > 0){  


        return true;
    }else{
        return false;
    }

}
    
    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable student
    public function editVolunteerAc(){
        $id = $this->input->get('id');
        $this->db->where('service_ID', $id);
        $query = $this->db->get('Service');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updateVolunteerAc(){
        $id = $this->input->post('txteditID');
        $field = array(
            
            
        );
        $this->db->where('service_ID', $id);
        $this->db->update('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable student
    function deleteVolunteerAc(){
        $id = $this->input->post('txtdelID');
        
        $this->db->where('service_ID', $id);
        $this->db->delete('Service');
        //$this->db->update('Service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    
    function selectplace()
	{
	    $this->db->order_by('place_ID','ASC');
	    $query = $this->db->get('place');
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }

    
    
    public function import_excelVolunteerAc(){
        $this->load->view('import_excelVolunteerAc');
        
        
        
        
    }
    
    
    
    
}