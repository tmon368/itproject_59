<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usertype extends CI_Controller {
    function __construct(){ 
        parent:: __construct();
        $this->load->model('usertype_model', 'model');
    }

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('template/template3');
		$this->load->view('basicdata/usertype/usertype'); /*หน้าเพิ่มหมวดความผิด*/
		/*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
		/*$this->load->view('template/page_import_data');*/
		$this->load->view('template/template5');
		$this->load->view('template/template6');

	}
	public function showAll(){
	    $result = $this->model->showAll();
	    echo json_encode($result);
	}
	//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตาราง Usertype
	public function checkkey(){
	    $result = $this->model->checkkey();
	    if($result){
	        $msg['success'] = true;
	        
	        
	    }else{
	        $msg['success'] = false;
	        
	    }
	    echo json_encode($result);
	}
	
	//ฟังก์ชันเพิ่มข้อมูล เมื่อเพิ่มข้อมูลเสร็จสิ้นจะแสดงข้อความ เพิ่มข้อมูลเรียบร้อย
	public function addusertype(){
	    $result = $this->model->addusertype();
	    //$msg['success'] = false;
	    //$msg['type'] = 'add';
	    if($result){
	        $msg['success'] = true;
	        
	    }else {
	        $msg['success'] = false;
	        redirect(base_url() . 'index.php/usertype/index');
  
	    } 
	    echo json_encode($msg);
	}
	
	public function editusertype(){
	    
	    $result = $this->model->editusertype();
	    echo json_encode($result);
	}
	

   
	public function updateusertype(){
	    $result = $this->model->updateusertype();
	    $msg['success'] = false;
	    $msg['type'] = 'update';
	    if($result){
	        $msg['success'] = true;
	    }else {
	        $msg['success'] = false;
	        redirect(base_url() . 'index.php/usertype/index');
	    }   
	     echo json_encode($msg);
	}
	
	public function deleteusertype(){
	    $result = $this->model->deleteusertype();
	    
	    $msg['success'] = false;
	    $msg['type'] = 'delete';
	    if($result){
	        $msg['success'] = true;
	    }else{
	        $msg['success'] = false;
	        redirect(base_url() . 'index.php/usertype/index');
	    }
	    echo json_encode($msg);
	}
	
}
