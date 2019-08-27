<?php

class Notifyoffense_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
         
        
    }
    
   /*
    function selectstudent(){
        //$id = $this->input->post('txtdelID');
        //$username = $thisata('username')->session->userd;
       
        $query = $this->db->get('student');
        $S_ID= $this->input->post('S_ID');
            $this->db->query("SELECT s.S_ID, s.std_fname ,s.std_lname, s.phone, v.regist_num
                              FROM student s   LEFT JOIN vehicles  v ON v.S_ID = s.S_ID 
                              WHERE s.S_ID = '".$S_ID."'  ORDER BY s.S_ID ASC");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    */
     //ฟังก์ชันแสดงข้อมูลทั้งหมด จากtable student โดยเรียงลำดับจาก student_ID
 public function showAll(){
       $this->db->order_by('oh_ID', 'ASC');
        $query = $this->db->get('offensehead');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    /*
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
    
        */
    
            



    //ฟังก์ชันเพิ่มข้อมูล ลงในtable notify
  public function addnotify(){
        $field = array(
            
            'oh_ID'=>$this->input->post('oh_ID'),
            'off_ ID'=>$this->input->post('off_ ID'),
            'person_ID'=>$this->input->post('person_ID'),
            'std_ID'=>$this->input->post('std_ID'),
            'place_ID'=>$this->input->post('place_ID'),
            'committed_date'=>$this->input->post('committed_date'),
            'committed_time'=>$this->input->post('committed_time'),
            'notifica_date'=>$this->input->post('notifica_date'),
            'num_off'=>$this->input->post('num_off'),
            'explanation'=>$this->input->post('explanation'),
            'proof_results'=>$this->input->post('proof_results')
            );
            $this->db->insert('offensehead', $field);
    if($this->db->affected_rows() > 0){
            $field2 = array(
                'offeviden_ID'=>$this->input->post('offeviden_ID'),
                'oh_ID'=>$this->input->post('oh_ID'),
                'evidenre_name'=>$this->input->post('evidenre_name'),
                'record_date'=>$this->input->post('record_date')
                );
            $this->db->insert('offevidence', $field2);
        if($this->db->affected_rows() > 0){  


            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

    //ฟังก์ชันแสดงข้อมูลการแก้ไข จากtable notify
    public function editnotify(){
        $id = $this->input->get('id');
        $this->db->where('oh_ID', $id);
        $query = $this->db->get('offensehead');
        if($query->num_rows() > 0){
            
            return $query->row();
        }else{
            return false;
        }
    }
    
    //ฟังก์ชันอัพเดตข้อมูลในtable notify
    public function updatenotify(){
        $id = $this->input->post('editID');
       
 
            $off_ID =$this->input->post('off_ID');
            $person_ID=$this->input->post('person_ID');
            $std_ID=$this->input->post('std_ID');
            $place_ID=$this->input->post('place_ID');
            $committed_date=$this->input->post('committed_date');
            $committed_time=$this->input->post('committed_time');
            $notifica_date=$this->input->post('notifica_date');
            $num_off=$this->input->post('num_off');
            $explanation=$this->input->post('explanation');
            $proof_results=$this->input->post('proof_results');
            $offeviden_ID=$this->input->post('offeviden_ID');
            $oh_ID = $this->input->post('oh_ID');
            $evidenre_name=$this->input->post('evidenre_name');
            $record_date=$this->input->post('record_date');
        $this->db->query("UPDATE offensehead o 
                            INNER JOIN offevidence oo ON o.oh_ID = oo.oh_ID 
                            SET o.off_ID = '".$off_ID."', o.person_ID = '".$person_ID."', o.std_ID = '".$std_ID."', o.place_ID = '".$place_ID."',
                                o.committed_date = '".$committed_date."', o.committed_time = '".$committed_time."', o.notifica_date = '".$notifica_date."',
                                o.num_off = '".$num_off."', o.explanation = '".$explanation."',o.proof_results = '".$proof_results."', 
                                oo.offeviden_ID = '".$offeviden_ID."', oo.oh_ID = '".$oh_ID."', oo.evidenre_name = '".$evidenre_name."',
                                oo.record_date = '".$record_date."',
                                

                            WHERE o.oh_ID = '".$oh_ID."' ");
               
        if($this->db->affected_rows() > 0){
            
            return true;
        }else{
            return false;
        }
    }
    //ฟังก์ชันลบข้อมูลในtable notify
    function deletenotify(){
         $id = $this->input->post('delID');
      
        $this->db->where('oh_ID', $id);
        $this->db->delete('offensehead');
        //$this->db->update('notify', $field);
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
       // var_dump($query->result());
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }
    
  
    
    function selectvehicles()
	{
	    $this->db->order_by('v_ID','ASC');
	    $query = $this->db->get('vehicles');
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }
   /* 
    function selectstudent()
	{
	    $this->db->order_by('S_ID','ASC');
	    $query = $this->db->get('student');
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }
    */
    
    
    
    function selectoffevidence()
	{
	    $this->db->order_by('offeviden_ID','ASC');
	    $query = $this->db->get('offevidence');
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }
// select หมวดและฐานความผิด
    function selectOffenseoffevidence(){
    $oc_ID = $this->input->post('oc_ID');
    $this->db->select('*');
        $this->db->from('offensecate o');
        $this->db->join('Offense oo', 'o.oc_ID=oo.oc_ID');

        // $this->db->join('personnel p', 's.person_ID=p.person_ID');
        
       
         $this->db->where('oc_ID',$oc_ID);
        $query = $this->db->get();
        //var_dump($query->result());
  
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    function selectoffensecate()
	{
	    $this->db->order_by('oc_ID','ASC');
	    $query = $this->db->get('offensecate');
	    
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	        return false;
	    }
    }
     
    function selectstudent(){
        $username = $this->session->userdata('username');
   
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions dvs', 'c.dept_ID=dvs.dept_ID');
        $this->db->join('dormitory d', 's.dorm_ID=d.dorm_ID');
        $this->db->join('dormtype dt', 'd.dormtype_ID=dt.dormtype_ID');
        // $this->db->join('personnel p', 's.person_ID=p.person_ID');
        
       
         $this->db->where('S_ID',$username);
        $query = $this->db->get();
        //var_dump($query->result());
  
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }


    function can_login($username, $password)
    {
        
        $this->db->select('*');
        $this->db->from('place');
        $query1 = $this->db->get()->result();
        
        
        $this->db->select('*');
        $this->db->from('Offense');
        $query2 = $this->db->get()->result();
        
        $this->db->select('*');
        $this->db->from('offensecate');
        $query3 = $this->db->get()->result();
        
        $this->db->select('*');
        $this->db->from('vehicles');
        $query4 = $this->db->get()->result();
        
        $this->db->select('*');
        $this->db->from('student');
        $query5 = $this->db->get()->result();
        
        $this->db->select('*');
        $this->db->from('offevidence');
        $query6 = $this->db->get()->result();
        
        
        $queryall = $this->db->query($query1 . ' UNION ALL ' . $query2 . ' UNION ALL ' . $query3 . ' UNION ALL ' . $query4 . ' UNION ALL ' . $query5 . ' UNION ALL' . $query6);

     }
   
    
    
        
    
}