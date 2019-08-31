<?php
require_once('Std_info.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class OffenseHead extends Std_info {
    function __construct(){
        parent:: __construct();
        $this->load->model('OffenseHead_model', 'model');
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
        $this->load->view('OffenseHead/view_OffenseHead');//ส่วนเนื้อหา
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
        
        
    }
    
}