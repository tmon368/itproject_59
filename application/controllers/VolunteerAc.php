<?php
require_once('Student_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class VolunteerAc extends Student_dashboard {
    function __construct(){
        parent:: __construct();
        $this->load->model('VolunteerAc_model', 'model');
    }
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->logoutsession();
        $this->template();
        
    }
    
    
    public function template(){
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('menu/student/menu_student'); //ส่วนเมนู
        $this->load->view('VolunteerAc/view_VolunteerAc');//ส่วนเนื้อหา
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
        
        
    }
    

    public function showAll(){
		$result = $this->VolunteerAc_model->showAll();
		echo json_encode($result);
	}
	
}