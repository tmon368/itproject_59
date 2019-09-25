<?php
require_once('Student_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluunteer_history extends Student_dashboard {

	function __construct(){
        parent:: __construct();
        $this->load->model('Voluunteer_history_model', 'Voluunteer_history_model');
    }
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->checkAutoriry();
        $this->template();
        
    }
    
	
	public function template()
	{
	    
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('menu/student/menu_student');
	    $this->load->view('student/VolunteerAc/view_Voluunteer_history');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}

	public function showAll(){
		$result = $this->Voluunteer_history_model->showAll();
		echo json_encode($result);
	}

}
