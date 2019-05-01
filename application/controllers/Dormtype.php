<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dormtype extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	
	public function shows(){
	    $this->load->view('template/template_1');
	    $this->load->view('template/template_2');
	    $this->load->view('template/template_3');
	    $this->load->view('basicdata/dormtype/showsall');
	    $this->load->view('template/template_5');
	    $this->load->view('template/template_6');
	}

	public function template()
	{
		$this->load->view('template/template_1');
		$this->load->view('template/template_2');
		$this->load->view('template/template_3');
		$this->load->view('template/template_test');
		$this->load->view('template/template_5');
		$this->load->view('template/template_6');
	}

}
