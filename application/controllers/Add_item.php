<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_item extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar03');
		$data["fetch_data"] = $this->item_model->fetch_data();
		$this->load->view('admin/item',$data);
		$this->load->view('inc/footer');
	}
	//this array to loade form data....
	public function add_func_item(){
		if (isset($_POST['add_i'])) {
			extract($_POST);
			$data = array(
							'catogery_name' => $catogery_name,
							'i_name'		=> $i_name,
							'i_desc'		=> $i_desc
						);
			$id = $this->item_model->item_add($data);
			$this->add_func_stoke($id);

		}
	}

	public function add_func_stoke($id){
		$data = array(
						'i_no' =>$id ,
						'qut'=>0
							);
		$this->item_model->item_add_st($data);


	}
}