<?php include 'includes/data/scripts/data_get.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Modbay - <?php echo $script_name; ?></title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div id="wrapper">
        
        <?php include 'includes/header.php';?> 
        <?php include 'includes/data/scripts/game_sidenav.php'; ?>
        
        <div id="page-wrapper">
            <div class="container-fluid">


<div class="col-md-8">
            <h1><?php echo $script_name; ?></h1>
            <p class="lead">for <a href="#"><?php echo $script_game;?></a> - <a href="#"><?php echo $script_game; ?></a></p>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#overview">Overview</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#itemdetail">Item details</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews">Reviews</a>
                                    </li>
                                </ul><!-- Tab panes -->


                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="overview">

                                        <?php  echo '<img class="img-responsive" src="data:image/jpeg;base64,'. base64_encode($script_logo) .'">'; ?> <!-- Problem her, læser ikke img filen i encode -->
                                        <hr>
                                        <!-- Post Content -->
                                        <p class="lead"><?php echo $script_description; ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="itemdetail">
                                        <h4>Features</h4>
                                        <hr>
                                        <p><?php echo $script_feature; ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">  <!-- Her skal der programmeres et comment system.  -->
                                        <hr>
                                        <!-- Posted Comments -->
                                        <!-- Comment Skal laves Helt om aner ikke hvordan -->
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
                        </div>
                    </div>





<div class="col-md-4">
        <div class="well">
                <h3 class="fa fa-gear"><?php echo $author_name; ?></h3>
                <?php echo '<img class="media-object" src=" data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . ' " alt="">';
                 ?>
                <img class="media-object" src=" <?php  ?>" alt="">
                           <a href=<?php echo $author_id; ?>>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-primary btn-lg btn-block">View Profile</button>
                            </div>
                            </a>
                </div>

            <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_sales; ?></div>
                                    <div>Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Side Widget Well -->
                
                     <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-usd fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_price; ?></div>
                                    <div>Price</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa glyphicon-refresh fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_update; ?></div>
                                    <div>Days Since Last Update</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa glyphicon-refresh fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_upload; ?></div>
                                    <div>Upload Date</div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9 text-right">
                                <i class="fa fa-star fa-3x"></i>
                                <i class="fa fa-star fa-3x"></i>
                                <i class="fa fa-star fa-3x"></i>
                                <i class="fa fa-star-o fa-3x"></i>
                                <i class="fa fa-star-o fa-3x"></i>
                                    <div>Ratings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                
                     <button type="button" class="btn btn-primary btn-lg btn-block">Buy Now</button>
                    </div>

            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <!-- Footer -->

            <?php include 'includes/footer.php';?> <!-- Footer -->
        
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>