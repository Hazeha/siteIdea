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
                <li>
                    <a href="scriptport.php">View Scripts</a>
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
                    <h1 class="page-header"><strong>Dashboard</strong></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Games Here-->
            <div class="row">



                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile - Profile Name
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <img src="images/pic01.png" class="img-thumbnail"> 
                                    <button class="btn btn-default">Change Picture</button>
                                </div>
                                <ul>
                                    <li>Nickname : Nickname</li>
                                    <li>Join Date : Date</li>
                                    <li>Reputation : rep</li>
                                    <li>Scripts : 12</li>
                                    <li>Rating : 10/10</li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                        Biography
                                    </div>
                                        <div class="panel-heading pull-right">Scripts</div>
                                        <div class="panel-body">
                                            <div class="col-lg-4">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <p>Lidt om ham som scripter, til dem som køber, eller vil hyre vedkommende til at lave deres job</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 pull-right">

                                                <P>Kolloner med scripts til salg, eller købt.</P>
                                            </div>
                                        </div>                        
                                </div>
                            </div>
                        </div><!-- /.panel-body -->
                    </div>
                </div>

                







                <div class="col-lg-4 pull-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Stat Panel
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a class="list-group-item" href="#"><i class="fa fa-comment fa-fw"></i> Scripts for sale <span class="pull-right text-muted small"><em>4</em></span>
                                </a> <a class="list-group-item" href="#"><i class="fa fa-twitter fa-fw"></i> Updated scripts <span class="pull-right text-muted small"><em>9001</em></span></a> 
                                <a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Brought Scripts <span class="pull-right text-muted small"><em>9</em></span></a> 
                                <a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sold Scripts <span class="pull-right text-muted small"><em>9</em></span></a> 
                                <a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Payments <span class="pull-right text-muted small"><em>1337</em></span></a>
                            </div>
                        </div><!-- /.panel-body -->
                    </div>
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Support
                            <div class="btn-group pull-right">
                                <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" type="button"><i class="fa fa-chevron-down"></i></button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#"><i class="fa fa-refresh fa-fw"></i> Answer Tickets</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted"><i class="fa fa-clock-o fa-fw"></i> 12 mins ago</small>
                                        </div>
                                        <p>Harro!</p>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input class="form-control input-sm" id="btn-input" placeholder="Type your message here..." type="text"> <span class="input-group-btn"><button class="btn btn-warning btn-sm" id="btn-chat"><span class="input-group-btn">Send</span></button></span>
                            </div>
                        </div><!-- /.panel-footer -->
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