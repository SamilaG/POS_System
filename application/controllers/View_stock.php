
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_stock extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar01');
		$data["fetch_data"] = $this->item_model->up_data();
		$this->load->view('admin/stock_view',$data);
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
                    Item Name
                </th>
                <th>
                    qut
                </th>
                <th>
                    Cost
                </th>
                <th>
                    Qut Update
                </th>
                 <th>
                    Cost Update
                </th>
            </tr>";
            foreach ($srch_data as $row) {
             echo "
                     <tr>
                         <td>".$row->i_no."</td>
                         <td>".$row->i_name."</td>
                         <td>".$row->qut."</td>
                         <td>".$row->cost."</td>

                         <td>
                             <div class=\"col-md-6\">
                                  <button class=\"btn btn-sm btn-info btn-block\" >
                                                    Update
                                 </button>
                             </div>
                         </td>
                         <td>
         <div class=\"col-md-6\">
             <button class=\"btn btn-sm btn-danger btn-block \" onclick=\"delete_button(".$row->i_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\">Delete</button>
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
public function btn_update(){

    $up = $_GET['update'];
    $data = $this->item_model->get_items_update($up);
    foreach ($data as $row) {
       echo "
        <div class=\"modal-body\">
                                                            
                                                            Do You want to change this Stock?
                                                                
                                                                    
                                                                </div>
                                                        <div class=row>
                                                            <div class=\"col-md-2\"></div>
                                                            <div class=\"col-md-3\">
                                                               <label>Item Id</label>
                                                                </div>

                                                                <div class=\"col-md-1\"></div>
                                                                <div class=\"col-md-2\">
                                                               <label>".$row->i_no."</label>
                                                                </div>
                                                        </div>

                                                        <div class=row>
                                                        <div class=\"col-md-2\"></div>    
                                                            <div class=\"col-md-3\">
                                                                <label>Item Name</label>
                                                            </div>
                                                            <div class=\"col-md-1\"></div>
                                                                <div class=\"col-md-2\">
                                                               <label>".$row->i_name."</label>
                                                                </div>
                                                        </div>

                                                             <div class=row>
                                                                <div class=\"col-md-2\"></div>
                                                            <div class=\"col-md-3\">
                                                                <label>qut</label> 
                                                            </div>
                                                            <div class=\"col-md-1\"></div>
                                                            <div class=\"col-md-4\"><input type=\"text\"class=\"form-control\" id=\"qut\" value=\"$row->qut\" placeholder=\"qut\" name=\"qut\" >
                                                            </div>
                                                            
                                                        </div>
                                                        <br>
                                                        <br>
                                                         <div class=\"row\">
                                                          <div class=\"col-md-5\"></div>
                                                          <div class=\"col-md-1\">
                                                         <button type=\"button\" onclick=\"update_quty(".$row->i_no.");\" class=\"btn btn-danger\" data-dismiss=1\"

                                                         modal\">Update</button>
                                                          </div>
                                                          <div class=\"col-md-1\"></div>
                                                          <div class=\"col-md-1\">
                                                         <button type=\"button\"  class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                                                          </div>
                                                          


                                                          <div class=\"col-md-4\"></div>
                                                             </div>
                                                             <br>
       ";
    }

    }
    public function stock_update(){
       $id = $_GET['id'];
       $qut = $_GET['qut'];
       $amount = $this->get_qut_amount($id);
       $amount_qut = $qut + $amount;
       $data = array('qut' => $amount_qut);
       $this->item_model->update_quty($id,$data);


    }
    public function get_qut_amount($id){
        $data = $this->item_model->get_items_update($id);
        foreach ($data as $row) {
            $amount = $row->qut;
        }
        return $amount;
    }





public function btn_update_cost(){
    $id = $_GET['id'];
    $data = $this->item_model->get_items_update($id);
    foreach ($data as $row) {
       echo "
        <div class=\"modal-body\">
                                                            
                                                            Do You want to change this Stock?
                                                                
                                                                    
                                                                </div>
                                                        <div class=row>
                                                            <div class=\"col-md-2\"></div>
                                                            <div class=\"col-md-3\">
                                                               <label>Item Id</label>
                                                                </div>

                                                                <div class=\"col-md-1\"></div>
                                                                <div class=\"col-md-2\">
                                                               <label>".$row->i_no."</label>
                                                                </div>
                                                        </div>

                                                        <div class=row>
                                                        <div class=\"col-md-2\"></div>    
                                                            <div class=\"col-md-3\">
                                                                <label>Item Name</label>
                                                            </div>
                                                            <div class=\"col-md-1\"></div>
                                                                <div class=\"col-md-2\">
                                                               <label>".$row->i_name."</label>
                                                                </div>
                                                        </div>

                                                             <div class=row>
                                                                <div class=\"col-md-2\"></div>
                                                            <div class=\"col-md-3\">
                                                                <label>cost</label> 
                                                            </div>
                                                            <div class=\"col-md-1\"></div>
                                                            <div class=\"col-md-4\"><input type=\"text\"class=\"form-control\" id=\"qut\" value=\"".$row->cost."\" placeholder=\"qut\" name=\"qut\" >
                                                            </div>
                                                            
                                                        </div>
                                                        <br>
                                                        <br>
                                                         <div class=\"row\">
                                                          <div class=\"col-md-5\"></div>
                                                          <div class=\"col-md-1\">
                                                         <button type=\"button\" onclick=\"update_price(".$row->i_no.");\" class=\"btn btn-danger\" data-dismiss=1\"

                                                         modal\">Update</button>
                                                          </div>
                                                          <div class=\"col-md-1\"></div>
                                                          <div class=\"col-md-1\">
                                                         <button type=\"button\"  class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                                                          </div>
                                                          


                                                          <div class=\"col-md-4\"></div>
                                                             </div>
                                                             <br>
       ";
   

    }
}
public function stockcost_update(){
    $id = $_GET['id'];
    $cost = $_GET['qut'];
    $data = array('cost' => $cost );
    $this->item_model->cost_add($data,$id);
}











}

?>