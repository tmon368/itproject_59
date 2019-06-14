<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usertype extends CI_Controller {

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
	
	public function addusertype(){
	    $result = $this->model->addusertype();
	    //$msg['success'] = false;
	    //$msg['type'] = 'add';
	    if($result){
	        $msg['success'] = true;
	        $this->session->set_flashdata('message', '<br/>เพิ่มข้อมูลเรียบร้อย');
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
	        $this->session->set_flashdata('message', '<br/>แก้ไขข้อมูลเรียบร้อย');
	        redirect(base_url() . 'index.php/usertype/index');
	    }
	    redirect(base_url() . 'index.php/usertype/index');
	    //echo json_encode($msg);
	}
	
	public function deleteoffensecate(){
	    $result = $this->model->deleteoffensecate();
	    
	    $msg['success'] = false;
	    $msg['type'] = 'delete';
	    if($result){
	        $msg['success'] = true;
	        $this->session->set_flashdata('message', '<br/>ลบข้อมูลเรียบร้อย');
	        redirect(base_url() . 'index.php/usertype/index');
	    }
	    echo json_encode($msg);
	}
}

