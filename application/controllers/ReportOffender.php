<?php
require_once('Student_dashboard.php');
defined('BASEPATH') or exit('No direct script access allowed');

class ReportOffender extends Student_dashboard
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Notifyoffense_model', 'Notifyoffense_model');
	}



	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->template();
		$this->checkAutoriry();
	}

	public function template()
	{
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('menu/student/menu_user_student');
		$this->load->view('template/template4');
		$this->load->view('student/report/view_report_offender');
		$this->load->view('template/template5');
		$this->load->view('template/template6');
	}
}
