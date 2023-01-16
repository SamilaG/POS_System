 <?php

class Item_model2 extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	// function fetch_data(){
	// 	$query = $this->db->get('item');
	// 	//select * from catogery...
	// 	return $query;
	// }

//Select item_no from database for delete...
	function delete_data($i_no){
		$this->db->where("i_no", $i_no);
		$this->db->delete("item");
	}
	function del_yes_data(){
		$query = $this->db->get('item');
		//select * from item...
		return $query->result();
	}



}
?>