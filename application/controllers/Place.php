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
	    //echo "Hi add new data (place)";
	    $this->load->model('place_model');
	    $data = array(
	        'place_ID'     =>     $this->input->post("place_ID"),
	        'place_name'     =>     $this->input->post("place_name"));
	    $this->place_model->insertdata($data);
	    $this->session->set_flashdata('message', '<br/>เพิ่มข้อมูลเรียบร้อย');
	    redirect(base_url() . 'index.php/place');
	}

	public function edit()
	{
	    //แสดงหน้าจอ form สำแก้ไขข้อมูลใหม่
	    $id = $this->input->get('id');
	    $this->load->model('place_model');
	    $data['user_data'] = $this->place_model->fetch_single_data($id);
	    //Check data from fetch_single_data model
	    var_dump($data['user_data']);
	    //$data["fetch_data"] = $this->login_model->fetch_data();
	   // redirect(base_url() . 'index.php/place',$data);
	   // $this->load->view('template/page_place',$data);
	}

	public function update()
	{
	    //รับข้อมูลจาก form  update ลง DB
	}
}
