<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stock extends CI_Controller {

//	public function __construct() {
//        parent::__construct();
//        $this->load->model('teacher_model');
//        $this->load->library('session');
//    }

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar01');
		$this->load->view('admin/stock');
		$this->load->view('inc/footer');
	}

	
}