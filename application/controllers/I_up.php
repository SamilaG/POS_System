<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class I_up extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        //$this->load->library('session');
    }
    public function index()
	{

		$msg = $_GET['id'];
		$data['i_update'] = $this->item_model->i_update($msg);

		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar03');
		$this->load->view('admin/item_update',$data);
		$this->load->view('inc/footer');

	}
	public function item_up(){
		$i_no = $_GET['id'];
		if (isset($_POST['up_item'])) {
			extract($_POST);
			$data = array('i_name'=>$i_name,
						  'i_desc'=>$i_desc
						 );
			$this->item_model->item_update($data,$i_no);
			// echo c_name;
			// echo "lllkk";

		}
	}



}

?>