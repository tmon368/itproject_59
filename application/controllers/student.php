<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('student_model', 'model');
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
	    $this->load->view('basicdata/student/student');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}
	
	public function showAll(){
	    $result = $this->model->showAll();
	    echo json_encode($result);
	}
	
	

}
