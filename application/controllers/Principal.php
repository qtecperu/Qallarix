<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	}
	
	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/index');
	}

	public function crear()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/crear');
	}
}