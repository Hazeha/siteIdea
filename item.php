<?php 
// Der skal laves meget om. alt skal laves til PDO. LAVES I scriptClass
	require_once("session.php");

require_once 'class/scriptClass.php';
require_once 'class/userClass.php';
$user = NEW USER;
$mod = NEW SCRIPT;
if(isset($_GET['scriptId']))
{
    $modId = $_GET['scriptId']; //Kan ikke sættes direkte ned i $job->jetGet
	$data = $mod->getScript($modId);
	$modRating = $mod->avgRating($modId); //Tænk ikke på de bliver kaldt til en anden variable nedenfor.
	$modRatingCount = $mod->reviewCount($modId);
	$modSales = $mod->saleCount($modId);
	foreach($data as $post)
		{
		$script_name = $post["name"];
        $script_description = $post["description"];
        $script_feature = $post["features"];
        $script_price = $post["price"];
        $script_review_count = $modRatingCount;
        $script_rating = $modRating;
        $script_sales = $modSales;
        $script_link = $post["script_link"];
        $script_logo = $post['logo_link'];
        $script_upload = $post["upload_date"];
        $script_update = $post["update_date"];
        $script_game = $post["game_id"];
		$author_id = $post["user_id"];

		}
}

    if(isset($_POST['btn-createReview']))
    {
        $modID		= strip_tags($_GET['scriptId']);
		$userID		= strip_tags($_SESSION['user_session']);
        $reviewTxt	= strip_tags($_POST['txt_review']);
        $userRating	= strip_tags($_POST['ratingDropdown']);

        try
		{
			$mod->createReview($modID,$userID,$reviewTxt,$userRating);
        }
        catch(PDOException $e)
        {
			echo $e->getMessage();
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
    <title>Modbay - <?php echo $script_name; ?></title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/css_new.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div id="wrapper">
        
        <?php include 'includes/header.php';?> 
        
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

                                        <?php  echo '<img class="img-responsive" src="data:image/jpeg;base64,'. base64_encode($script_logo) .'">'; ?>
                                        <hr>
                                        <!--Skal lige ligges ind i function -->
                                        <p class="lead"><?php echo $script_description; ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="itemdetail">
                                        <h4>Features</h4>
                                        <hr>
                                        <p><?php echo $script_feature; ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">  <!-- Her skal der programmeres et comment system.  -->
                                        <hr>
                                        <!-- Comment Skal laves Helt om aner ikke hvordan -->

                                 
										
										<div class="well">

											<?php $mod->reviewPost($modId); ?> <!-- Poster reviews -->                                            

                                            <form method="post" role="form">
												<label>Leave a Review:</label>
                                                <textarea type="text_job" class="form-control" name="txt_review" rows="3"></textarea>
												<label>Rating</label> 
												<select type="text_job" class="form-control" name="ratingDropdown">
						                            <option value="1">
						                                1
						                            </option>
						                            <option value="2">
						                                2
						                            </option>
						                            <option value="3">
						                                3
						                            </option>
						                            <option value="4">
						                                4
						                            </option>
						                            <option value="5">
						                                5
						                            </option>
												</select>
												<button class="btn btn-primary" type="submit" name="btn-createReview">Submit</button>
											</form>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.panel-body -->
                        </div>
                    </div>





<div class="col-md-4">
        <div class="well">
             
                <?php $user->dogtag($author_id);
                 ?>
                <img class="media-object" src=" <?php  ?>" alt="">
                           <a href=<?php echo $author_id; ?>>
                            
                            </a>
                </div>



                <button type="button" class="btn btn-primary btn-lg btn-block">Buy Now</button> <br>

                   

                
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
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_sales; ?></div>
                                    <div>Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-grey">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
								<div class="medium"></div>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php echo $script_rating; ?>
                                   <div>Rating</div>
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
                                    <i class="fa glyphicon-refresh fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $script_update; ?></div>
                                    <div>Days Since Last Update</div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                     
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