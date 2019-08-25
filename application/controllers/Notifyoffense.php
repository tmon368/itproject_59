<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifyoffense extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Notifyoffense_model', 'model');
	}

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();

	}
	
	
	
	
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('menu/student/menu_student');
	    $this->load->view('student/notify/notify_page');
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
	    /*$this->load->view('template/page_import_data');*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}

	//ฟังก์ชันเรียกข้อมูลทั้งหมดจาก table personnel และแสดงข้อมูลในview
	public function showAll(){
		$result = $this->model->showAll();
		echo json_encode($result);
	}
	
	//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางpersonnel
	/*public function checkkey(){
	    $result = $this->model->checkkey();
	    if($result){
	        $msg['success'] = true;
	        
	        
	    }else{
	        $msg['success'] = false;
	        
	    }
	    echo json_encode($result);
	}
    */
	//ฟังก์ชันเพิ่มข้อมูล เมื่อเพิ่มข้อมูลเสร็จสิ้นจะแสดงข้อความ เพิ่มข้อมูลเรียบร้อย
	public function addnotify(){
		$result = $this->model->addnotify();
		//$msg['success'] = false;
		//$msg['type'] = 'add';
		
		
		if($result){
		    $msg['success'] = true;
		    
		    
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/notify_page/index');
		}
		echo json_encode($msg);
	}

	//ฟังก์ชันแสดงการแก้ไขข้อมูล
	public function editnotify(){
	
		$result = $this->model->editnotify();
		echo json_encode($result);
	}
	
	//ฟังก์ชันการอัพเดตข้อมูล เมื่ออัพเดตข้อมูลเสร็จสิ้นจะแสดงข้อความ แก้ไขข้อมูลเรียบร้อย
	public function updatenotify(){
		$result = $this->model->updatenotify();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
		    $msg['success'] = true;
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/notify_page/index');
		}
		echo json_encode($msg);
	}
    
	//ฟังก์ชันการลบข้อมูล เมื่อลบข้อมูลเสร็จสิ้นจะแสดงข้อความ ลบข้อมูลเรียบร้อย
	public function deletenotify(){
		$result = $this->model->deletenotify();
		if($result){
		    $msg['success'] = true;     
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/notify_page/index');
		}
		echo json_encode($msg);
	}
	function selectstudent(){
	   
	    
	    $result = $this->model->selectstudent();
		
 
		 echo json_encode($results);
	 }

	function selectplace(){
	   
	    
	    $result = $this->model->selectplace();
	    echo json_encode($result);
	}
	function selectvehicles(){
	   
	    
	    $result = $this->model->selectvehicles();
	    
	    echo json_encode($result);
	}
	function selectoffevidence(){
	   
	    
	    $result = $this->model->selectoffevidence();
	    
	    echo json_encode($result);
	}
	function selectoffensecate(){
	   
	    
	    $result = $this->model->selectoffensecate();
	    
	    echo json_encode($result);
	}


	function selectOffense(){
	   
	    
	    $result = $this->model->selectOffense();
		
		
	    echo json_encode($result);
	}
}

  