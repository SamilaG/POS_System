<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_up extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar01');
		$this->load->view('admin/m_update');
		$this->load->view('inc/footer');
	}
}