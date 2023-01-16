
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Members</h1>
            </div>
<!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- this is for alert -->
        <div class="row" >
            <p id="msg_id" class="" style="color: red;"></p>
        </div>
        <!-- end of alert -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                               <div class="row fieldsetrow">
                                     <div class="col-md-4"><label>Member Type:</label> </div>
                                    <div class="col-md-8">
                                <div class="form-group" style="width: 100%;">
                                    <select class="form-control" name="catogery_type">
                                      <option value="3">Cashier</option>
                                      <option value="2">Editor</option>
                                      <option value="1">Admin</option>
                                      
                                    </select>
                                </div>
                                </div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"><label>First Name:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="First Name" name="fname" type="text" autofocus autocomplete="off"></div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"><label>Last Name:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Last Name" name="lname" type="text" required="" autocomplete="off"></div>
                                </div>
                                <div class="row fieldsetrow">
                                    <div class="col-md-4"><label>Date of Birth:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Type" name="dob" type="date" required="" autocomplete="off"></div>
                                </div>
                                
                                <div class="row fieldsetrow"><!--add members row-->
                                    <div class="col-md-4"><label>Email:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="E-mail" name="uemail" type="email" required="" onkeyup="" autocomplete="off"></div>
                                </div>
                                
                                <div class="row fieldsetrow"><!--add members row-->
                                    <div class="col-md-4"><label>Address:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Address" name="uaddrs" type="text" required="" autocomplete="off"></div>
                                </div>
                                                               
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button class="btn btn-lg btn-success btn-block" name="add" id="btn_add">Add Details<i class="fa fa-files-o fa-fw" style="margin-left: 20px;"></i></button>
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
</div>