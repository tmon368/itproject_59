<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	public function index()
	{
	    $this->logoutsession();
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('template/template3');
		$this->load->view('template/blank'); 
		$this->load->view('template/template5');
		$this->load->view('template/template6');

	}
	
	public function logoutsession(){
	    
	    $username = $this->session->userdata('username');
	    //echo $username;
	    // die();
	    $this->session->mark_as_temp('username',600);
	    if($username == ""){
	        
	        redirect(base_url() . 'index.php/Loginuser');
	        //redirect(base_url() .'index.php/Loginuser');
	        
	        
	        
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
