<script type="text/javascript">
    //********************************************************************************************************

//this is for search...
        function search(search_val){
        //alert(search_val);
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
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_item/btn_search?srch="+search_val,true);
                xmlhttp.send();



    }
//********************************************************************************************************
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
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_item/func_btn?msg="+id,true);
                xmlhttp.send();

    
         
    }
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
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_item/del_fun?id="+del_yes,true);
                xmlhttp.send();
    }

//********************************************************************************************************
</script>


    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Items</h1>
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
    <div style="overflow-x:auto; class="table-responsive">
        <table class="table table-striped">
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
            </tr>
                <?php
                	if ($fetch_data->num_rows() > 0) {
                		foreach ($fetch_data->result() as $row) {
                			 ?>
								<tr>
									<td><?php echo $row->i_no; ?></td>
									<td><?php echo $row->catogery_name; ?></td>
                                    <td><?php echo $row->i_name; ?></td>
									<td><?php echo $row->i_desc; ?></td>
									<td>
										<div class="col-md-6">
                        				<a href="<?=base_url()?>i_up?id=<?=$row->i_no?>"><i class="fa fa-edit"></i></a>
                       							<!-- <button class="btn btn-sm btn-info btn-block" >Update</button> -->
                   							
                   						</div>
									</td>
									<td>
						<div class="col-md-6">
                                    <i class="fa fa-remove" onclick="delete_button(<?=$row->i_no?>);" data-toggle="modal" data-target="#myModal"  id="" style="color: red; cursor: pointer;" ></i>
                    	<!-- <button class="btn btn-sm btn-danger  btn-block" name="delete" data-toggle="modal" data-target="#myModal">Delete</button> -->
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