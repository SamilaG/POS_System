 <?php

class Item_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
//this is create to enter data to database(add_item)...

	public function item_add($data){
		$this->db->insert('item',$data);
		return $this->db->insert_id();
		//redirect(base_url()."add_item");
	}
// add stock
	public function item_add_st($data){
		$this->db->insert('item_update',$data);


	}

//this is create to select categery name from database...
	function fetch_data(){
	$query = $this->db->get('catogery');
	//select * from catogery...
	return $query;
	}
// this function to loade database data...
	function get_data(){
	$query = $this->db->get('item');
	//select * from catogery...
	return $query;
	}

//this is for search data from db...
	function srch_cato($srch){
	$this->db->like('i_name', $srch);
	$search_data = $this->db->get('item');
	return $search_data->result();
}
public function get_items_update($up){
	$this->db->select('*');
  	$this->db->from('item_update');
  	//$this->db->join('item','item.i_no=item_update.i_no');
  	// $this->db->where('');
  	$this->db->join('item','item.i_no=item_update.i_no');
  	$this->db->where('item.i_no',$up);
  	$data=$this->db->get();
	return $data->result();
}
  function up_data(){
  	// $query=$this->db->get('item_update');
  

  	$this->db->select('*');
  	$this->db->from('item');
  	$this->db->join('item_update','item.i_no=item_update.i_no');
  	// $this->db->where('');
  	$data=$this->db->get();
  	return $data->result();
  }
//*************************************************************************************************
//item update...
	function i_update($msg){
		$this->db->where('i_no',$msg);
		$data = $this->db->get('item');
		return $data->result();
	}
//it will upload data to db...
	function item_update($data,$i_no){
		$this->db->where('i_no',$i_no);
		$this->db->update('item',$data);
		redirect(base_url()."view_item");
	}
//*************************************************************************************************
	public function update_quty($id,$data){
		$this->db->where('i_no',$id);
		$this->db->update('item_update',$data);
	}
	public function cost_add($data,$id){
		$this->db->where('i_no',$id);
		$this->db->update('item_update',$data);
	}








}

?>