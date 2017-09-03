    <?php echo '
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><strong>Modbay.com</strong> make your gaming unique</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="market.php"><i class="fa fa-fw fa-dashboard"></i> Marketplace</a>
                </li>
                <li>
                    <a href="jobs.php"><i class="fa fa-fw fa-table"></i> Jobs</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Login<b class="caret"></b></a>
                    <div class="dropdown-menu" style="margin-left: 2em">
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input autofocus="" class="form-control" name="email" placeholder="E-mail" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" placeholder="Password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label class="pull-right"><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>

                                    <a href="register.php">Register</a>
                                    </div><a class="btn btn-lg btn-success btn-block" href="dashboard.php">Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="faq.php">Selling Mods</a>
                        </li>
                        <li>
                            <a href="#">Buying Mods</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Tearms and Conditions</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>';?>