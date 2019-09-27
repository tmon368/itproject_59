<?php 

class report1_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
    public function showAll(){

        //$this->db->select('s.S_ID,s.std_fname,s.std_lname,s.behavior_score,c.cur_name,d.dname,o.point,oh.num_off,oh.off_ID');
          $this->db->select('*');      
        $this->db->from('offensestd ostd');
        $this->db->join('student s', 'ostd.S_ID=s.S_ID', 'left');
        $this->db->join('offensehead oh', 'ostd.oh_ID=oh.oh_ID', 'left');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID', 'left');
        $this->db->join('Dormitory d', 's.dorm_ID=d.dorm_ID', 'left');
        $this->db->join('offcategory ocg', 'ostd.S_ID=ocg.S_ID', 'left');
        //$this->db->join('offensehead oh', 'oh.S_ID=s.S_ID', 'left');
        $this->db->join('offense o', 'o.off_ID=oh.off_ID', 'left');
        $this->db->where('oh.off_ID', 601);

       
     $query = $this->db->get();
        //var_dump($query->result());
        
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }else
        {
            return false;
            }
 }
   
    //ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางplace
    public function checkkey(){
        $cur_ID = $this->input->post('cur_ID');
        $this->db->where('cur_ID', $cur_ID);
        $query = $this->db->get('curriculum');
        if($query->num_rows($query) == 0){
            return  true;
        }
        else{
            return false;
        }
        
    }
   
}