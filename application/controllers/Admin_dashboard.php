<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

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
	    $this->load->view('template/blank');
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
