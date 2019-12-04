
<?php

class branch_head_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboard(){
         $branchhead=$this->session->userdata('username');
        //  $branchhead = 7054545;

         $query= $this->db->query("SELECT offensecate.oc_ID,offensecate.oc_desc as label,COUNT(offensestd.S_ID) as countstd 
         FROM `offensecate`, `offensestd` , `offensehead` , `offense` , `student` , `curriculum` , `personnel` , `divisions` 
         WHERE personnel.person_ID='".$branchhead."' and personnel.dept_ID=divisions.dept_ID and offensestd.oh_ID=offensehead.oh_ID 
         and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and student.cur_ID=curriculum.cur_ID and
          curriculum.dept_ID = divisions.dept_ID and offensestd.S_ID=student.S_ID GROUP BY offensecate.oc_ID");
      

         
        
       
        // var_dump($branchhead);
        // die;
        $data = array();
        $data = $query->result_array();
        // var_dump($data);
        // echo "<br><br><br>";
        $calnumstd =0;
        foreach($data as $value){
            $cal = intval($value['countstd']);
            $calnumstd += $cal;


        }
       $data['numstd'] = $calnumstd;
      
        
        
        
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
    
   
    public function getGraphDataSchool(){
        //SELECT curriculum.cur_ID, curriculum.cur_name as label,curriculum.dept_ID, COUNT(offensestd.S_ID) as y  FROM `offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum`,`divisions` WHERE divisions.dept_ID = '22' and offensecate.oc_ID='8'  and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID   GROUP BY curriculum.cur_ID
        $oc_ID = 8;
        $dept_ID = 22;
        // $field = array(
        //     'oc_ID'=>8,
        //     'dept_ID'=>22
            
        //     );
        // $field = array(
        //     'oc_ID'=>$this->input->post('oc_ID'),
        //     'dept_ID'=>$this->input->post('dept_ID')
            
        //     );
         $query= $this->db->query("SELECT curriculum.cur_ID, curriculum.cur_name as label,curriculum.dept_ID, COUNT(offensestd.S_ID) as y  FROM `offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum`,`divisions` WHERE divisions.dept_ID = '+$dept_ID+' and offensecate.oc_ID='+$oc_ID+'  and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID   GROUP BY curriculum.cur_ID");
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
