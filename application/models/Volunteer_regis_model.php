<?php

class Volunteer_regis_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
   
 
    function showAll(){
      
         
        //$service_ID= $this->input->post('txtdelID');
       //$student=59111111;
        //echo $person_ID;
        //$student = $this->session->userdata('student');
        $this->db->select('*');
        $this->db->from('Service sv');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        //$this->db->where('s.S_ID', $student);
        $query = $this->db->get();
        //var_dump($query->result());
        //die;
       
        if($query->result() > 0){
            return $query->result();
        }else{
            return false;
        }
        
    }

    function show_whereid(){
        //ส่ง id ไปให้ ชื่อตัวแปร id ส่งแบบ Get
        /*code*/    
        $id = $this->input->get('id');
        //$id=3;
        $this->db->select('*');
        $this->db->from('Service sv');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        $this->db->where('service_ID', $id);
        $query = $this->db->get();
        //var_dump($query->result());
        if($query->result() > 0){
                
            return $query->result();
        }else{
            return false;
        }
    

    }

    public function regisnotify(){
        $id = $this->input->get('id');
       // $id=1;
        $this->db->select('*');
        $this->db->from('Service sv');
        $this->db->join('personnel p', 'sv.person_ID=p.person_ID');
        $this->db->where('service_ID', $id);
        $query = $this->db->get();
        $data = $query->result();
        //var_dump($data);
        //die();
        foreach ($query->result() as $row) {
            $r = $row->number_of+1;
                $query = $this->db->query('UPDATE service 
                                            SET number_of = '.$r.' WHERE service_ID = '.$id.'');
    
                                        if($this->db->affected_rows() > 0){
                                    // var_dump($row->person_fname.$row->person_lname);
                                            $name = $row->person_fname;
                                            $last_name = $row->person_lname;
                                            $person = $name." ".$last_name;
                                            $start_time=$row->start_time;
                                            $end_time=$row->end_time;
                                            $time = ($start_time."-".$end_time);
                                            //var_dump($time);
                                            //die;
                                            $field = array(
                
                                                'service_ID'=>$row->service_ID,
                                                'S_ID'=>$this->session->userdata('student'),
                                                'confirm_name'=>$person,
                                                'certificat_date'=>$row->service_date,
                                                'activity_time'=>$time ,
                                                'results	'=>'1',
                                               // 'explanation'=>$this->input->post('explanation')
                                            );
                                            $this->db->insert('participationactivities', $field);

                                            if($this->db->affected_rows() > 0){

                                            return true;
                                       }else{
                                           return false;
                                       }

}

   
}
}
}