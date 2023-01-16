<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_login_modal');
        $this->load->library('session');
    }
    
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/login');
		$this->load->view('admin/index');
		$this->load->view('inc/footer');
	}
    
    public function login_details(){
        if (isset($_POST['login'])){
            extract($_POST);
            //This is to encrypt input password...
            $pass = md5($pwd);
            $data = $this->admin_login_modal->admin_login_query($pass,$u_name);
            $type = $this->admin_type($data);
            
            if($data){
                
                $this -> login_ses($data);
                if($type < 1){
                   redirect(base_url()."home");
                }else{
                    redirect(base_url()."#");
                }
            }else{
                $this->session->set_flashdata('message','');
                redirect(base_url()."login");
            }

            
        }
}

public function admin_type($data){
    foreach($data as $row){
        $type = $row->type;
    }
    return $type;
}

public function login_ses($data){
    foreach ($data as $row) {
        
        $user_data = array('uf_name' => $row->uf_name,
                           'u_id'    => $row->u_no,
                           'u_type'  => $row->u_type,
                           'login'   => TRUE);
    }
    
    $this->session->set_userdata($user_data);
}
}
