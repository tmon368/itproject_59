<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offense extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('offense_model', 'model');
    }
    
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->template();
        
    }
    
    public function template(){
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('template/template3');
		/*$this->load->view('template/page_type_punish'); 
		 */$this->load->view('basicdata/offense/page_offense'); 
		/*$this->load->view('template/page_import_data');*/
		$this->load->view('template/template5');
		$this->load->view('template/template6');

	}

	public function showAll(){
	    $result = $this->model->showAll();
	    echo json_encode($result);
	}
	
	public function addoffense(){
	    $result = $this->model->addoffense();
	    //$msg['success'] = false;
	    //$msg['type'] = 'add';
	    if($result){
	        $msg['success'] = true;
	        $this->session->set_flashdata('message', '<br/>เพิ่มข้อมูลเรียบร้อย');
	        redirect(base_url() . 'index.php/offense/index');
	        
	    }
	    echo json_encode($msg);
	}
	
	public function editoffense(){
	    
	    $result = $this->model->editoffense();
	    echo json_encode($result);
	}
	
	public function updateoffense(){
	    $result = $this->model->updateoffense();
	    $msg['success'] = false;
	    $msg['type'] = 'update';
	    if($result){
	        $msg['success'] = true;
	        $this->session->set_flashdata('message', '<br/>แก้ไขข้อมูลเรียบร้อย');
	        redirect(base_url() . 'index.php/offense/index');
	    }
	    redirect(base_url() . 'index.php/offense/index');
	    //echo json_encode($msg);
	}
	
	public function deleteoffense(){
	    $result = $this->model->deleteoffense();
	    
	    $msg['success'] = false;
	    $msg['type'] = 'delete';
	    if($result){
	        $msg['success'] = true;
	        $this->session->set_flashdata('message', '<br/>ลบข้อมูลเรียบร้อย');
	        redirect(base_url() . 'index.php/offense/index');
	    }
	    echo json_encode($msg);
	}
}
