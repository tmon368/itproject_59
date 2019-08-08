<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dormitory extends CI_Controller { 
    function __construct(){
        parent:: __construct();
        $this->load->model('dormitory_model', 'model');
    } 
     
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->template();
        
    }
    
    public function template(){
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('template/template3');
        /*$this->load->view('template/page_type_punish');
         */$this->load->view('basicdata/dormitry/viewdormitory');
        /*$this->load->view('template/page_import_data');*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
    }
    
    public function showAll(){
        $result = $this->model->showAll();
        echo json_encode($result);
    }
    public function checkkey(){
        $result = $this->model->checkkey();
        if($result){
            $msg['success'] = true;
            
            
        }else{
            $msg['success'] = false;
            
        }
        echo json_encode($result);
    }
    
  
    public function adddormitory(){
        $result = $this->model->adddormitory();
        //$msg['success'] = false;
        //$msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
            
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/dormitory/index');    
        }
        echo json_encode($msg);   
    }
    
    public function editdormitory(){
        
        
        $result = $this->model->editdormitory();
        echo json_encode($result);
    }
    
    public function updatedormitory(){
        $result = $this->model->updatedormitory();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
           $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/dormitory/index');
        }
        echo json_encode($msg);
    }
    
    public function deletedormitory(){
        $result = $this->model->deletedormitory();
        if($result){
            $msg['success'] = true;
        }else{
            $msg['success'] = false;
            redirect(base_url() . 'index.php/dormitory/index');
        }
        echo json_encode($msg);
    }
}