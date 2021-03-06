<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ReportDisciplineOfficerDormitory extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('officer_dorm_model', 'officer_dorm_model');
		$this->load->model('getOffenseCate_model', 'getOffenseCate_model');
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
		$this->load->view('menu/Discipline_officer/menu_Discipline_officer');
		$this->load->view('template/template4');
	    $this->load->view('report/discipline_officer/report_data_dormitory_discipline_officer');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	}

	//ฟังก์ชันเรียกข้อมูลทั้งหมดจาก table personnel และแสดงข้อมูลในview
	public function showAll()
	{
	    $result = $this->officer_dorm_model->showAll();
		echo json_encode($result);
	}
	public function getDORM_ID()
	{
	    $result = $this->officer_dorm_model->getDORM_ID();
		echo json_encode($result);
	}
	public function checkkey(){
	    $result = $this->officer_dorm_model->checkkey();
	    if($result){
	        $msg['success'] = true;
	        
	        
	    }else{
	        $msg['success'] = false;
	        
	    }
	    echo json_encode($result);
	}
    
}
