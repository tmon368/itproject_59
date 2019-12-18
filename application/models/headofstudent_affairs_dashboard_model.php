<?php

class headofstudent_affairs_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function getDashboard(){
        //SELECT offensecate.*,COUNT(offensestd.S_ID) as std FROM `offensecate`, `offensestd` , `offensehead` , `offense`   WHERE offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID  GROUP BY offensecate.oc_ID

        //$query= $this->db->query('SELECT offensecate.oc_ID,offensecate.oc_desc as label,COUNT(offensestd.S_ID) as y FROM `offensecate`, `offensestd` , `offensehead` , `offense`   WHERE offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID  GROUP BY offensecate.oc_ID');
        //$this->db->distinct('oc.oc_ID');
        //$this->db->select('oc.oc_ID,oc.oc_desc as label,count(distinct ostd.S_ID) as y');  -->  ไม่นับ นศ.ที่ทำผิดซ้ำ

        //query จาก นศ ที่ยอมรับผิด
        // $this->db->select('oc.oc_ID,oc.oc_desc as label,count(ostd.S_ID) as y');   
        // $this->db->from('report rp');
        // $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
        // $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
        // $this->db->join('offense o','oh.off_ID=o.off_ID'); 
        // $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
        // $this->db->group_by('oc.oc_ID');
        //$this->db->order_by('oc.oc_ID ASC');


        $this->db->select('oc.oc_ID,oc.oc_desc as label,count(ostd.S_ID) as y');   
        $this->db->from('offensestd ostd');
        $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
        $this->db->join('offense o','oh.off_ID=o.off_ID'); 
        $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
        $this->db->group_by('oc.oc_ID');
        $this->db->order_by('oc.oc_ID ASC');
        $query = $this->db->get();
        $data = array();
        $data = $query->result_array();
        // echo "<br><br><br>";
        $calnumstd =0;
        foreach($data as $value){
            $cal = intval($value['y']);
            $calnumstd += $cal;


        }
       $data['numstd'] = $calnumstd;
         //var_dump($data);
         //die();
        
        
        
        if($data !=NULL){
            return $data;
        }else{
            return false;
        }
    }
    
    
    public function getDashboardAll(){
        $oc_ID = $_GET['oc_ID'];
        //$oc_ID = 8;
       
       //$query= $this->db->query("SELECT divisions.dept_ID, dept_name as label,COUNT(offensestd.S_ID) as y ,offensecate.oc_ID ,offensecate.oc_desc FROM `divisions` ,`offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum` WHERE offensecate.oc_ID='+$oc_ID+' and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID  GROUP BY divisions.dept_ID");

        //query จาก นศ ที่ยอมรับผิด
    //    $this->db->select('d.dept_ID, d.dept_name as label,COUNT(ostd.S_ID) as y ,oc.oc_ID ,oc.oc_desc');   
    //    $this->db->from('report rp');
    //    $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
    //    $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
    //    $this->db->join('offense o','oh.off_ID=o.off_ID'); 
    //     $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
    //     $this->db->join('student std','ostd.S_ID=std.S_ID');
    //     $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
    //     $this->db->join('divisions d','c.dept_ID=d.dept_ID');    
    //    $this->db->group_by('d.dept_ID');
    //    $this->db->where('oc.oc_ID',$oc_ID);
    //$this->db->order_by('oc.oc_ID ASC');

       
       $this->db->select('d.dept_ID, d.dept_name as label,COUNT(ostd.S_ID) as y ,oc.oc_ID ,oc.oc_desc');   
       $this->db->from('offensestd ostd');
       $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
       $this->db->join('offense o','oh.off_ID=o.off_ID'); 
        $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
        $this->db->join('student std','ostd.S_ID=std.S_ID');
        $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
        $this->db->join('divisions d','c.dept_ID=d.dept_ID');    
       $this->db->group_by('d.dept_ID');
       $this->db->where('oc.oc_ID',$oc_ID);
       $this->db->order_by('oc.oc_ID ASC');

        $query = $this->db->get();
       $data = array();
        $data = $query->result_array();
    //    var_dump($data);
    //    die();
       if($data !=NULL){
        return $data;
    }else{
        return false;
    }


    }
    
   
    public function getGraphDataSchool(){
        $oc_ID = $_GET['oc_ID'];
        $dept_ID =$_GET['dept_ID'];
   //     $oc_ID = 8;
   //    $dept_ID = 22;
       // $field = array
       
       //     'oc_ID'=>$this->input->post('oc_ID'),
       //     'dept_ID'=>$this->input->post('dept_ID')
           
       //     );
       // $query= $this->db->query("SELECT curriculum.cur_ID, curriculum.cur_name as label,curriculum.dept_ID, COUNT(offensestd.S_ID) as y  FROM `offensestd` ,`offensehead`, `offense`,`offensecate`,`student`,`curriculum`,`divisions` WHERE divisions.dept_ID = '+$dept_ID+' and offensecate.oc_ID='+$oc_ID+'  and offensestd.oh_ID=offensehead.oh_ID and offensehead.off_ID=offense.off_ID and offense.oc_ID=offensecate.oc_ID and offensestd.S_ID=student.S_ID and student.cur_ID=curriculum.cur_ID and curriculum.dept_ID=divisions.dept_ID   GROUP BY curriculum.cur_ID");


        //query จาก นศ ที่ยอมรับผิด
       // $this->db->select('c.cur_ID, c.cur_name as label,c.dept_ID, COUNT(ostd.S_ID) as y');   
       // $this->db->from('report rp');
       // $this->db->join('offensestd ostd','rp.offensestd_ID=ostd.offensestd_ID');
       //  $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
       //  $this->db->join('offense o','oh.off_ID=o.off_ID'); 
       //   $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
       //   $this->db->join('student std','ostd.S_ID=std.S_ID');
       //   $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
       //   $this->db->join('divisions d','c.dept_ID=d.dept_ID'); 
       //  $this->db->group_by('c.cur_ID');
       //  $this->db->where('d.dept_ID',$dept_ID);
       //  $this->db->where('oc.oc_ID',$oc_ID);
        // $this->db->order_by('oc.oc_ID ASC');

        $this->db->select('c.cur_ID, c.cur_name as label,c.dept_ID, COUNT(ostd.S_ID) as y');   
        $this->db->from('offensestd ostd');
        $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
        $this->db->join('offense o','oh.off_ID=o.off_ID'); 
        $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
        $this->db->join('student std','ostd.S_ID=std.S_ID');
        $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
        $this->db->join('divisions d','c.dept_ID=d.dept_ID'); 
        $this->db->group_by('c.cur_ID');
        $this->db->where('d.dept_ID',$dept_ID);
        $this->db->where('oc.oc_ID',$oc_ID);
        $this->db->order_by('oc.oc_ID ASC');

        $query = $this->db->get();
        $data = array();
        $data = $query->result_array();
      //var_dump( $data);
     // die();

        if($data !=NULL){
            return $data;
        }else{
            return false;
        }


    }
}