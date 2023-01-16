<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_member extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar01');
		$data["fetch_data"] = $this->member_model->memb_data();
		$this->load->view('admin/member_view',$data);
		$this->load->view('inc/footer');
	}

}
?>