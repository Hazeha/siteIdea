<?php 
// Der skal laves en form app, der kan v�lge s�ge kreterier for forskellige jobs.
// Der skal laves en form app til at apply for jobs. Jeg har allerede lavet funktonen (jobApply)
// Skal ha ryddet op i koden.
	session_start(); 
	include("class/jobClass.php");
	$jobs = new JOB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Modbay - Jobs</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/css_new.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
       <!-- Header start-->
        <?php include 'includes/header.php';?>
        <!--Header Slut-->

	<!-- Sidenav skal laves om til en form. -->
        <div id="sidebar-wrapper">
            <!--Side Nav Start-->
            <ul class="sidebar-nav">
                <li class="sidebar-sitepage">
                    <h2><strong><?php echo $total_jobs; ?> Jobs</strong></h2>
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
                    <center>
                    <button type="submit" class="btn" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp; Post Job
                </button>
                </center>
                
                <li class="divider"></li>
            </ul>
        </div><!--Side Nav Slut-->
        <div class="container-fluid">
            <!--Page Header Start-->
            <div class="row">
                <div class="col-lg-12">
                
                    
                    
                    <h1 class="page-header"><strong>New Jobs</strong></h1>
                    
                </div>
            </div>
        </div><!--Page Header Slut-->
        <div class="container-fluid">
            <!--Page Start-->
            <div class="row"></div><!-- Games Here-->
            <div class="row">
                <!--Mod Sale Start-->
                <?php $jobs->jobPost();?>
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