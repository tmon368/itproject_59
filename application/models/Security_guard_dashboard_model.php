<?php

class Security_guard_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboardday(){
        //$date= '2019-09-19';
        $date =$_GET['dateday'];
       
      // $query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE offensehead.committed_date='".$date."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");

      //query จาก นศ ที่ยอมรับผิด
    //   $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
    //   $this->db->from('report rp');
    //   $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
    //   $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
    //   $this->db->join('offense o','oh.off_ID=o.off_ID');
    //   $this->db->join('student std','ostd.S_ID=std.S_ID'); 
    //   $this->db->where('oh.committed_date',$date);
    //$this->db->order_by('oh.committed_date ASC');

        $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
         $this->db->from('offensestd ostd');
         $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
         $this->db->join('offense o','oh.off_ID=o.off_ID');
         $this->db->join('student std','ostd.S_ID=std.S_ID'); 
         $this->db->where('oh.committed_date',$date);
         $this->db->order_by('oh.committed_date ASC');

        $query = $this->db->get();
        $data = array();
        $data = $query->result_array();
       //var_dump($data);
       //die();

       if($data !=NULL){
        return $data;
    }else{
        return false;
    }
    }

    public function getDashboardmonth(){
        //$month =11;
        //$year =2019;
        $month =$_GET['getmonth'];
       $year =$_GET['getyear'];
      // $query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE MONTH(committed_date)='".$month."' and YEAR(committed_date)='".$year."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");


//query จาก นศ ที่ยอมรับผิด
    //   $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
    //   $this->db->from('report rp');
    //     $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
    //    $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
    //    $this->db->join('offense o','oh.off_ID=o.off_ID');
    //    $this->db->join('student std','ostd.S_ID=std.S_ID'); 
    //    $this->db->where('MONTH(oh.committed_date)',$month);
    //    $this->db->where('YEAR(oh.committed_date)',$year);
    //      $this->db->order_by('oh.committed_date ASC');


       $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
       $this->db->from('offensestd ostd');
       $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
       $this->db->join('offense o','oh.off_ID=o.off_ID');
       $this->db->join('student std','ostd.S_ID=std.S_ID'); 
       $this->db->where('MONTH(oh.committed_date)',$month);
       $this->db->where('YEAR(oh.committed_date)',$year);
       $this->db->order_by('oh.committed_date ASC');

      $query = $this->db->get();
      $data = array();
      $data = $query->result_array();
       //var_dump( $data);
        //die();

       if($data !=NULL){
        return $data;
    }else{
        return false;
    }
    }

    public function getDashboardyear(){
        //$year =2019;
        $year =$_GET['getyear'];
       //SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE  YEAR(committed_date)='2019' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID
       //$query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE  YEAR(committed_date)='".$year."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");



       //query จาก นศ ที่ยอมรับผิด
    //    $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
    //    $this->db->from('report rp');
    //     $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
    //    $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
    //    $this->db->join('offense o','oh.off_ID=o.off_ID');
    //    $this->db->join('student std','ostd.S_ID=std.S_ID'); 
    //    $this->db->where('YEAR(oh.committed_date)',$year);
    //    $this->db->order_by('oh.committed_date ASC');

       $this->db->select('oh.committed_date,oh.committed_time,ostd.S_ID,std.std_fname , std.std_lname,o.off_desc');   
       $this->db->from('offensestd ostd');
       $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
       $this->db->join('offense o','oh.off_ID=o.off_ID');
       $this->db->join('student std','ostd.S_ID=std.S_ID'); 
       $this->db->where('YEAR(oh.committed_date)',$year);
    $this->db->order_by('oh.committed_date ASC');

       $query = $this->db->get();
      $data = array();
      $data = $query->result_array();
       //var_dump( $data);
       //die();

       if($data !=NULL){
        return $data;
    }else{
        return false;
    }
    }
    
    
    
    
}
