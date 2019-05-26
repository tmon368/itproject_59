<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
	    $this->template();

	}
	
	
	public function template(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->model('place_model');
	    $data['records'] = $this->place_model->getdata();
	    $this->load->view('template/page_place',$data);;
	    //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
	    /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
	    /*$this->load->view('template/page_import_data');*/
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	    
	    
	}

	public function select()
	{
	    //แสดงหน้าจอ form สำหรับบันทึกข้อมูลใหม่
	    $this->load->model('place_model');
	    $data['records'] = $this->place_model->getdata();
	    $this->load->view('template/page_place',$data);
	}

	public function addnew()
	{
	    //รับข้อมูลจาก form  insert ลง DB
	    echo "Hi add new data (place)";
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
