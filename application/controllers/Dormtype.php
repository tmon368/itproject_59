<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dormtype extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	
	public function shows(){
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/dormtype/showsall');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	}


}
