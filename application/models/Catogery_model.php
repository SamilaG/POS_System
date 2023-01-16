<?php

class Catogery_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	//Create Item catogery function and load in add catogery.php
	public function catogery_add($data){
		$this->db->insert('catogery',$data);
		redirect(base_url()."add_catogery");
		//echo "hello";
	}
	function fetch_data(){
		$query = $this->db->get('catogery');
		//select * from catogery...
		return $query;
	}

//search...

function srch_cato($srch){
	$this->db->like('c_name', $srch);
	$search_data = $this->db->get('catogery');
	return $search_data->result();
}
//Select c_no from database for delete...
	function delete_data($c_no){
		$this->db->where("c_no", $c_no);
		$this->db->delete("catogery");
	}
	function del_yes_data(){
		$query = $this->db->get('catogery');
		//select * from catogery...
		return $query->result();
	}
//c update...
	function c_update($msg){
		$this->db->where('c_no',$msg);
		$data = $this->db->get('catogery');
		return $data->result();
	}
//it will upload data to db...
	function cato_update($data,$c_no){
		$this->db->where('c_no',$c_no);
		$this->db->update('catogery',$data);
		redirect(base_url()."view_catogery");
	}













}

?>