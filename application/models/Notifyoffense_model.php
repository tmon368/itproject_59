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
        $this->db->select('*');
        $this->db->from('offensehead o');
        $this->db->join('offevidence ov', 'o.oh_ID=ov.oh_ID');
        $query = $this->db->get();
        var_dump($query->result());
        die();
        if($query->num_rows() > 0){
            
            return $query->row();
        }else{
            return false;
        }
    }
    
    function selectoffensehead(){
       $oh_ID = $this->input->get('oh_ID');
       // $oh_ID = 1;
        //$this->db->select('*');
        //$this->db->from('offensecate o');
        //$this->db->join('Offense oc', 'o.oc_ID=oc.oc_ID');
        //$this->db->where('oc_ID',$oc_ID);
        
        $query = $this->db->query('SELECT * FROM offensehead,offevidence  WHERE offensehead.oh_ID = '.$oh_ID.' AND offensehead.oh_ID=offevidence.oh_ID');
       // var_dump($query->result());
  //die();
        if($query->num_rows() > 0){
            return $query->result();
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
                            INNER JOIN offevidence ov ON o.oh_ID = ov.oh_ID 
                            SET o.off_ID = '".$off_ID."', o.person_ID = '".$person_ID."', o.std_ID = '".$std_ID."', o.place_ID = '".$place_ID."',
                                o.committed_date = '".$committed_date."', o.committed_time = '".$committed_time."', o.notifica_date = '".$notifica_date."',
                                o.num_off = '".$num_off."', o.explanation = '".$explanation."',o.proof_results = '".$proof_results."', 
                                ov.offeviden_ID = '".$offeviden_ID."', ov.oh_ID = '".$oh_ID."', ov.evidenre_name = '".$evidenre_name."',
                                ov.record_date = '".$record_date."',
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
                $this->db->where('oh_ID', $id);
                $this->db->delete('offevidence');
            if($this->db->affected_rows() > 0){  
                return true;
            }else{
                return false;
            }
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
    
    
    


// select หมวดและฐานความผิด
    function selectOffenseoffevidence(){
       // $oc_ID = $this->input->get('oc_ID');
        $oc_ID = 8;
        //$this->db->select('*');
        //$this->db->from('offensecate o');
        //$this->db->join('Offense oc', 'o.oc_ID=oc.oc_ID');
        //$this->db->where('oc_ID',$oc_ID);
        
        $query = $this->db->query('SELECT * FROM offensecate,offense  WHERE offensecate.oc_ID = '.$oc_ID.' AND offensecate.oc_ID=offense.oc_ID');
        //var_dump($query->result());
  
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

 
     
    function selectstudent(){
       // $username = $this->session->userdata('username');
        //$username= $this->input->post('S_ID');
        $std_ID= $this->input->get('S_ID');
        //$std_ID = 59123456;
        /*
        $this->db->select('*');
        $this->db->from('vehiclestype vt');
        $this->db->join('vehicles v', 'vt.vetype_ID=v.vetype_ID');
        $this->db->join('student s', 'v.S_ID=s.S_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        */
        
        
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        $this->db->where('s.S_ID',$std_ID);
        $query = $this->db->get();
        $student = array();
        $student = $query->result_array();
        


        $this->db->where('S_ID',$std_ID);
        $query = $this->db->get("vehicles");
        $student['verhicles'] = $query->result_array();
        //var_dump($student);

       // die();


       /* $student = array(
            "studentID" => "",
            "stName" => ""
            "vehicles" => array("id"=>"xx","name":"xxx")
        );

        */
        //$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        


        // $this->db->join('personnel p', 's.person_ID=p.person_ID');
        
       
//         $this->db->where('v.S_ID',$username);
    
//        $query = $this->db->get();
//            var_dump($query->result());
  
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }


    function selectvehiclescar(){
        $car ="รถยนต์";
         $student = $this->session->userdata('student');
        
         //echo $student;

         $this->db->select('*');
         $this->db->from('vehicles v');
         $this->db->join('vehiclestype vt', 'v.vetype_ID=vt.vetype_ID');
         //$this->db->where('vetype_name','รถยนต์ ');
         $this->db->where('S_ID', $student);
         $this->db->where('vetype_name', $car);
         $query = $this->db->get();
       // var_dump($query->result());
        
       
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
       
    }
    
    
    function selectvehiclesmotorcycle(){
        $motorcycle = "รถจักรยานยนต์";
        $student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('vehicles v');
        $this->db->join('vehiclestype vt', 'v.vetype_ID=vt.vetype_ID');
        //$this->db->where('vetype_name','รถยนต์ ');
        $this->db->where('S_ID', $student);
        $this->db->where('vetype_name', $motorcycle);
        $query = $this->db->get();
        //var_dump($query->result());
        
        
         if($query->num_rows() > 0){
         return $query->result();
         }else{
         return false;
         }
        
    }






    
    
}