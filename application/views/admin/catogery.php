
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Catogery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
               <p id="msg_id" class="" style="color: red;"></p>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-body">
                        <form role="form" action="<?=base_url()?>add_catogery/add_cato" method="POST">
                            <fieldset>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"><label>Category Name:</label> </div>
                                    <div class="col-md-8">
                                <input class="form-control" placeholder="Category Name" name="catogery_type" type="text" autocomplete="off" onkeyup="check_c_no(this.value);" style="">
                                </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"><label>Description:</label> </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" placeholder="Description" name="desc" type="text" autocomplete="off"></textarea>
                                        <!-- <input class="form-control" placeholder="Description" name="desc" type="text" > -->
                                    </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button class="btn btn-lg btn-success btn-block" name="add_c">Add Cotogery<i class="fa fa-files-o fa-fw" style="margin-left: 20px;"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        <!-- /#page-wrapper -->
    </div> 