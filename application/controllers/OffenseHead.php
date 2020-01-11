<?php
require_once('Student_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class OffenseHead extends Student_dashboard {
    function __construct(){
        parent:: __construct();
        $this->load->model('OffenseHead_model', 'OffenseHead_model');
    }
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->checkAutoriry();
        $this->template();
        
    }
    
    
    public function template(){
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('menu/student/menu_student'); //ส่วนเมนู
        $this->load->view('OffenseHead/view_OffenseHead');//ส่วนเนื้อหา
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
        
        
    }
    
    
    function selectstudentoffensehead(){
        //  $username = $this->session->userdata('username');
        
        $result = $this->OffenseHead_model->selectstudentoffensehead();
        echo json_encode($result);
    }
    
    
    function selectoffenseorder(){
        //  $username = $this->session->userdata('username');
        
        $result = $this->OffenseHead_model->selectoffenseorder();
        echo json_encode($result);
    }
    
    
    function insertproofargument(){
        //  $username = $this->session->userdata('username'); 
        $result = $this->OffenseHead_model->insertproofargument();
        
      /*  if($result){
            $result['success'] = true;
            redirect(base_url() . 'index.php/OffenseHead');
        }else{
            $result['success'] = false;
            redirect(base_url() . 'index.php/OffenseHead');
        }*/
        echo json_encode($result);
    }
    
    
    function selectoffenseforinsert(){
        //  $username = $this->session->userdata('username'); 
        $result = $this->OffenseHead_model->selectoffenseforinsert();
        echo json_encode($result);
    }
    function getoffenseID(){
        //  $username = $this->session->userdata('username'); 
        $result = $this->OffenseHead_model->getoffenseID();
        echo json_encode($result);
    }
    
}