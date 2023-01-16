<?php

class Member_model extends CI_Model{

	function __construct() {
        parent::__construct();
       
    }

	function memb_data(){
		$query = $this->db->get('member_reg_tbl');
		//select * from member_reg_tbl...
		return $query;
	}
	// function fetch_data(){
	// 	$query = $this->db->get('member_reg_tbl');
	// 	//select * from catogery...
	// 	return $query;
	// }
	//search...
	function srch_memb($srch){
		$this->db->like('u_mail', $srch);
		$search_data = $this->db->get('member_reg_tbl');
		return $search_data->result();
	}

    //Select member_no from database for delete...
	function delete_data($u_no){
		$this->db->where("u_no", $u_no);
		$this->db->delete("member_reg_tbl");
	}
	function del_yes_data(){
		$query = $this->db->get('member_reg_tbl');
		//select * from catogery...
		return $query->result();
	}
}

?>