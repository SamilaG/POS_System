<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_catogery extends CI_Controller {
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
		$this->load->view('admin/catogery');
		$this->load->view('inc/footer');
	}

	public function add_cato(){
		if (isset($_POST['add_c'])) {
			//echo "khk";
			extract($_POST);
			$data = array('c_name' => $catogery_type,
						  'c_desc' => $desc);
			$this->catogery_model->catogery_add($data);
		}
	}
//********************************************************************************************************
	//Search ....
	public function btn_search(){
		$srch = $_GET['srch'];
		$srch_data = $this->catogery_model->srch_cato($srch);
		// echo count($srch_data);
		// echo $srch;
		echo "<table class=\"table table-striped\">
    ...     <tr>
                <th>
                    No
                </th>
                <th>
                    Catogery Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>";
            foreach ($srch_data as $row) {
             echo "
                     <tr>
                         <td>".$row->c_no."</td>
                         <td>".$row->c_name."</td>
                         <td>".$row->c_desc."</td>
                         <td>
                             <div class=\"col-md-6\">
                                <i class=\"fa fa-edit\"></i>
                             </div>
                         </td>
                         <td>
         <div class=\"col-md-6\">
             <i class=\"fa fa-remove\"  \" onclick=\"delete_button(".$row->c_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\" style=\"color: red; cursor: pointer;\"></i>
             <div id =\"aaa\"></div>
             <div class=\"modal\" id=\"myModal\">
             <div id=\"delete\">      
             </div>
             </div>
         </div>
     </td>
</tr> 
    
            
  
";}
echo "</table>";
	}

//end of search...
//********************************************************************************************************
//for delete modal...
	public function func_btn(){
		$msg = $_GET['msg'];
		//$delete_data = $this->catogery_model->srch_cato($srch);

		echo " 
				<div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title\">CAROGERY DELETING</h4>
                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" id=\"\">&times;</button>
                            </div>
                            <div class=\"modal-body\">
                                Do You want to delete this Catogery?
                            </div>
                            <div class=\"row\">
                            <div class=\"col-md-5\"></div>
                            <div class=\"col-md-1\">
                             <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" onclick=\"del_fun(".$msg.");\">Yes</button>   
                            </div>
                            <div class=\"col-md-1\">
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">No</button>
                              </div>
                            <div class=\"col-md-5\"></div>                      
                            </div>
                               <br>
                               <br>
                        </div>
                    </div>";
	}

public function del_fun(){
	$c_no = $_GET['id'];
	$this->catogery_model->delete_data($c_no);
	$query = $this->catogery_model->del_yes_data();
	//$delete_data = $this->catogery_model->srch_cato();

	echo "<table class=\"table table-striped\">
    ...     <tr>
                <th>
                    No
                </th>
                <th>
                    Catogery Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>";
            foreach ($query as $row) {
             echo "<tr>
                                    <td>".$row->c_no."</td>
                                    <td>".$row->c_name."</td>
                                    <td>".$row->c_desc."</td>
                                    <td>
                                        <div class=\"col-md-6\">
                                            <i class=\"fa fa-edit\"></i>
                                        </div>
                                    </td>
                                    <td>
                    <div class=\"col-md-6\">
                        <i class=\"fa fa-remove\"  \" onclick=\"delete_button(".$row->c_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\"  style=\"color: red; cursor: pointer;\"></i>
                        <div id =\"aaa\"></div>
                        <div class=\"modal\" id=\"myModal\">
                        <div id=\"delete\">      
                        </div>
                </div>
            </div>
        </td>
    </tr> 
";}
echo "</table>";

}
//********************************************************************************************************






























// public function delete_button_yes(){
// 	$msg = $_GET['msg'];
// 	$data = $this->catogery_modal->delete_data($c_no);
//     echo count($data);
// }

	//this function to check entered category and database c.. same...
    // public function ajax_fun_add_cato(){
    //     $mess = $_GET['msg'];
    //     //echo $mess;
    //      $data = $this->catogery_modal->check_cato($mess);
    //      echo count($data);
    // }
//this is to update categery data...
	// public function update_data(){
	// 	$c_no = $this->uri->segment(3);
	// 	$data["catogery"] = $this->catogery_model->fetch_single_data_update($c_no);
	// 	$data["fetch_data"] = $this->catogery_model->fetch_data();
	// 	$this->load->view("update",$data);

	// }

}