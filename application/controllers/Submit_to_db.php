<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit_to_db extends CI_Controller {

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('basicdata/submit_data');
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
