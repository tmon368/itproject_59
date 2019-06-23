<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('place_model', 'model');
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
	    $this->load->view('basicdata/place/page_place');
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
	    /*$this->load->view('template/page_import_data');*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}

	//ฟังก์ชันเรียกข้อมูลทั้งหมดจาก table place และแสดงข้อมูลในview
	public function showAll(){
		$result = $this->model->showAll();
		echo json_encode($result);
	}
    
	//ฟังก์ชันเพิ่มข้อมูล เมื่อเพิ่มข้อมูลเสร็จสิ้นจะแสดงข้อความ เพิ่มข้อมูลเรียบร้อย
	public function addplace(){
		$result = $this->model->addplace();
		//$msg['success'] = false;
		//$msg['type'] = 'add';
		$msg['success'] = false;
		
		if($result){
		    $msg['success'] = true;
		}
		echo json_encode($msg);
	}

	//ฟังก์ชันแสดงการแก้ไขข้อมูล
	public function editplace(){
	
		$result = $this->model->editplace();
		echo json_encode($result);
	}
	
	//ฟังก์ชันการอัพเดตข้อมูล เมื่ออัพเดตข้อมูลเสร็จสิ้นจะแสดงข้อความ แก้ไขข้อมูลเรียบร้อย
	public function updateplace(){
		$result = $this->model->updateplace();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
			$this->session->set_flashdata('message', '<br/>แก้ไขข้อมูลเรียบร้อย');
	    redirect(base_url() . 'index.php/place/index');
		}
		redirect(base_url() . 'index.php/place/index');
		//echo json_encode($msg);
	}
    
	//ฟังก์ชันการลบข้อมูล เมื่อลบข้อมูลเสร็จสิ้นจะแสดงข้อความ ลบข้อมูลเรียบร้อย
	public function deleteplace(){
		$result = $this->model->deleteplace();
		
		$msg['success'] = false;
		$msg['type'] = 'delete';
		if($result){
			$msg['success'] = true;
				$this->session->set_flashdata('message', '<br/>ลบข้อมูลเรียบร้อย');
	    redirect(base_url() . 'index.php/place/index');
		}
		echo json_encode($msg);
	}
}
