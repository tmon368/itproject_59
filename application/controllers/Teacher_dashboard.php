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
	    
	    $result = $this->model->selectstudentfirstpage();
	   // echo json_encode($result);
	}
	
	function selectdetailfirstpage(){
	    //  $username = $this->session->userdata('username');
	    
	    $result = $this->model->selectdetailfirstpage();
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
	    }else{
	        redirect(base_url() . 'index.php/Loginuser');
	        
	        
	    }
	    
        }
        
}
