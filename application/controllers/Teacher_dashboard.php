<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_dashboard extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('teacher_dashboard_model', 'teacher_dashboard_model');
	}
	
	
	
	public function index()
	{
	    
	    $this->checkAutoriry();
	    $this->template();

	}
	
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
		$this->load->view('menu/student/menu_student'); //ส่วนเมนู
		$this->load->view('teacher/firstpage/first_page');//ส่วนเนื้อหา
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	   
	}
	
	
	
	
	function selectstudentfirstpage(){
	    //  $username = $this->session->userdata('username');
	    
	    $result = $this->teacher_dashboard_model->selectstudentfirstpage();
	   // echo json_encode($result);
	}
	
	function selectstudentall(){
	    //  $username = $this->session->userdata('username');
	    
	    $result = $this->teacher_dashboard_model->selectstudentall();
	    echo json_encode($result);
	}
	function selectscorestudent(){
	    //  $username = $this->session->userdata('username');
	    
	    $result = $this->teacher_dashboard_model->selectscorestudent();
	    echo json_encode($result);
	}
	function student_offense(){
	    
	    $result = $this->teacher_dashboard_model->student_offense();
	    echo json_encode($result);
	}

	/*
	function selectstudent(){
	   // $username = $this->session->userdata('username');
	   // echo $username;
	    
	    $result = $this->model->selectstudent();
	    //var_dump($result);
	    echo json_encode($result);
	}
*/
	
	function checkAutoriry() {

	    
	    $this->session->mark_as_temp('login',1800);
	    if($this->session->userdata('login') == true){
 
	        if($this->session->userdata('autority') == "admin"){
	            redirect(base_url() . 'index.php/Admin_dashboard');
	            }
	            
	        if($this->session->userdata('autority') == "student"){
	            redirect(base_url() . 'index.php/Student_dashboard');
				}
				
				if($this->session->userdata('autority') == "discipline_officer"){
					redirect(base_url() . 'index.php/Discipline_officer_dashboard');
				}

				if($this->session->userdata('autority') == "headofstudent_affairs"){
					redirect(base_url() . 'index.php/Headofstudent_affairs_dashboard');
				}

				if($this->session->userdata('autority') == "dormitory_supervisor"){
					redirect(base_url() . 'index.php/Dormitory_supervisor_dashboard');
				}

				if($this->session->userdata('autority') == "dormitory_advisor"){
					redirect(base_url() . 'index.php/Dormitory_advisor_dashboard');
				}

				if($this->session->userdata('autority') == "branch_head"){
					redirect(base_url() . 'index.php/Branch_head_dashboard');
				}

				if($this->session->userdata('autority') == "dean"){
					redirect(base_url() . 'index.php/Dean_dashboard');
				}

				if($this->session->userdata('autority') == "security_guard"){
					redirect(base_url() . 'index.php/Security_guard_dashboard');
				}

				if($this->session->userdata('autority') == "employee"){
					redirect(base_url() . 'index.php/Employee_dashboard');
				}
				
	    }else{
	        redirect(base_url() . 'index.php/Loginuser');
	        
	        
	    }
	    
        }
        
}
