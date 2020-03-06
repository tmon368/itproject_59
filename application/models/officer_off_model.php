<?php

class officer_off_model extends CI_Model {
    public function _construct()
    {
        parent:: __construct();
          
        
    }
    

 public function showAll(){
    $this->db->select('*');
          // $this->db->select('os.S_ID, s.std_fname,s.std_lname,s.behavior_score,s.cur_ID,s.dorm_ID');
            $this->db->from('offensestd os');
            $this->db->join('student s ',' os.S_ID = s.S_ID');
            $this->db->join('curriculum c ',' s.cur_ID = c.cur_ID');
            $this->db->join('dormitory d ',' s.dorm_ID = d.dorm_ID');
              $this->db->join('offensehead oh ',' os.oh_ID = oh.oh_ID');
              $this->db->join('offense o ','  oh.off_ID = o.off_ID ');
              $this->db->join('offensecate oc',' o.oc_ID = oc.oc_ID');
            
             $this->db->where('oc.oc_ID',8);
             $this->db->order_by('s.S_ID', 'desc');
            $query = $this->db->get();
         
            //var_dump($query->result());
            //die();
            return $query->result();
            
       
        }
      
        
     function getOffenseCate(){
        $this->db->select('*');      
        $this->db->from('OffenseCate');
        $this->db->order_by('oc_ID', 'ASC');
        $query = $this->db->get();
        return $query->result();
     }

     public function getOC_ID(){
  //  ค่ามาหมดเเล้วเหลือแต่ส่งoc_IDมาจากหน้าviewรับในตัวแปลที่ชื่อoc_ID
      $oc_ID = $this->input->get('oc_ID'); 
      // $oc_ID=8;
      // นี้คือฟังชั่นที่เราทำใช่ไหมเราเปิดฟิกค่ามาก่อนก็คืออันบนที่เราปิดคอมเม้นไว้


      $this->db->select('*');   
      $this->db->from('offensestd ostd ');
      $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
      $this->db->join('offense o','oh.off_ID=o.off_ID'); 
      $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
      $this->db->join('student std','ostd.S_ID=std.S_ID');
      $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
      $this->db->join('divisions d','c.dept_ID=d.dept_ID'); 
      $this->db->join('dormitory dm','std.dorm_ID=dm.dorm_ID'); 
      $this->db->where('oc.oc_ID',$oc_ID);
      $query = $this->db->get();
      $data = array();
      $data = $query->result_array();
     if($data !=NULL){
        return $data;
     }else{
      return false;
    }
  }
  
   
    }


    
       
    
