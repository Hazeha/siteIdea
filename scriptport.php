<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Modbay - Dashboard</title>
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
                                    <a class="btn btn-lg btn-success btn-block" href="dashboard.php">Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown"> Help<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"> Selling Mods</a>
                        </li>
                        <li>
                            <a href="#"> Buying Mods</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"> FAQ</a>
                        </li>
                        <li>
                            <a href="#"> Contact us</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"> Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#"> Tearms and Conditions</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!--Header Slut-->
        <div id="sidebar-wrapper">
            <!--Side Nav Start-->
            <ul class="sidebar-nav">
                <li class="sidebar-sitepage">
                    <h2>Profile</h2>
                </li>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="#">View Scripts</a>
                </li>
                <li>
                    <a href="#">Upload Script</a>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
                <li class="divider"></li>
            </ul>
        </div><!--Side Nav Slut-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Scripts</strong></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Games Here-->
            <div class="row">



                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brought scripts
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            
                                <div class="panel-heading pull-right"><strong>Script Name</strong><hr>
                                    <li>
                                        Price :
                                    </li>
                                    <li>
                                        Sales :
                                    </li>
                                    <li>
                                        Date Added :
                                    </li>
                                    <li>
                                        Game :
                                    </li>
                                    <li>
                                        <a href="#">Put on Sale</a>
                                    </li>
                                </div>
                                <img src="img/fallout-logo.jpg" class="img-thumbnail" height="150px" width="300px">
                            
                        </div><!-- /.panel-body -->

                        <div class="panel panel-default">
                            <div class="panel-body">
                            
                            <div class="panel-heading pull-right"><strong>Script Name</strong><hr>
                            <li>
                                Price :
                            </li>
                            <li>
                                Sales :
                            </li>
                            <li>
                                Date Added :
                            </li>
                            <li>
                                Game :
                            </li>
                            <li>
                                <a href="#">Put on Sale</a>
                            </li>
                            </div>
                                
                                <img src="img/fallout-logo.jpg" class="img-thumbnail" height="150px" width="300px">
                                
                            
                        </div><!-- /.panel-body -->
                        </div>
                    </div>
                </div>

                







                <div class="col-lg-6 pull-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Sold Scripts
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            
                                <div class="panel-heading pull-right"><strong>Script Name</strong><hr>
                                    <li>
                                        Price : 9$
                                    </li>
                                    <li>
                                        Update Date : 10 days ago
                                    </li>
                                    <li>
                                        Date Added : 01-01-2017
                                    </li>
                                    <li>
                                        Game : Fallout
                                    </li>
                                    <li>
                                        <a href="#">Update Avaible</a>
                                    </li>
                                </div>
                                <img src="img/fallout-logo.jpg" class="img-thumbnail" height="150px" width="300px">
                            
                        </div><!-- /.panel-body -->

                        <div class="panel panel-default">
                            <div class="panel-body">
                            
                            <div class="panel-heading pull-right"><strong>Script Name</strong><hr>
                            <li>
                                        Price : 9$
                                    </li>
                                    <li>
                                        Update Date : 10 days ago
                                    </li>
                                    <li>
                                        Date Added : 01-01-2017
                                    </li>
                                    <li>
                                        Game : Fallout
                                    </li>
                                    <li>
                                        <a href="#">Update Avaible</a>
                                    </li>                            </div>
                                
                                <img src="img/fallout-logo.jpg" class="img-thumbnail" height="150px" width="300px">
                                
                            
                        </div><!-- /.panel-body -->
                    </div>
                    
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
    </div>
</body>
</html>