<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_up extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('catogery_model');
        //$this->load->library('session');
    }
	public function index()
	{

		$msg = $_GET['id'];

		$data['c_update'] = $this->catogery_model->c_update($msg);

		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar02');
		$this->load->view('admin/c_update',$data);
		$this->load->view('inc/footer');

	}

	public function catogery_update(){
		$c_no = $_GET['id'];
		if (isset($_POST['up_c'])) {
			extract($_POST);
			$data = array('c_name'=>$catogery_type,
						  'c_desc'=>$desc
						 );
			$this->catogery_model->cato_update($data,$c_no);
			// echo c_name;
			// echo "lllkk";

		}
	}




}