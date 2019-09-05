<?php
require_once('Student_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifyoffense extends Student_dashboard {
	function __construct(){
		parent:: __construct();
		$this->load->model('Notifyoffense_model', 'Notifyoffense_model');
	}
	


	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();
	    $this->checkAutoriry();
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
	    $result = $this->Notifyoffense_model->showAll();
		echo json_encode($result);
	}
	

	//ฟังก์ชันเพิ่มข้อมูล เมื่อเพิ่มข้อมูลเสร็จสิ้นจะแสดงข้อความ เพิ่มข้อมูลเรียบร้อย
	public function addnotify(){
		
		$field = array(
            
			'oh_ID'=>$this->input->post('oh_ID'),
			'notifica_date'=>$this->input->post('notifica_date'),
			'committed_date'=>$this->input->post('committed_date'),
			'committed_time'=>$this->input->post('committed_time'),
			'place_ID'=>$this->input->post('place_ID'),
			'explanation'=>$this->input->post('explanation'),
			'off_ID'=>$this->input->post('txt_off'),
			'S_ID'=>$this->input->post('std_id'),/*,
			'evidenre_name'=>$this->input->post('evidenre_name')*/
		);

		$field_2 = array(
			'oh_ID'=>$this->input->post('oh_ID'),
			'evidenre_name'=>$this->input->post('evidenre_name'),
			'record_date'=>$this->input->post('evidenre_date'),
			'explanoff'=>$this->input->post('explanoff'),
		);

		$this->Notifyoffense_model->addnotify($field,$field_2);

		print_r($field);
				
		//$result = $this->Notifyoffense_model->addnotify();
		//$msg['success'] = false;
		//$msg['type'] = 'add';
		
		/*
		if($result){
		    $msg['success'] = true;
		    
		    
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/notify_page/index');
		}*/

		//echo json_encode($msg);
	}

	//ฟังก์ชันแสดงการแก้ไขข้อมูล
	public function editnotify(){
	
	    $result = $this->Notifyoffense_model->editnotify();
		echo json_encode($result);
	}
	
	//ฟังก์ชันการอัพเดตข้อมูล เมื่ออัพเดตข้อมูลเสร็จสิ้นจะแสดงข้อความ แก้ไขข้อมูลเรียบร้อย
	public function updatenotify(){
	    $result = $this->Notifyoffense_model->updatenotify();
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
	    $result = $this->Notifyoffense_model->deletenotify();
		if($result){
		    $msg['success'] = true;     
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/notify_page/index');
		}
		echo json_encode($msg);
	}
	function selectstudent(){
	    $result =  $this->Notifyoffense_model->selectstudent();
        echo json_encode($result);
    }

	function selectplace(){
	   
	    
	    $result = $this->Notifyoffense_model->selectplace();
	    echo json_encode($result);
	}
	function selectvehicles(){
	   
	    
	    $result = $this->Notifyoffense_model->selectvehicles();
	    
	    echo json_encode($result);
	    
	    
	}
	function selectoffevidence(){
	   
	    
	    $result = $this->Notifyoffense_model->selectoffevidence();
	    
	    echo json_encode($result);
	}
	function selectoffensecate(){
	   
	    
	    $result = $this->Notifyoffense_model->selectoffensecate();
	    
	    echo json_encode($result);
	}


	function selectOffenseoffevidence(){
	   
	    
	    $result = $this->Notifyoffense_model->selectOffenseoffevidence();
		//print_r($result);
		echo json_encode($result);
	}
}

  