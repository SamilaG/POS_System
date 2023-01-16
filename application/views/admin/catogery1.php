    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Catogery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-2">
                <h5>Search</h5>
            </div>
                <div class="col-md-4">
                <input class="form-control" placeholder="Search" name="Search" type="text" autofocus>
            </div>
            </div>

            <div class="row" >
                <div style="overflow-x:auto; class="table-responsive-sm ">
                        <table class="table">
    ...                         <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Catogery Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Bag</td>
                                    <td>large</td>
                                    <td>
                                        <div class="col-md-6">
                                          <a href="<?=base_url() ?>editcatogery">
                                        <button class="btn btn-sm btn-info btn-block" name="edit">Edit</button></a>
                                         </div>
                                    </td>
                                    <td><div class="col-md-6">
                                        <button class="btn btn-sm btn-danger  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Delete</button>
                                        <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Deleting</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            Do You want to delete this Catogery?
                                                          </div>

                                                          <!-- Modal footer -->
                                                          
                                                        <div class="row">
                                                          <div class="col-md-5"></div>
                                                          <div class="col-md-1">
                                                         <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                                                          </div>
                                                          <div class="col-md-1">
                                                         <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                          </div>
                                                          <div class="col-md-5"></div>
                                                           
                                                           </div>
                                                           <br>
                                                           <br>



                                                           </div>
                                                      </div>
                                                    </div>
                                                    </div>
</td>
                                </tr>
                        </table>
                </div>

                </div>




            </div>

           
        <!-- /#page-wrapper -->
    </div> 