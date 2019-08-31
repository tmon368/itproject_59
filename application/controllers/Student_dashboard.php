<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_dashboard extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('student_dashboard_model', 'model');
	}
	
	/*
	public function logoutsession(){
	    $admin = $this->session->userdata('admin');
	    $student = $this->session->userdata('student');
	    //echo $username;
	    // die();
	    $this->session->mark_as_temp('student',1800);
	    
	    if($admin !=""){
	        
	        redirect(base_url() . 'index.php/Admin_dashboard');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
	    }
	    if($student ==""){
	        
	        redirect(base_url() . 'index.php/Loginuser');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
	    }
	}*/
	
	
	public function index()
	{
	    
	    $this->checkAutoriry();
	   // $this->logoutsession();
	    
	    /*
	    $username = $this->session->userdata('username');
	    //echo $username;
	    // die();
	    $this->session->mark_as_temp('username',600);
	    if($username == ""){
	        
	        redirect(base_url() . 'index.php/Loginuser');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
	    }*/
	    //$username = $this->session->userdata('username');
	    //$this->selectstudent();
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();

	}
	
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
		$this->load->view('menu/student/menu_student'); //ส่วนเมนู
		$this->load->view('student/StudentPersonal/std_infopage');//ส่วนเนื้อหา
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
	    //$admin = $this->session->userdata('admin');
	   // $student = $this->session->userdata('student');
	    //echo $username;
	    // die();
	    
	    $this->session->mark_as_temp('login',1800);
	    if($this->session->userdata('login') == true){
	 
	    //login = true {
	    /*
	        if($this->session->userdata('autority') == 'student'){
	            echo "อุอิ";
	            //$this->index();
	            //redirect(base_url() . 'index.php/Student_dashboard');
	            
	            //load view
	        }else */ 
	        if($this->session->userdata('autority') == "admin"){
	            redirect(base_url() . 'index.php/Admin_dashboard');
	            }
	    }else{
	        redirect(base_url() . 'index.php/Loginuser');
	        
	        
	    }
	    
	
	    //else redirect to login 
	    
	    /*
	    if($admin !=""){
	        
	        redirect(base_url() . 'index.php/Admin_dashboard');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
	    }
	    if(!$this->session->userdata('student')){
	        
	        redirect(base_url() . 'index.php/Loginuser');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
	    }*/
        }
}
