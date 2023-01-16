<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_member extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('admin_login_modal');
        $this->load->model('member_model');
        $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('inc/sidebar01');
		$this->load->view('admin/member');
		$this->load->view('inc/footer');
	}

    public function u_registration(){
        if (isset($_POST['add'])){
//            echo "dfghj";
            extract ($_POST);
            $pass = md5($password);
            $data = array('u_type' => $catogery_type,
                         'uf_name' => $fname,
                         'ul_name' => $lname,
                         'u_dob'   => $dob,
                         'u_mail'  => $uemail,
                         'u_adrs'  => $uaddrs,
                         'pwd'     => $pass);
            //load member registration function/admin_login_model.php
            $this->admin_login_modal->member_reg($data);
        }
        
    }
    
    //this is to check member available email...
    public function ajax_fun_reg(){
        $mess = $_GET['msg'];
        //echo $mess;
         $data = $this->admin_login_modal->check_member($mess);
         echo count($data);
    }

//********************************************************************************************************
//Search ....
    public function inpt_search(){
        $srch = $_GET['srch'];
        $srch_data = $this->member_model->srch_memb($srch);
        // echo count($srch_data);
        // echo $srch;
        echo "<table class=\"table table-striped\">
    ...     <tr>
                <th>
                    ID
                </th>
                <th>
                   Type
                </th>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Date of Birth
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Address
                </th>
                 <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>";
            foreach ($srch_data as $row) {
             echo "
                     <tr>
                         <td>".$row->u_no."</td>
                         <td>".$row->u_type."</td>
                         <td>".$row->uf_name."</td>
                         <td>".$row->ul_name."</td>
                         <td>".$row->u_dob."</td>
                         <td>".$row->u_mail."</td>
                         <td>".$row->u_adrs."</td>
                         
                         <td>
                             <div class=\"col-md-6\">
                                  <center><i class=\"fa fa-edit\"></i></center>
                             </div>
                         </td>
                         <td>
         <div class=\"col-md-6\">
             <button class=\"btn btn-sm btn-danger btn-block \" onclick=\"delete_button(".$row->u_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\">Delete</button>
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
//***************************************************************************************************************

public function del_fun(){
    $u_no = $_GET['id'];
    $this->member_model->delete_data($u_no);
    $query = $this->member_model->del_yes_data();
    //$delete_data = $this->catogery_model->srch_cato();

    echo "<table class=\"table table-striped\">
    ...     <tr>
                 <th>
                    ID
                </th>
                <th>
                   Type
                </th>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Date of Birth
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Address
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
                        <td>".$row->u_no."</td>
                         <td>".$row->u_type."</td>
                         <td>".$row->uf_name."</td>
                         <td>".$row->ul_name."</td>
                         <td>".$row->u_dob."</td>
                         <td>".$row->u_mail."</td>
                         <td>".$row->u_adrs."</td>
                                    <td>
                                        <div class=\"col-md-6\">
                                             <center><i class=\"fa fa-edit\"></i></center>
                                        </div>
                                    </td>
                                    <td>
                    <div class=\"col-md-6\">
                        <i class=\"fa fa-remove\"  \" onclick=\"delete_button(".$row->u_no.");\" data-toggle=\"modal\" data-target=\"#myModal\"  id=\"\"  style=\"color: red; cursor: pointer;\"></i>
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