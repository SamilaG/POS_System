<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/side_nav');
		$this->load->view('inc/dashbord_menu');
		$this->load->view('admin/home');
		$this->load->view('inc/footer');
	}
}
