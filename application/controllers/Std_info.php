<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Std_info extends CI_Controller {

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

	
}
