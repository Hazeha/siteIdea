<?php require_once 'session.php'; ?>
<?php include 'includes/data/jobs/data_get.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Modbay - Jobs</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/mb-market.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
       <!-- Header start-->
        <?php include 'includes/header.php';?>
        <!--Header Slut-->
        <div id="sidebar-wrapper">
            <!--Side Nav Start-->
            <ul class="sidebar-nav">
                <li class="sidebar-sitepage">
                    <h2><strong>Jobs</strong></h2>
                </li>
                
                    <div class="form-group">
                        <label>Games</label>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Arma 1</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Arma 2</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Arma 3</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Garrys Mod</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">GTA</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Minecraft</label>
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
                    <div class="form-group">
                        <label>Category</label> <select class="form-control">
                            <option>
                                Roleplaying
                            </option>
                            <option>
                                Modeling
                            </option>
                            <option>
                                Mapping
                            </option>
                            <option>
                                Scripting
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
            <!--Page Header Start-->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pull-right"><?php echo $total_jobs; ?> Jobs</h2>
                    <h1 class="page-header"><strong>New Jobs</strong></h1>
                </div>
            </div>
        </div><!--Page Header Slut-->
        <div class="container-fluid">
            <!--Page Start-->
            <div class="row"></div><!-- Games Here-->
            <div class="row">
                <!--Mod Sale Start-->
                <?php include 'includes/data/jobs/post.php'; ?>
            </div>
        </div><!--Page Slut-->
        <footer id="footer">
            <?php include 'includes/footer.php';?>
        </footer>

    </div><!-- wrapper slut-->
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>