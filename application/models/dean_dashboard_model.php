<?php

class dean_dashboard_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }

    public function getDashboard(){
         $dean=$this->session->userdata('username');
        //  $dean=8050518;
        $this->db->select('oc.oc_ID,oc.oc_desc as label,count(ostd.S_ID) as countstd');   
        $this->db->from('personnel p , curriculum c');
        
        $this->db->join('divisions d','p.dept_ID=d.dept_ID');
        // $this->db->join('curriculum c','d.dept_ID=c.dept_ID');
        $this->db->join('student s','c.cur_ID=s.cur_ID');  
        $this->db->join('offensestd ostd','s.S_ID=ostd.S_ID');  
        $this->db->join('offensehead o','ostd.oh_ID=o.oh_ID');
        $this->db->join('offense of','o.off_ID=of.off_ID');
        $this->db->join('offensecate oc','of.oc_ID=oc.oc_ID');
 

        
        $this->db->group_by('oc.oc_ID');
        $this->db->where('p.person_ID',$dean);
        // $this->db->where('p.dept_ID=d.dept_ID');



        $query = $this->db->get();
        $data = array();
        $data = $query->result_array();
        $calnumstd =0;
        foreach($data as $value){
            $cal = intval($value['countstd']);
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
    public function getGraphData(){
        // $oc_ID = $_GET['oc_ID'];
        // $dept_ID =$_GET['dept_ID'];
        $oc_ID = 8;
        $dept_ID = 22;
        // $dean=$this->session->userdata('username');
        $dean=8050518;
        // $oc_ID = $_GET['oc_ID'];
        // $dept_ID =$_GET['dept_ID'];


        $this->db->select('c.cur_ID, c.cur_name as label,c.dept_ID, COUNT(ostd.S_ID) as y');   
        $this->db->from('offensestd ostd , personnel p');
        $this->db->join('offensehead oh','ostd.oh_ID=oh.oh_ID');
        $this->db->join('offense o','oh.off_ID=o.off_ID'); 
        $this->db->join('offensecate oc','o.oc_ID=oc.oc_ID');
        $this->db->join('student std','ostd.S_ID=std.S_ID');
        $this->db->join('curriculum c','std.cur_ID=c.cur_ID');
        $this->db->join('divisions d','c.dept_ID=d.dept_ID'); 
        // $this->db->join('personnel p','d.dept_ID=p.dept_ID'); 
        $this->db->group_by('c.cur_ID');
        $this->db->where('p.person_ID',$dean);
        // $this->db->where('p.dept_ID',$dept_ID);
        // $this->db->where('oc.oc_ID',$oc_ID);

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
