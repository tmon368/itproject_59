<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offense extends CI_Controller {

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('template/template3');
		/*$this->load->view('template/page_type_punish'); 
		 */$this->load->view('basicdata/offense/page_offense'); 
		/*$this->load->view('template/page_import_data');*/
		$this->load->view('template/template5');
		$this->load->view('template/template6');

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
