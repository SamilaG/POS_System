    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Item</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">msg</div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-body">
                        <form role="form" action="<?=base_url()?>Add_item/add_func_item" method="POST">
                            <fieldset>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Category Name:</label> 
                                    </div>
                                    <div class="col-md-8">
                                    <div class="form-group" style="width: 100%; background-color:#BEBEBE; ">
                                    <select class="form-control" name="catogery_name">
                                <?php
                                    if ($fetch_data->num_rows() > 0) {
                                        foreach ($fetch_data->result() as $row) {
                                             ?>
                                               <option value='<?php echo $row-> c_name; ?>'><?php echo $row-> c_name; ?></option>
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
                                      <!-- <option value="Page Admin">Category 01</option> -->
                                    </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Item Name:</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="Item Name" name="i_name" type="text" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Item Description:</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="Item Description" name="i_desc" type="text" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button class="btn btn-lg btn-success btn-block" name="add_i">Add Item<i class="fa fa-files-o fa-fw" style="margin-left: 20px;"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        <!-- /#page-wrapper -->
    </div> </div>