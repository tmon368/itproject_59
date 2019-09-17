<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Branch_head_dashboard extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('branch_head_dashboard_model', 'branch_head_dashboard_model');
    }

	public function index()
	{
	    $this->checkAutoriry();
	    $this->template();

	}
	
	public function template()
	{
	    
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
        $this->load->view('template/template3');
        $this->load->view('branch_head/firstpage/firstpage');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	
	
	function checkAutoriry() {
	    //$admin = $this->session->userdata('admin');
	    // $student = $this->session->userdata('student');
	    //echo $username;
	    // die();
	    
	    $this->session->mark_as_temp('login',1800);
	    if($this->session->userdata('login') == true){
	        
	       
	        if($this->session->userdata('autority') == "student"){
	            redirect(base_url() . 'index.php/Student_dashboard');
	        }
	        
	        if($this->session->userdata('autority') == "teacher"){
	            redirect(base_url() . 'index.php/Teacher_dashboard');
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
            
            if($this->session->userdata('autority') == "admin"){
	            redirect(base_url() . 'index.php/Admin_dashboard');
			}
			
	    }else{
	        redirect(base_url() . 'index.php/Loginuser');
	        
	        
	    }
	    
	    
	    
	}

	public function new()
	{
	    //แสดงหน้าจอ form สำหรับบันทึกข้อมูลใหม่
	}

	public function addnew()
	{
	    //รับข้อมูลจาก form  insert ลง DB
	}

	public function edit()
	{
	    //แสดงหน้าจอ form สำแก้ไขข้อมูลใหม่
	}

	public function update()
	{
	    //รับข้อมูลจาก form  update ลง DB
	}
}
