<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_item extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->model('item_model2');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar03');
		$data["fetch_data"] = $this->item_model->get_data();
		$this->load->view('admin/item_view',$data);
		$this->load->view('inc/footer');
	}

	//********************************************************************************************************
	//Search ....
	public function btn_search(){
		$srch = $_GET['srch'];
		$srch_data = $this->item_model->srch_cato($srch);
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
                    Item Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Update
                </th>
                <th>
                    Delete
                </th>
            </tr>";
            foreach ($srch_data as $row) {
             echo "
                     <tr>
                         <td>".$row->i_no."</td>
                         <td>".$row->catogery_name."</td>
                         <td>".$row->i_name."</td>
                         <td>".$row->i_desc."</td>
                         <td>
                             <div class=\"col-md-6\">
                                   <a href=\".base_url().\"i_up?id=<?=$row->i_no?>\">
                                    <i class=\"fa fa-edit\" style=\"color: blue; cursor: pointer;\" ></i>
                                   </a>
                             </div>
                         </td>
                         <td>
         <div class=\"col-md-6\">
         <i class=\"fa fa-remove\" onclick=\"delete_button(".$row->i_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\" style=\"color: red; cursor: pointer;\" ></i>
            
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
    $i_no = $_GET['id'];
    $this->item_model2->delete_data($i_no);
    $query = $this->item_model2->del_yes_data();
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
                    Item Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Update
                </th>
                <th>
                    Delete
                </th>
            </tr>";

             foreach ($query as $row) {
                  echo "  <tr>
                                    <td>".$row->i_no."</td>
                                    <td>".$row->catogery_name."</td>
                                    <td>".$row->i_name."</td>
                                    <td>".$row->i_desc."</td>
                                    <td>
                                        <div class=\"col-md-6\">
                                        <i class=\"fa fa-edit\" onclick=\"\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\" style=\"color: blue; cursor: pointer;\" ></i>                                        
                                        </div>
                                    </td>
                                    <td>
                    <div class=\"col-md-6\">
                        <i class=\"fa fa-remove\" onclick=\"delete_button(".$row->i_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\"  style=\"color: red; cursor: pointer;\"></i>
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
}
?>