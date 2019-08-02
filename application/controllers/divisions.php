<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class divisions extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('divisions_model', 'model');
	}
	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();

	}
	
	
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/divisions/divisions');
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
	    /*$this->load->view('template/page_import_data');*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}

	//ฟังก์ชันเรียกข้อมูลทั้งหมดจาก table divisions และแสดงข้อมูลในview
	public function showAll(){
		$result = $this->model->showAll();
		echo json_encode($result);
	}
	
	//ฟังก์ชันตรวจสอบ id ซ้ำกัน ตารางdivisions
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
	public function adddivisions(){
		$result = $this->model->adddivisions();
		//$msg['success'] = false;
		//$msg['type'] = 'add';
		
		
		if($result){
		    $msg['success'] = true;
		    
		    
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/divisions/index');
		}
		echo json_encode($msg);
	}

	//ฟังก์ชันแสดงการแก้ไขข้อมูล
	public function editdivisions(){
	
		$result = $this->model->editdivisions();
		echo json_encode($result);
	}
	
	//ฟังก์ชันการอัพเดตข้อมูล เมื่ออัพเดตข้อมูลเสร็จสิ้นจะแสดงข้อความ แก้ไขข้อมูลเรียบร้อย
	public function updatedivisions(){
		$result = $this->model->updatedivisions();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
		    $msg['success'] = true;
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/divisions/index');
		}
		echo json_encode($msg);
	}
    
	//ฟังก์ชันการลบข้อมูล เมื่อลบข้อมูลเสร็จสิ้นจะแสดงข้อความ ลบข้อมูลเรียบร้อย
	public function deletedivisions(){
		$result = $this->model->deletedivisions();
		if($result){
		    $msg['success'] = true;     
		}else{
		    $msg['success'] = false;
		    redirect(base_url() . 'index.php/divisions/index');
		}
		echo json_encode($msg);
	}
}
