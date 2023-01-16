    <script type="text/javascript">
    function check_email(msg) {
           // document.getElementById('msg_id').innerHTML=msg;
           if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var amount = xmlhttp.responseText;
                        if (amount>0) {
                            document.getElementById("msg_id").innerHTML = 'your acount has been already existed';
                            document.getElementById("btn_add").disabled =true;


                        }else{
                            document.getElementById("msg_id").innerHTML = '';
                            document.getElementById("btn_add").disabled =false;
                        }
                    }
                };
                xmlhttp.open("GET","<?php echo base_url(); ?>" + "add_member/ajax_fun_reg?msg="+msg,true);
                xmlhttp.send();
       }   
    </script>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Members</h1>
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
                        <form role="form" action="<?=base_url()?>add_member/u_registration" method="POST">
                            
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
                                    <div class="col-md-8"><input class="form-control" placeholder="E-mail" name="uemail" type="email" required="" onkeyup="check_email(this.value);" autocomplete="off"></div>
                                </div>
                                
                                <div class="row fieldsetrow"><!--add members row-->
                                    <div class="col-md-4"><label>Address:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Address" name="uaddrs" type="text" required="" autocomplete="off"></div>
                                </div>
                                <div class="row fieldsetrow"><!--add members row-->
                                    <div class="col-md-4"><label>Password:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Password" name="password" type="password" required="" autocomplete="off"></div>
                                </div>
                                <div class="row fieldsetrow"><!--add members row-->
                                    <div class="col-md-4"><label>Conform Password:</label> </div>
                                    <div class="col-md-8"><input class="form-control" placeholder="Conform Password" name="c_pass" type="password" required="" autocomplete="off"></div>
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