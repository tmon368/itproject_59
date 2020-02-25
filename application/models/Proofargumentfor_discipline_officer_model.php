<?php

class Proofargumentfor_discipline_officer_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    public function selectproofargument(){
        $i=0;
        $results = 0;
       // $discipline_officer = $this->session->userdata('discipline_officer');
        $this->db->select('*');
        $this->db->from('proofargument pfm');
        $this->db->join('student s', 'pfm.S_ID=s.S_ID');
        $this->db->join('curriculum c', 's.cur_ID=c.cur_ID');
        $this->db->join('divisions d', 'c.dept_ID=d.dept_ID');
        // $this->db->join('report r', 'pfm.report_ID=r.report_ID');
        // $this->db->join('offensestd os', 'r.offensestd_ID=os.offensestd_ID');
        // $this->db->join('offensehead oh', 'os.oh_ID=oh.oh_ID');
        // $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        $this->db->where('pfm.results',$results);
        
        $query = $this->db->get();
        $showall = array();
        $showall = $query->result_array();
        
        foreach($showall as $value){
            
            $data = $value['results'];
            $status = $this->utilstatus($data);
            $showall[$i]["resultsname"] = $status;
            $i+=1;

        }
        
        
        
        if($showall > 0){
            return $showall;
        }else{
            return false;
        }
    }

    public function utilstatus($statusID){

        $data = array("รอการอนุมัติ","อนุมัติ","ไม่อนุมัติ");
        return $data[$statusID];
    } 

    public function showdetailproofargument(){
        // $proof_ID = $this->input->post('proof_ID');
        $i=0;
        $this->db->select('*');
        $this->db->from('proofargument pfm');
        $this->db->join('report r', 'pfm.report_ID=r.report_ID');
        $this->db->join('offensestd os', 'r.offensestd_ID=os.offensestd_ID');
        $this->db->join('offensehead oh', 'os.oh_ID=oh.oh_ID');
        $this->db->join('offense o', 'oh.off_ID=o.off_ID');
        // $this->db->where('pfm.proof_ID',$proof_ID);
        $query = $this->db->get();
        $showall = array();
        $showall = $query->result_array();
        foreach($showall as $value){
            
            $data = $value['results'];
            $status = $this->utilstatus($data);
            $showall[$i]["resultsname"] = $status;
            $i+=1;

        }
        if($showall > 0){
            return $showall;
        }else{
            return false;
        }

    }

    public function Updatestatusproofargument(){
         $getstatus = $this->input->post('status');
         $proof_ID = $this->input->post('proof_ID');
        // $getstatus = 0;
        //  $proof_ID =27;

        // 1=อนุมัติ , 2 = ไม่อนุมัติ
         $status = $getstatus == 1? $getstatus:2;


        $field = array(
            'results'=>$status
            
    );
    $this->db->where('proofargument.proof_ID',$proof_ID);
    $this->db->update('proofargument', $field);


    if($this->db->affected_rows() > 0){
        return true;
    }else{
        return false;
    }

}

  
    
    
}