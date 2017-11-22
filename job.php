<?php session_start();
include 'includes/server/connect.php';

$job_seen = 10;
$job_comments = 4;  /* Variable til show af tabs i siden */
$job_apply = 8;

//Fetch funktion til job post, udfra det ID som blir vidergivet fra jobs index side.
if(isset($_GET['jobId']))
{
    $jobId = $_GET['jobId'];
    $job_selected = mysqli_query($conn, "SELECT jobName, jobDescription, jobSalary_max, jobSalary_min, jobClientId, jobUploadDate, jobGame FROM job_tb WHERE jobId=$jobId");
    

    while ($post = $job_selected->fetch_assoc()) {
        $job_name = $post["jobName"];
        $job_description = $post["jobDescription"];
        $job_salary_max = $post["jobSalary_max"];
        $job_salary_min = $post["jobSalary_min"];
        $job_upload = $post["jobUploadDate"];
        
        $job_game = $post["jobGame"];
        $jobAuthor = $post["jobClientId"];
    
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
                        <p class="lead">for <a href="#"><?php echo $job_game; ?></a> - <a href="#">Kategori</a></p>
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
                                        <div class="media">
                                            <a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Paul Pilfinger <small>August 25, 2014 at 9:30 PM</small></h4>A very nice addon for Roleplay server ;) Changes other drugs addon. A good recipe. All simply magnificent. Just buy this script. Sorry for my English ;)
                                            </div>
                                        </div><!-- Comment -->
                                        <div class="media">
                                            <a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Dr. Carsten <small>August 25, 2017 at 9:30 PM</small></h4>Good working meth system and really easy to use. Uses a more modern approach and realistic than the other competitors. <!-- Nested Comment -->
                                                <div class="media">
                                                    <a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Author <small>August 25, 2017 at 9:30 PM</small></h4>Thanks. Sorry for my English ;)
                                                    </div>
                                                </div><!-- End Nested Comment -->
                                            </div>
                                        </div>
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
                        <div class="well">
                            <h4 class="fa fa-gear"><?php echo $author_name; ?></h4><img alt="" class="media-object" src="http://placehold.it/64x64"> <a href="#">
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-lg btn-block" type="button">Apply For Job</button>
                            </div></a>
                        </div>
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-edit fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php echo $job_salary_min . '$ - ' . $job_salary_max . '$'; ?>
                                        </div>
                                        <div>
                                            Applications
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-edit fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php echo $job_apply; ?>
                                        </div>
                                        <div>
                                            Applications
                                        </div>
                                    </div>
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