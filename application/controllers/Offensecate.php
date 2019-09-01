<?php
require_once('Admin_dashboard.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Offensecate extends Admin_dashboard {
    function __construct(){
        parent:: __construct();
        $this->load->model('offensecate_model', 'offensecate_model');
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
        $this->load->view('template/template3');
        $this->load->view('basicdata/offensecate/page_offensecate'); 
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        /*$this->load->view('template/page_usergroup');*/ /*หน้าเพิ่มประเภทผู้ใช้*/
        /*$this->load->view('template/page_import_data');*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
        
        
    }
    
    
    public function showAll(){
        $result = $this->offensecate_model->showAll();
        echo json_encode($result);
    }
    
    public function checkkey(){
        $result = $this->offensecate_model->checkkey();
        if($result){
            $msg['success'] = true;
            
            
        }else{
            $msg['success'] = false;
            
        }
        echo json_encode($result);
    }
    public function addoffensecate(){
        $result = $this->offensecate_model->addoffensecate();
        //$msg['success'] = false;
        //$msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/offensecate/index');
        }
        echo json_encode($msg);
    }
    
    public function editoffensecate(){
        
        $result = $this->offensecate_model->editoffensecate();
        echo json_encode($result);
    }
    
    public function updateoffensecate(){
        $result = $this->offensecate_model->updateoffensecate();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/offensecate/index');
        }
        echo json_encode($msg);
    }
    
    public function deleteoffensecate(){
        $result = $this->offensecate_model->deleteoffensecate();
        
        if($result){
            $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/offensecate/index');
        }
        echo json_encode($msg);
    }
}
