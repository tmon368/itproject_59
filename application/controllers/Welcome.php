<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
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
