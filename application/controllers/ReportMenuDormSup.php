

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportMenuDormSup extends CI_Controller {
	function __construct(){
		parent:: __construct();
		// $this->load->model('report_menu_header_model', 'report_menu_header_model');
	}

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();

	}
	
	public function template()
	{
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('menu/DormitortSupervisor/menu_user_dormsupervisor');
		$this->load->view('template/template4');
		$this->load->view('report/dormitory_supervisor/report_main_menu_dormitory_supervisor');
		//$this->load->view('Test');
		$this->load->view('template/template5');
		$this->load->view('template/template6');
	}

}


