<?php
class Login_model extends CI_Model {

	function __construct() {
        parent::__construct();
       
    }

    public function login_quer($password,$username){
    	$this->db->where('uemail',$username);
    	$this->db->where('password',$password);
    	$data = $this->db->get('user');
    	return $data->result();

    }
}

