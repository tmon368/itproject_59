<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_regis extends CI_Controller {

	public function index()
	{
	    
	    $this->template();

	}
	
	public function template()
	{
	    
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('menu/student/menu_student');
	    $this->load->view('VolunteerAc/view_regis_volunteer');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
    }
    


    
	
	

}
