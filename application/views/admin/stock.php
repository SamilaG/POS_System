    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Stock Items</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-1">
                <h5>Stock Items</h5>
            </div>
                <div class="col-md-2">
                <input class="form-control" placeholder="Search" name="iSearch" type="text" autofocus>
            </div>
            

             <div class="row">
                <div class="col-md-1">
                <h5>Name</h5>
            </div>
                <div class="col-md-2">
                <input class="form-control" placeholder="Name Search" name="nsearch" type="text" autofocus>
            </div>
            

             <div class="row">
                <div class="col-md-1">
                <h5>Catogery</h5>
            </div>
                <div class="col-md-2">
                <input class="form-control" placeholder="Catogery Search" name="csearch" type="text" autofocus>
            </div>
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
                                      <p style="text-align: center;">Item Name </p>
                                        
                                    </th>
                                    <th>
                                       <p style="text-align: center;"> Catogery Name</p>
                                        
                                    </th>
                                    <th>
                                      <p style="text-align: center;"> Qut</p>
                                        
                                    </th>
                                    <th>
                                       <p style="text-align: center;"> Price</p>
                                    </th>
                                    <th>
                                       <p style="text-align: center;">Edit</p>
                                    </th>
                                    <th>
                                        Change Stock
                                    </th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>LBag</td>
                                    <td>Bag</td>
                                    <td>50</td>
                                    <td>250</td>
                                    <td>
                                        <div class="col-md-6">
                                        <a href="<?=base_url() ?>edititem"><button class="btn btn-sm btn-info btn-block" name="edit" style="width: 100%;">Price</button>
                                        </a>
                                         </div>
                                    </td>
                                    <td><div class="col-md-6">
                                        <button class="btn btn-sm btn-info  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Qut</button>
                                        <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            Do You want to change this Stock?
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

                                <tr>
                                    <td>01</td>
                                    <td>LBag</td>
                                    <td>Bag</td>
                                    <td>50</td>
                                    <td>250</td>
                                    <td>
                                        <div class="col-md-6">
                                        <a href="<?=base_url() ?>edititem"><button class="btn btn-sm btn-info btn-block" name="edit" style="width: 100%;">Price</button>
                                        </a>
                                         </div>
                                    </td>
                                    <td><div class="col-md-6">
                                        <button class="btn btn-sm btn-info  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Qut</button>
                                        <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            Do You want to change this Stock?
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
                                </tr><tr>
                                    <td>01</td>
                                    <td>LBag</td>
                                    <td>Bag</td>
                                    <td>50</td>
                                    <td>250</td>
                                    <td>
                                        <div class="col-md-6">
                                        <a href="<?=base_url() ?>edititem"><button class="btn btn-sm btn-info btn-block" name="edit" style="width: 100%;">Price</button>
                                        </a>
                                         </div>
                                    </td>
                                    <td><div class="col-md-6">
                                        <button class="btn btn-sm btn-info  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Qut</button>
                                        <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            Do You want to change this Stock?
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
                                </tr><tr>
                                    <td>01</td>
                                    <td>LBag</td>
                                    <td>Bag</td>
                                    <td>50</td>
                                    <td>250</td>
                                    <td>
                                        <div class="col-md-6">
                                        <a href="<?=base_url() ?>edititem"><button class="btn btn-sm btn-info btn-block" name="edit" style="width: 100%;">Price</button>
                                        </a>
                                         </div>
                                    </td>
                                    <td><div class="col-md-6">
                                        <button class="btn btn-sm btn-info  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Qut</button>
                                        <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Updating Stock</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            Do You want to change this Stock?
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