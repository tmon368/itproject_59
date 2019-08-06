<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday1 extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('holiday_model1', 'model');
    }
     
    public function index()
    {
        //List  ข้อมูลมาแสดงในหน้าจอ
        $this->template();
        
    }
    
    
    public function template(){
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('template/template3');
        $this->load->view('basicdata/ho/holiday1');
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
        /*$this->load->view('template/page_import_data');*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
    }
    
    
    
    public function edit(){
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('template/template3');
        $this->load->view('basicdata/ho/holiday1');
        $this->load->view('template/template5');
        $this->load->view('template/template6');
    }
    
    public function showAll(){
        $result = $this->model->showAll();
        echo json_encode($result);
    }
    
    public function addholiday(){
        $result = $this->model->addholiday();
        //$msg['success'] = false;
        //$msg['type'] = 'add';
        
        if($result){
            $msg['success'] = true;
            
            
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/holiday1/edit');
            
        }
        echo json_encode($msg);
    }
    
    public function editholiday(){
        
        $result = $this->model->editholiday();
        echo json_encode($result);
    }
    
    public function updateholiday(){
        $result = $this->model->updateholiday();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
            $this->session->set_flashdata('message', '<br/>แก้ไขข้อมูลเรียบร้อย');
            redirect(base_url() . 'index.php/holiday1/edit');
        }
        redirect(base_url() . 'index.php/holiday1/edit');
        //echo json_encode($msg);
    }
    
    public function deleteholiday(){
        $result = $this->model->deleteholiday();
        if($result){
            $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/holiday1/index');
        }
        echo json_encode($msg);
    }
    

	public function findHolidayByYear(){
		$year = $_GET['year'];
		$this->load->model('holiday_model');
		$data['year'] = $year;
		$data['data'] = $this->holiday_model->findByYear($year);
//		var_dump($data);
		$this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
		$this->load->view('basicdata/holiday/holiday',$data);
		//echo $data;
		$this->load->view('template/template5');
	    $this->load->view('template/template6');
	}
}
