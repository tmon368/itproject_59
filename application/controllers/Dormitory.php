<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dormitory extends CI_Controller {
    
    public function index()
    {
   
        $this->load->view('template/template1');
        $this->load->view('template/template2');
        $this->load->view('template/template3');
        $this->load->view('basicdata/dormitry/viewdormitory');
        $this->load->view('template/template5');
        $this->load->view('template/template6');
        
    }
   
  
}