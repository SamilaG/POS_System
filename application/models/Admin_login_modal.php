<?php

class Admin_login_modal extends CI_Model{
    function __construct() {
        parent::__construct();
       
    }

    //this is create to login...
    public function admin_login_query($pwd,$u_name){
        $this->db->where('u_mail',$u_name);
        $this->db->where('pwd',$pwd);
        $data = $this->db->get('member_reg_tbl');
        return $data->result();
    }
    
    //Create member Registration function/load in Add_member.php
    public function member_reg($data){
        $this->db->insert('member_reg_tbl',$data);
        redirect(base_url()."add_member");
    }

    //use to ajax email checking in db...
    public function check_member($mess){
        $this->db->where('u_mail',$mess);
        $data = $this->db->get('member_reg_tbl');
        return $data->result();
  }
    
    
}



?>