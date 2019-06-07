<?php

class login_model extends CI_Model {
    public function _construct()
    {
        parent::_construct();
        
    }
    
    
    public function getdata(){
        $this->db->where('flag','0');
        $query = $this->db->get('employee');
        return $query->result();
        
        
    }
    public function insertdata($data){
        $this->db->insert('employee',$data);
        
        
    }
    
    function fetch_single_data($id)
    {
        $this->db->where('E_ID',$id);
        $query = $this->db->get('employee');
        return $query->result();
        //Select * FROM employee where id = '$id'
    }
    function fetch_data()
    {
        //$query = $this->db->get("tbl_user");
        //select * from tbl_user
        //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
        $this->db->select("*");
        $this->db->from("employee");
        $query = $this->db->get();
        return $query;
    }
    public function editdata($id,$data){
        $this->db->where("E_ID",$id);
        $this->db->update("employee",$data);
        //UPDATE tbl_user SET UName = '$username', Pass = '$password' WHERE employee = '$id'
        
        
    }
    
    public function deldata($id,$data){
        $this->db->where("E_ID",$id);
        $this->db->update("employee",$data);
        
        
        
    }
    
    /*  deletedata
     public function truedeldata($id){
     $this->db->where("E_ID",$id);
     $this->db->delete("employee");
     
     
     
     }*/
    
    
    
    
    function can_login($username, $password)
    {
        
        $this->db->select('UName, Pass');
        $this->db->from('employee');
        $query1 = $this->db->get()->result();
        
        
        $this->db->select('UName, Pass');
        $this->db->from('student');
        $query2 = $this->db->get()->result();
        
        
        $query3 = array_merge($query1, $query2);
        
        //var_dump($query3);
        foreach ($query3 as $value){
            if($value->UName == $username  && $value->Pass == $password ){
                return true;
                
                
            }
            
            //echo $value->UName."  ";
            // echo $value->Pass;
            // echo "<br>";
            
            
        }
        
        return false;
        
        
        /*
         $this->db->where('UName', $username);
         $this->db->where('Pass', $password);
         $query = $this->db->get('employee');*/
        //SELECT * FROM employee WHERE employee = '$username' AND password = '$password'
        /* if($query->num_rows() > 0)
         {
         return true;
         }
         else
         {
         return false;
         }*/
    }
    
    function checkusernameemployee($username)
    {
        
        $this->db->select('UName');
        $this->db->from('employee');
        $query1 = $this->db->get()->result();
        foreach ($query1 as $value){
            if($value->UName == $username){
                return true;
                
                
            }
    }
    
    
}




function checkusernamestudent($username)
{
    
    $this->db->select('UName');
    $this->db->from('student');
    $query1 = $this->db->get()->result();
    foreach ($query1 as $value){
        if($value->UName == $username){
            return true;
            
            
        }
    }
    
    
}







}