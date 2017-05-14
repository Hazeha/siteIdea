 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Modbay - Arma 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/mb-market.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Header start-->
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
                                        <label><input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                    </div><!-- Change this to a button or input when using this as a form -->
                                    <a class="btn btn-lg btn-success btn-block" href="index.php">Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Selling Mods</a>
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
        </nav><!--Header Slut-->
        <div id="sidebar-wrapper">
            <!--Side Nav Start-->
            <ul class="sidebar-nav">
                <li class="sidebar-sitepage">
                    <h2><strong>Marketplace</strong></h2>
                </li>
                
                    <div class="form-group">
                        <label>Arma Tags</label>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Stratis</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Arma Life</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Mapping</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Modelling</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> HUD Design</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Vehicles</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Jobs</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Entity</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> 
                            Donation
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Budget</label> <select class="form-control">
                            <option>
                                5$
                            </option>
                            <option>
                                10$
                            </option>
                            <option>
                                15$
                            </option>
                            <option>
                                30$
                            </option>
                            <option>
                                Any
                            </option>
                        </select>
                    </div>
                
                <li class="divider"></li>
            </ul>
        </div><!--Side Nav Slut-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pull-right">1 Scripts</h2>
                    <h1 class="page-header"><strong>Featured Arma 1 Scripts</strong></h1>
                    <div class="dropdown col-md-3">
                        <button class="btn dropdown-toggle" data-toggle="dropdown" type="button">Sort By <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Title A-Z</a>
                            </li>
                            <li>
                                <a href="#">Title Z-A</a>
                            </li>
                            <li style="list-style: none; display: inline">
                                <hr>
                            </li>
                            <li>
                                <a href="#">Price Accending</a>
                            </li>
                            <li>
                                <a href="#">Price Deccending</a>
                            </li>
                            <li style="list-style: none; display: inline">
                                <hr>
                            </li>
                            <li>
                                <a href="#">Rating Accending</a>
                            </li>
                            <li>
                                <a href="#">Rating Deccending</a>
                            </li>
                            <li style="list-style: none; display: inline">
                                <hr>
                            </li>
                            <li>
                                <a href="#">Date Accending</a>
                            </li>
                            <li>
                                <a href="#">Date Deccending</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Games Here-->
            <div class="row">
                <!--Mod Sale Start-->
                <div class="col-md-3 portfolio-item col-md-4">
                    <div class="thumbnail">
                        <img alt="" src="img/img1.png">
                        <div class="caption">
                            <h4 class="pull-right">$5.50</h4>
                            <h4><a href="item.php">RMeth</a></h4>
                            <p>Description.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span></p>
                        </div>
                    </div>
                </div><!--Mod Sale Slut-->
            </div>
        </div><!-- Footer -->
        <footer id="footer">
            <ul class="menu">
                <li>
                    <h3><a href="#">Registered Users 9001</a></h3>
                </li>
                <li>
                    <h3><a href="#">Scripts for sale 1233</a></h3>
                </li>
                <li>
                    <h3><a href="#">Online Users 102</a></h3>
                </li>
                <li>
                    <h3><a href="#">96 Different Games</a></h3>
                </li>
            </ul>
            <hr>
            <ul class="menu">
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">Terms of Use</a>
                </li>
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul><span class="copyright">&copy; Copyright. All rights reserved. Modbay 2017</span>
        </footer>
    </div><!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>