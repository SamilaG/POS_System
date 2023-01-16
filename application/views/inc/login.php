    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <p class="text-center">Welcome to "<b>StoreHub</b>" To continue, Please Login using your User Name and Passwrd below...</p>
                    <div class="panel-body">
                        <form method="post" action="<?=base_url()?>Login/login_details">
                            <fieldset>
                                <div class="form-group">
<!--<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus name="u_name">-->
                               <input class="form-control" placeholder="E-mail" type="text" name="u_name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="pwd">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" name="remember">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>