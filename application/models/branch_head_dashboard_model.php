
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
    
    
   
public function getAllSTD(){
    $perid=$this->session->userdata('username');

// $perid = 7054545;
//SELECT DISTINCT offensestd.S_ID,student.std_fname,student.std_lname,student.behavior_score FROM offensestd,student WHERE offensestd.S_ID=student.S_ID
//  $cur_ID = $_GET['cur_ID'];
// $cur_ID = 18;
$this->db->distinct();
$this->db->select('ostd.S_ID,s.std_fname,s.std_lname,s.behavior_score,c.cur_ID');
//$this->db->select('*');
$this->db->from('offensestd ostd');
$this->db->join('offensehead o','ostd.oh_ID=o.oh_ID');
$this->db->join('offense of','o.off_ID=of.off_ID');
$this->db->join('offensecate oc','of.oc_ID=oc.oc_ID');
$this->db->join('student s','ostd.S_ID=s.S_ID');
// $this->db->join('personnel p','s.person_ID=p.person_ID');
$this->db->join('curriculum c','s.cur_ID=c.cur_ID');
$this->db->join('personnel p','c.cur_ID=p.cur_ID');
// $this->db->group_by('p.cur_ID');
// $this->db->where('p.cur_ID=p.cur_ID');
$this->db->where('p.person_ID',$perid);
// $this->db->where('p.cur_ID=p.cur_ID');
$query = $this->db->get();
$students = array();
$student = $query->result_array();


if($student > 0){
return $student;
}else{
return false;
}
}



    }
    
    
    
      
    
    
    
    
    

