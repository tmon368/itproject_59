<?php

class employee_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboardday(){
        //$date= '2019-09-19';
        $date =$_GET['dateday'];
       //SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE committed_date='2019-09-19' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID
       $query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE committed_date='".$date."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");
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

    public function getDashboardmonth(){
       // $month =11;
       // $year =2019;
        $month =$_GET['getmonth'];
        $year =$_GET['getyear'];
       //SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE committed_date='2019-09-19' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID
       $query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE MONTH(committed_date)='".$month."' and YEAR(committed_date)='".$year."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");
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
       $query= $this->db->query("SELECT offensehead.committed_date,offensehead.committed_time,offensestd.S_ID,student.std_fname , student.std_lname,offense.off_desc FROM `offensehead`,`offensestd`,`offense`,`student` WHERE  YEAR(committed_date)='".$year."' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offensestd.S_ID=student.S_ID");
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
