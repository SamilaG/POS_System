<script type="text/javascript">
   function delete_button(id){
        //alert(id);

         if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                        document.getElementById("delete").innerHTML = xmlhttp.responseText;
                        
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "add_member/func_btn?msg="+id,true);
                xmlhttp.send();

    
         
    }
//***************************************************************************************************************
//yes button of delete...
    function del_fun(del_yes){
        //alert(msg);
        if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                        document.getElementById("search").innerHTML = xmlhttp.responseText;
                        
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "add_member/del_fun?id="+del_yes,true);
                xmlhttp.send();
    }

//***************************************************************************************************************

    function search(search_val){
            //this is for search...
if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                        document.getElementById("search").innerHTML = xmlhttp.responseText;
                        
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "add_member/inpt_search?srch="+search_val,true);
                xmlhttp.send();
    }

//**************************************************************************************************************
</script> 


    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Members Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
<div class="row">
                
<div class="col-md-12">
    <div class="panel-body">
<!-- View catogery Table -->
	<div class="row">
        <div class="col-md-2">
            <h5>Search</h5>
        </div>
    	<div class="col-md-4">
        	<input class="form-control" placeholder="Search" name="search" type="text" autofocus onkeyup="search(this.value);">
    	</div>
	</div>
						
<div class="row" id="search">
    <div style="overflow-y:auto; class="table-responsive-xs ">
<table class="table table-striped">
    ...     <tr>
                <th>
                    ID
                </th>
                <!-- <th>
                   Type
                </th> -->
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
                    Update
                </th>
                <th>
                    Delete
                </th>
               <!--  <th>
                    Address
                </th> -->
            </tr>
                <?php
                    if ($fetch_data->num_rows() > 0) {
                        foreach ($fetch_data->result() as $row) {
                             ?>
                                <tr>
                                    <td><?php echo $row-> u_no; ?></td>
                                    <!-- <td><?php echo $row-> u_type; ?></td> -->
                                    <td><?php echo $row-> uf_name; ?></td>
                                    <td><?php echo $row-> ul_name; ?></td>
                                    <td><?php echo $row-> u_dob; ?></td>
                                    <td><?php echo $row-> u_mail; ?></td>
                                    <td><?php echo $row-> u_adrs; ?></td> 
                                    <td style="padding-left: 0px; padding-right: 0px;">
                                        <div class="col-md-6">
                                            <a href="<?=base_url()?>m_up"><i class="fa fa-edit" onclick=""></i></a>
                                        </div>
                                    </td>
                                    <td>
                    <div class="col-md-6">
                        <i class="fa fa-remove"  onclick="delete_button(<?=$row->u_no?>);" data-toggle="modal" data-target="#myModal" style="color: red;" ></i>
                        <!-- <button class="btn btn-xs btn-danger btn-block " onclick="" data-toggle="modal" data-target="#myModal"  id="">Delete</button> -->
                        <div id ="aaa"></div>
                <div class="modal" id="myModal">
                    <div id="delete">
                                    
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <?php
        }
        }else{
    ?>
    <tr>
        <td colspan="3">No Data found</td> 
    </tr>
    <?php
            }
    ?>
</table>
</div>
</div>
<!-- end of catogery table -->
</div>
</div>
</div>
<!-- /#page-wrapper -->
</div> 
</div>