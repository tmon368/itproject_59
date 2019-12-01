<?php

class Discipline_officer_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboard(){
        //SELECT offensecate.*,COUNT(offensestd.S_ID) as std FROM `offensecate`, `offensestd` , `offensehead` , `offense`   WHERE offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID  GROUP BY offensecate.oc_ID

        //SELECT offensecate.*,COUNT(offensestd.S_ID) as std FROM `offensecate`, `offensestd` , `offensehead` , `offense`   WHERE 
        //offensestd.oh_ID=offensehead.oh_ID 
        //and offensehead.off_ID=offense.off_ID 
        //and offense.oc_ID=offensecate.oc_ID  GROUP BY offensecate.oc_ID
        $query= $this->db->query('SELECT offensecate.oc_ID,offensecate.oc_desc as label,COUNT(offensestd.S_ID) as y FROM `offensecate`, `offensestd` , `offensehead` , `offense`   WHERE offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID  GROUP BY offensecate.oc_ID');
        // $this->db->select('offensecate.* as label,count(offensestd.S_ID) as y');
        // $this->db->group_by('offensecate.oc_ID');
        // $this->db->from('offensecate oc');
        // $this->db->join('offense o','oc.oc_ID=o.oc_ID');
        // $this->db->join('offensehead oh','o.off_ID=oh.off_ID'); 
        // $this->db->join('offensestd ostd','น้.oh_ID =ostd.oh_ID');
         
        
        //$this->db->where('p.username',$teacher);
        // $query = $this->db->get();
        // $student = array();
        // $student = $query->result_array();
        $data = array();
        $data = $query->result_array();
        // var_dump($data);
        // echo "<br><br><br>";
        $calnumstd =0;
        foreach($data as $value){
            $cal = intval($value['y']);
            $calnumstd += $cal;


        }
       $data['numstd'] = $calnumstd;
        // var_dump($data);
        // die();
        
        
        
        if($data !=NULL){
            return $data;
        }else{
            return false;
        }
    }
    
    
    public function getDashboardAll(){
        $oc_ID = $_GET['oc_ID'];
        //echo $oc_ID;
        //$oc_ID = 6;
       // SELECT divisions.dept_ID, dept_name,COUNT(offensestd.S_ID) as y FROM `divisions` ,`offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum` WHERE offensecate.oc_ID='11' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID GROUP BY divisions.dept_ID
       $query= $this->db->query("SELECT divisions.dept_ID, dept_name as label,COUNT(offensestd.S_ID) as y ,offensecate.oc_ID ,offensecate.oc_desc FROM `divisions` ,`offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum` WHERE offensecate.oc_ID='+$oc_ID+' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID  GROUP BY divisions.dept_ID");
       $data = array();
        $data = $query->result_array();
       // var_dump( $data);
       //die();
       if($data !=NULL){
        return $data;
    }else{
        return false;
    }


    }
    
   
    
    
    
      
    
    
    
    
    
}
