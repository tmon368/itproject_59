<?php

class student_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
  
    
    
    function selectstudent(){
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions dvs', 'c.dept_ID=dvs.dept_ID');
        $this->db->join('dormitory d', 's.dorm_ID=d.dorm_ID');
        $this->db->join('dormtype dt', 'd.dormtype_ID=dt.dormtype_ID');
        /*
         $this->db->join('state s', 't.state=s.state_id');
         $this->db->join('city ct', 't.city=ct.city_id');
         $this->db->order_by('t.id','desc');*/
        $this->db->where('S_ID',$username);
        $query = $this->db->get();
        //var_dump($query->result());
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    function selectcurriculum($cur_ID){
        //$id = $this->input->post('txtdelID');
       // $cur_ID = $this->session->userdata('cur_ID');
        $this->db->where('cur_ID', $cur_ID);
        $query = $this->db->get('curriculum');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    function selectdormitory($dorm_ID){
        //$id = $this->input->post('txtdelID');
        // $cur_ID = $this->session->userdata('cur_ID');
        $this->db->where('dorm_ID', $dorm_ID);
        $query = $this->db->get('dormitory');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    function selectdivisions($dept_ID){
        //$id = $this->input->post('txtdelID');
        // $cur_ID = $this->session->userdata('cur_ID');
        $this->db->where('dept_ID', $dept_ID);
        $query = $this->db->get('divisions');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    function selectdormtype($dormtype_ID){
        //$id = $this->input->post('txtdelID');
        // $cur_ID = $this->session->userdata('cur_ID');
        $this->db->where('dormtype_ID', $dormtype_ID);
        $query = $this->db->get('dormtype');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
    function selectpersonnel($person_ID){
        //$id = $this->input->post('txtdelID');
        //echo $person_ID;
        $username = $this->session->userdata('username');
        $this->db->where('person_ID', $person_ID);
        $query = $this->db->get('personnel');
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    function selectvehicles($username){
        //$id = $this->input->post('txtdelID');
        //echo $person_ID;
       // $username = $this->session->userdata('username');
        $this->db->where('S_ID', $username);
        $query = $this->db->get('vehicles');
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    
     //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable student โดยเรียงลำดับจาก student_ID
 public function showAll(){
       $this->db->order_by('S_ID', 'ASC');
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางstudent
    public function checkkey(){
        $S_ID = $this->input->post('S_ID');
        $this->db->where('S_ID', $S_ID);
        $query = $this->db->get('student');
        if($query->num_rows($query) == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    //ฟังก์ชันเพิ่มข้อมูล ลงในtable student
    public function addstudent(){
        $field = array(
            'S_ID'=>$this->input->post('txtID'),
            'student_name'=>$this->input->post('txtname'),
            'description'=>$this->input->post('txtdescription')
            
            );
        $this->db->insert('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable student
    public function editstudent(){
        $id = $this->input->get('id');
        $this->db->where('S_ID', $id);
        $query = $this->db->get('student');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable student
    public function updatestudent(){
        $id = $this->input->post('txteditID');
        $field = array(
        'student_name'=>$this->input->post('txteditname'),
        'description'=>$this->input->post('txteditdescription')

        );
        $this->db->where('S_ID', $id);
        $this->db->update('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable student
    function deletestudent(){
         $id = $this->input->post('txtdelID');
      
        $this->db->where('S_ID', $id);
        $this->db->delete('student');
        //$this->db->update('student', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function import_excelstudent(){
        $this->load->view('import_excelstudent');
        
        
        
        
    }
    
    
    
    
}