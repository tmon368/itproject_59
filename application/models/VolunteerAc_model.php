<?php

class VolunteerAc_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    /*
    function spc_showshow(){
        $id = $this->input->get('id');
       // $id='L62101';
        $this->db->select('*');
        $this->db->from('offensehead o');
        $this->db->join('place p', 'o.place_ID=p.place_ID');
        $this->db->join('offensestd ov', 'o.oh_ID=ov.oh_ID');
        $this->db->join('Offense os', 'o.off_ID=os.off_ID');
        $this->db->join('vehicles v', 'ov.S_ID=v.S_ID');
        $this->db->join('offensecate oc', 'os.oc_ID=oc.oc_ID');
        $this->db->join('student s', 'ov.S_ID=s.S_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        $this->db->where('o.oh_ID' ,$id);
      $query = $this->db->get();
      $showall = array();
      $showall = $query->result_array();
      //var_dump($query->result());
      //die();

  if($showall > 0){
      return $showall;
  }else{
      return false;
  }
}
*/
 
    function showAll(){
      
         $i=0;
        //$service_ID= $this->input->post('txtdelID');
       // $student=59123456;
        //echo $person_ID;

   // $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('service sv');

        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        //$this->db->where('s.S_ID', $student);
        //var_dump($query->result());
       
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        foreach($student as $value){
            $data = $value['status'];
            $start_time = date_format(date_create($value['start_time']),"H:i");
            $end_time = date_format(date_create($value['end_time']),"H:i");
            $status = $this->utilstatus($data);

        
        $student[$i]["statusname"] = $status;
        $student[$i]["start_time"] = $start_time;
        $student[$i]["end_time"] = $end_time;
        $i++;
    }
        //var_dump($student);   
       // die();     
        if($student > 0){
            return $student;
        }else{
            return false;
        }
    }  
    public function utilstatus($statusID){

        $data = array("รอผลการเสนอ","อนุมัติ");
        return $data[$statusID];
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
            
       // 'service_ID'=>$this->input->post('service_ID'),
        'service_name'=>$this->input->post('service_name'),
        'person_ID'=>$this->input->post('person_ID'),
        'proposer'=>$this->session->userdata('student'),
        'place'=>$this->input->post('place'),
        'service_date'=>$this->input->post('service_date'),
        'start_time'=>$this->input->post('start_time'),
        'end_time'=>$this->input->post('end_time'),
        'status'=>'0',
        'received'=>$this->input->post('received'),
        'number_of'=>'50',
       //'results'=>$this->input->post('results'),
        //'annotation'=>$this->input->post('annotation'),
        //'document_file'=>$this->input->post('document_file'),
        'explanation'=>$this->input->post('explanation')

    );
    
 
//var_dump($field);
//die();
        $this->db->insert('service', $field);

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
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updateVolunteerAc(){
        $id = $this->input->post('txteditID');
        $field = array(
            
            // 'service_ID'=>$this->input->post('service_ID'),
             'service_name'=>$this->input->post('service_name'),
             'person_ID'=>$this->input->post('person_ID'),
             'proposer'=>$this->session->userdata('student'),
             'place'=>$this->input->post('place'),
             'service_date'=>$this->input->post('service_date'),
             'start_time'=>$this->input->post('start_time'),
             'end_time'=>$this->input->post('end_time'),
             'status'=>'0',
             'received'=>$this->input->post('received'),
             'number_of'=>'50',
            //'results'=>$this->input->post('results'),
             //'annotation'=>$this->input->post('annotation'),
             //'document_file'=>$this->input->post('document_file'),
             'explanation'=>$this->input->post('explanation')
     
         );
        $this->db->where('service_ID', $id);
        $this->db->update('service', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    //ฟังก์ชันลบข้อมูลในtable student
    function deleteVolunteerAc(){
        $sid = $this->input->post('delID');

        $this->db->where('service_ID', $sid);
        $this->db->delete('service');
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
	    
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    }



    function selectservice()
	{
	    $this->db->order_by('service_ID','ASC');
	    $query = $this->db->get('Service');
	    
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    }
    function selectperson()
	{
	 

        $keyword1 = $_POST["query"];
        $this->db->like('person_fname', $keyword1, 'both'); 
        $this->db->order_by('person_ID','ASC');
        
	    $query = $this->db->get('personnel');
	    
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    }
 

    function selectapersennel()
	{
        $this->db->select('*, CONCAT(person_fname, '  .'" "'. ', person_lname) AS fullname');
        $this->db->from('personnel');
        $query = $this->db->get();

	    
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    }
  
    function showdetail(){
        
        $i=1;
        $id = $this->input->get('id');
        $this->db->select('*');
        $this->db->from('service sv'); 
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID'); 
        $this->db->where('sv.service_ID', $id);
        $query = $this->db->get();
        $service = array();
        $service = $query->result_array();
        foreach($service as $i){
          
            $i++;
        }
        //var_dump($student);
        // die();
        if($service> 0){
            return $service;
        }else{
            return false;
        }
    }
    
}