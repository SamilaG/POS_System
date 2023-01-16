    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cart</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
            <div class="row" >
                <div style="overflow-x:auto" class="table-responsive-sm">
                        <table class="table">
    ...                         <tr>
                                    <th>
                                        No
                                    </th>
                                    
                                    <th>
                                       <p>Items Name</p>
                                        
                                    </th>
                                    <th>
                                      <p>Qut</p>
                                        
                                    </th>
                                    <th>
                                       <p>Unit Price</p>
                                    </th>
                                    
                                    <th>
                                       <p>Total Amount</p>
                                    </th>
                                    <th>
                                       <p>Delete</p>
                                    </th>
                                    
                                </tr>
                                    <tr>
                                    <td>01</td>
                                    <td>Bag</td>
                                    <td>5</td>
                                    <td>20</td>
                                    <td>100</td>
                                    <td>
                                      <div class="col-md-6">
                                      <button class="btn btn-sm btn-danger  btn-block" name="edit" data-toggle="modal" data-target="#myModal">Delete</button>
                                        <!-- The Modal -->
                                          <div class="modal" id="myModal">
                                                      
                                          </div>
                                      </div>
                                    </td>
                                </tr>

                                <tr id="row_amount" style="background-color: #f1f0f0;">
                                  <td colspan="2" id="amount_lable"><h2>Amount</h2></td>
                                  <td colspan="4" id="amount" style="text-align: right;"><h1>55522.00 LKR</h1></td>
                                </tr>
                        </table>
                </div>

                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="row fieldsetrow">
                    <div class="col-md-4"><label>Item:</label> </div>
                    <div class="col-md-8"><input class="form-control" placeholder="Item" name="fname" type="text" autofocus autocomplete="off"></div>
                </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row fieldsetrow">
                    <div class="col-md-4"><label>Amount:</label> </div>
                    <div class="col-md-8"><input class="form-control" placeholder="Amount" name="lname" type="text" required="" autocomplete="off"></div>
                </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row fieldsetrow">
                    <div class="col-md-4"><label>Barcode:</label> </div>
                    <div class="col-md-8"><input class="form-control" placeholder="Barcode" name="dob" type="text" required="" autocomplete="off"></div>
                </div>
                  </div>
                </div>
                                
        <!-- /#page-wrapper -->
    </div> 