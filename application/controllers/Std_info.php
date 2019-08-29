<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Std_info extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('student_model', 'model');
    }
    
    public function logoutsession(){

        $username = $this->session->userdata('username');
        //echo $username;
        // die();
        $this->session->mark_as_temp('username',600);
        if($username == ""){
            
            redirect(base_url() . 'index.php/Loginuser');
            //redirect(base_url() .'index.php/Loginuser');
            
            
            
        }
    }
    
    public function index()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->template();
        $this->logoutsession();
        
        
    }
    public function template(){
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('menu/student/menu_student'); //ส่วนเมนู
        $this->load->view('student/StudentPersonal/std_personal_information');//ส่วนเนื้อหา
        //$this->load->view('template/page_type_punish'); /*หน้าเพิ่มหมวดความผิด*/
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
        
    }
    
    
   
       
    
    
    function selectstudent(){
        $result =  $this->model->selectstudent();
        echo json_encode($result);
    }
    
    function selectpersonnel(){
        $result =  $this->model->selectstudent();
        foreach ($result as $row){
            $person_ID = $row->person_ID;
 
        }
        
        $results =  $this->model->selectpersonnel($person_ID);
        echo json_encode($results);
    }
    
    function selectvehiclescar(){
       
        $result = $this->model->selectvehiclescar();
        echo json_encode($result);
    }
    
    function selectvehiclesmotorcycle(){
        //  $username = $this->session->userdata('username');
        
        $result = $this->model->selectvehiclesmotorcycle();
         echo json_encode($result);
    }
    
}