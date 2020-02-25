<?php
require_once('Student_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Proofargumentfor_discipline_officer extends Student_dashboard {
    function __construct(){
        parent:: __construct();
        $this->load->model('Proofargumentfor_discipline_officer_model', 'Proofargumentfor_discipline_officer_model');
    }
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->checkAutoriry();
        $this->template();
        
    }
    
    
    public function template(){

        $this->load->view('template/template1');
	    $this->load->view('template/template2');
		//$this->load->view('menu/student/menu_user_student');
		$this->load->view('template/template4');
		//$this->load->view('Proofargument/view_Proofargument');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
        
    }
    
    
    function selectproofargument(){
        //  $username = $this->session->userdata('username');
        
        $result = $this->Proofargumentfor_discipline_officer_model->selectproofargument();
        echo json_encode($result);
    }

    function showdetailproofargument(){
        $result = $this->Proofargumentfor_discipline_officer_model->showdetailproofargument();
        echo json_encode($result);

    }

    function Updatestatusproofargument(){
        $result = $this->Proofargumentfor_discipline_officer_model->Updatestatusproofargument();
        echo json_encode($result);

    }
   
    
    
    
    
}