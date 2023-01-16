<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_catogery extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('catogery_model');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar02');
		$data["fetch_data"] = $this->catogery_model->fetch_data();
		$this->load->view('admin/c_view',$data);
		$this->load->view('inc/footer');
	}



























	
	//this controler for load segment and deleted function after deleted...
	// public function delete_data(){
	// 	$c_no = $this->uri->segment(3);
	// 	// $this->load->model("catogery_model");
	// 	$this->catogery_model->delete_data($c_no);
	// 	redirect(base_url() . "view_catogery/deleted");
	// } 

	// public function deleted(){
	// 	$this->index();
	// }
}
?>