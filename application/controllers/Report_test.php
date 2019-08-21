<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_test extends CI_Controller {
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
	    $this->load->view('report/report_1');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}

}
