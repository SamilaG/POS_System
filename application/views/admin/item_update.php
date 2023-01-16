<div id="wrapper">
<?php
    foreach ($i_update as $row) {
        $i_no = $row->i_no;
        //$catogery_name=$row->catogery_name;
        $i_name = $row->i_name;
        $i_desc = $row->i_desc;
    }
?> 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Item</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-body">
                        <form role="form" action="<?=base_url()?>i_up/item_up?id=<?=$row->i_no?>" method="POST">
                            <fieldset>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Category Name:</label> 
                                    </div>
                                    <div class="col-md-8">
                                    <div class="form-group" style="width: 100%; background-color:#BEBEBE; ">
                                    <select class="form-control" name="catogery_name">
                                    
                                      <option value="Page Admin">Category 01</option>
                                    </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Item Name:</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="Item Name" name="i_name" type="text" autocomplete="off" value="<?=$i_name?>">
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4">
                                        <label>Item Description:</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="Item Description" name="i_desc" type="text" autocomplete="off" value="<?=$i_desc?>">
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button class="btn btn-lg btn-success btn-block" name="up_item">Update Item<i class="fa fa-files-o fa-fw" style="margin-left: 20px;"></i></button>
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