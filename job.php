<?php session_start();
include 'includes/server/connect.php';
require_once('class/jobClass.php'); 
require_once('class/userClass.php');
$auth_user = new USER();
$job = new JOB();
$stmt = $auth_user->runQuery(""); //?? Baske??
											
$job_seen = 10;
$job_comments = 4;							/* Variable til show af tabs i siden  og som skal laves */
$job_apply = 8;
											
if(isset($_GET['jobId']))
{
    $jobId = $_GET['jobId']; //Kan ikke sættes direkte ned i $job->jetGet
    $job->jobGet($jobId);
	$data = $job->jobGet($jobId);
	foreach($data as $post)
		{
			$job_name = $post["jobName"];
			$job_description = $post["jobDescription"];
			$job_salary_max = $post["jobMaxBudget"];
			$job_salary_min = $post["jobMinBudget"];
			$job_upload = $post["jobUploadDate"];			
			$job_game = $post["jobGame"];
			$job_author = $post["jobClientId"];
			$job_cat = $post["jobCat"];
		}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Modbay - <?php echo $job_name; ?></title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/css_new.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Header start-->
        <?php include 'includes/header.php';?>
        <!--Header Slut-->
        <div id="sidebar-wrapper">
            <!--Side Nav Start-->
            <div class="sidebar-nav">
                <ul class="sidebar-nav">
                    <li class="sidebar-sitepage">
                        <h2><strong>Jobs</strong></h2>
                        <h4><strong>Games</strong></h4>
                    </li>
                    <li>  
                        <a href="#">Arma 1</a>
                    </li>
                    <li>
                        <a href="#">Arma 2</a>
                    </li>
                    <li>
                        <a href="#">Arma 3</a>
                    </li>
                    <li>
                        <a href="#">Garrys Mod</a>
                    </li>
                    <li>
                        <a href="#">Grand Theft Auto</a>
                    </li>
                    <li>
                        <a href="#">Minecraft</a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </div>   <!-- Skal laves om -->
        </div><!--Side Nav Slut-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1><?php echo $job_name; ?></h1>
                        <p class="lead">for <a href="#"><?php echo $job_game; ?></a> - <?php echo $job_cat; ?></a></p>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#overview">Overview</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews">Comments</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="overview">
                                        <hr>
                                        <!-- Post Content -->
                                        <p class="lead"><?php echo $job_description; ?> </p>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">
                                        <hr>
                                        <!-- Posted Comments -->
                                        <!-- Comment -->

                                        <hr>
                                        <div class="well">
                                            <h4>Leave a Comment:</h4>
                                            <form role="form">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div><button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.panel-body -->
                        </div><!-- Preview Image -->
                        <!-- Blog Comments -->
                        <!-- Comments Form -->
                    </div><!-- Blog Sidebar Widgets Column -->
                    <div class="col-md-4">
                        <div class="well"> <!-- clientwell -->
                            <?php $auth_user->dogtag($job_author); ?>
                        </div>
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-edit fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php echo $job_salary_min . ' - ' . $job_salary_max . '$'; ?>
                                        </div>
                                        <div>
                                            Budget
                                        </div>
                                    </div>
									
                                </div>

                            </div>
                        </div><!-- /.row -->
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-eye fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php echo $job_seen; ?>
                                        </div>
                                        <div>
                                            Views
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <!-- Side Widget Well -->
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php echo $job_comments;?>
                                        </div>
                                        <div>
                                            Comments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div><!-- /.panel-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container">
        <!-- Footer -->
        <footer id="footer">
            <?php include 'includes/footer.php';?>
        </footer>

    </div><!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>