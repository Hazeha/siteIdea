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
                    <h1 class="page-header"><strong>Upload Addon</strong></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Games Here-->
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Addon Description
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <img class="img-thumbnail" src="images/pic01.png" width="400px">
                                <center>
                                    <button class="btn btn-default">Upload Picture</button>
                                </center>
                            </div>
                            <div class="col-lg-9">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Details
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label class="exampleInputName1">Script name</label> <input class="form-control" id="exampleInputName1" placeholder="The wick whak mod" type="email">
                                                <label class="exampleInputName1">Price</label> <input class="form-control" id="exampleInputPrice1" placeholder="$">
                                           
                                                <label for="SelectGame1">Select Game</label> <select class="form-control" id="SelectGame1">
                                                    <option>
                                                        Arma
                                                    </option>
                                                    <option>
                                                        ARQ
                                                    </option>
                                                    <option>
                                                        Garrys Mod
                                                    </option>
                                                    <option>
                                                        Grand Theft Auto
                                                    </option>
                                                    <option>
                                                        H1Z1
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="form-check form-check-inline" style="margin-top: 15px;">
                                                <label class="form-check-label"><input class="form-check-input" id="Tag1" type="checkbox" value="option1"> Admin</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag2" type="checkbox" value="option2"> Chat</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag3" type="checkbox" value="option1"> Moddeling</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag4" type="checkbox" value="option2"> DarkRP</label>
                                           
                                                <label class="form-check-label"><input class="form-check-input" id="Tag5" type="checkbox" value="option1"> Inventory</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label"><input class="form-check-input" id="Tag6" type="checkbox" value="option2"> motd</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag7" type="checkbox" value="option2"> gameplay</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag8" type="checkbox" value="option2"> maps</label>
                                            
                                                <label class="form-check-label"><input class="form-check-input" id="Tag9" type="checkbox" value="option2"> shop</label>
                                            </div>
                                        </form>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleTextarea">Description</label> 
                                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Addon</label> <input aria-describedby="fileHelp" class="form-control-file" id="exampleInputFile" type="file"> <small class="form-text text-muted" id="fileHelp">Upload only zip files.</small>
                                        </div>
                                    </form>

                                    <center>
                                        <div class="form-check">
                                            <label class="form-check-label"><input class="form-check-input" id="Tag9" type="checkbox" value="option2"> This is my script and i created it myself</label> <button class="btn btn-secondary" type="button">Upload Script</button>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div>
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
    </footer><!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script> 
</body>
</html>