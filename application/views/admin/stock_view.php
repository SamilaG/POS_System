<script type="text/javascript">
    //********************************************************************************************************
     
// <?php
//         foreach ($stock_up as $row) {
//             $i_no = $row->i_no;
//             $i_name = $row->i_name;
//             $qut = $row->qut;
//         }
//        ?>




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
function update_fun(x){
    if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                        document.getElementById("upd").innerHTML = xmlhttp.responseText;
                        
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_stock/btn_update?update="+x,true);
                xmlhttp.send();
}

function update_cost(y){
    if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                        document.getElementById("updy").innerHTML = xmlhttp.responseText;
                        
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_stock/btn_update_cost?id="+y,true);
                xmlhttp.send();
}








function update_price(id){
    //alert('gggg');
    var qut = document.getElementById('qut').value;
    $('#myModal2').modal('hide');
    
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
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "view_stock/stockcost_update?id="+id+"&qut="+qut,true);
                xmlhttp.send();

}
</script>


    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Stock</h1>
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
                    Item Name
                </th>
                <th>
                    Qut
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
            </tr>
                <?php
                 // echo count($fetch_data);
                	if ($fetch_data) {

                		foreach ($fetch_data as $row) {
                			 ?>
								<tr>
									<td><?php echo $row-> i_no; ?></td>
									 <td><?php echo $row-> i_name; ?></td>
									<td><?php echo $row-> qut; ?></td>
                                    <td><?php echo $row-> cost; ?></td>
									<td>
										<div class="col-md-6">
                        				<i class="fa fa-edit" onclick="update_fun(<?=$row->i_no?>);" data-toggle="modal" data-target="#myModal"  id="" style="color: blue; cursor: pointer;" ></i>	
                                            <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body --><div id="upd">
                                                          

                                                          
                                                         

                                                          <!-- Modal footer -->
                                                          
                                                       
                                                         </div>
                                                           </div>
                                                           <br>
                                                           <br>



                                                           </div>
                                                      </div>
                                                    </div>
                   							
                   						</div>
									</td>
                                    <td>
                                       <div class="col-md-6">
                                        <i class="fa fa-edit" onclick="update_cost(<?=$row->i_no?>);" data-toggle="modal" data-target="#myModal2"  id="" style="color: blue; cursor: pointer;" ></i>  
                                            <!-- The Modal -->
                                                    <div class="modal" id="myModal2">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body --><div id="updy">
                                                          

                                                          
                                                         

                                                          <!-- Modal footer -->
                                                          
                                                       
                                                         </div>
                                                           </div>
                                                           <br>
                                                           <br>



                                                           </div>
                                                      </div>
                                                    </div>
                                            
                                        </div> 
                                    </td>
									<td>
						<div class="col-md-6">
                                    



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