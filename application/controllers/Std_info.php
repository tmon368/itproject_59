<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Std_info extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('student_model', 'model');
    }

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->template();
		
	}
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('menu/student/menu_student'); //ส่วนเมนู
	    $this->load->view('student/StudentPersonal/std_personal_information');//ส่วนเนื้อหา
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}
	function selectstudent(){
	    // $username = $this->session->userdata('username');
	    // echo $username;
	    
	    $result = $this->model->selectstudent();
	    //var_dump($result);
	    echo json_encode($result);
	}

	
}
