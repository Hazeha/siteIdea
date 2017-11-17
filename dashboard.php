<?php

	require_once("session.php");


	
	require_once("class/userClass.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);


	// Script tæller - - Dette skal laves om til PDO.
	include 'includes/server/connect.php';  
    $user_scripts = mysqli_query($conn, "SELECT id FROM script_tb WHERE user_id=$user_id");
	
	if ($user_scripts->num_rows > 0) {
		$user_totalscripts = $user_scripts->num_rows;
	}
	else{
		$user_totalscripts = 0;
	}
	// Box i siden på main dashboard
	$userMsg = 10;
	$userBoughtScripts = 5;
	$userSoldScripts = 4;
	$userIncome = 100;

	// Box under billede
	$userReputation = 10;
	$userScripts = 2;
	$userRating = 4;

	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>
			Modbay - <?php print($userRow['user_name']); ?>
		</title>
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
				<ul class="sidebar-nav">
					<li class="sidebar-sitepage">
						
							<strong><?php print($userRow['user_name']); ?></strong>
						
					</li>
					<hr>
					<li>
						<a data-toggle="tab" href="#dashboard">Dashboard</a>
					</li>
					<li>
						<a data-toggle="tab" href="#bought_scripts">Bought Scripts</a>
                    </li>
                    <li>
						<a data-toggle="tab" href="#sold_scripts">Sold Scripts</a>
					</li>
					<li>
						<a data-toggle="tab" href="#upload">Upload Script</a>
					</li>
					<li>
						<a data-toggle="tab" href="#settings">Settings</a>
					</li>
					<li class="divider"></li>
				</ul>
            </div><!--Side Nav Slut-->
            

            

			<div class="container-fluid">
				<!-- Games Here-->
				<div class="row">
					<div class="col-lg-12">
                    
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="tab-content">

									<div class="tab-pane fade in active" id="dashboard">
										<center>
											<h2>
											<?php print($userRow['user_name']); ?> - Legend Content Creator <!-- This is for reputation purpose -->
											</h2>
										</center>
										<hr>
										<!-- Post Content -->
										<div class="col-lg-9">
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="col-sm-3">
														<div class="panel panel-default">
                                                        
														<img class="img-thumbnail" src="data:image/jpeg;base64,<?php print(base64_encode($user_logo)); ?> ">
														<button class="btn btn-default">Change Picture</button>
														</div>
														<ul>
															<li>Nickname : <?php print($userRow['username']); ?>
															</li>
															<li>Join Date : <?php print($userRow['joining_date']); ?>
															</li>
															<li>Reputation : <?php print($userReputation); ?>
															</li>
															<li>Scripts : <?php print($userScripts); ?>
															</li>
															<li>Rating : <?php print($userRating); ?>
															</li>
														</ul>
													</div>
													<div class="col-lg-9">
														<div class="panel panel-default">
															<div class="panel-heading">
																Biography
															</div>
															<div class="panel-body">
                                                            <p>
															<?php print($userRow['user_biography']); ?>
															</p>
                                                            </div>
                                                            
														</div>
													</div>
												</div><!-- /.panel-body -->
											</div>
										</div>
										<div class="col-lg-3 pull-right">
											<div class="panel panel-default">
												<div class="panel-heading">
													<i class="fa fa-bell fa-fw"></i> Stat Panel
												</div><!-- /.panel-heading -->
												<div class="panel-body">
													<div class="list-group">
													<a class="list-group-item" href="#"><i class="fa fa-comment fa-fw"></i> Messages <span class="pull-right text-muted small"><em><?php print($userMsg);?></em></span></a> 
														<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Scripts for sale <span class="pull-right text-muted small"><em><?php print($user_totalscripts);?></em></span>
														</a> 
														
														<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Brought Scripts <span class="pull-right text-muted small"><em><?php print($userBoughtScripts);?></em></span>
														</a> 
														<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sold Scripts <span class="pull-right text-muted small"><em><?php print($userSoldScripts);?></em></span></a> 
														<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Payments <span class="pull-right text-muted small"><em><?php print($userIncome);?>  <i class="fa fa-usd fa-fw"></i> </em></span>
														</a>
													</div>
												</div><!-- /.panel-body -->
											</div>
											
										</div>
                                    </div>
                                    

									<div class="tab-pane fade" id="sold_scripts">
										<center>
											<h2>
												Sold Scripts
											</h2>
										</center>
										<hr>	
										<?php include 'includes/data/users/sold_script.php'; ?>	
										
                    					

									</div>
                                    
                                    <div class="tab-pane fade" id="bought_scripts">
										<center>
											<h2>
												Bought Scripts
											</h2>
										</center>
										<hr>																					
											<div class="col-lg-12">
												<?php include 'includes/data/users/bought_script.php';?>
											</div>
									</div>
                                    

                                    <div class="tab-pane fade" id="upload">
                                        <center>
											<h2>
												Upload Script
											</h2>
                                        </center>                                      
                                        <hr>
                                        <div class="col-lg-3">
                                        </div>
                                        <?php include 'includes/data/users/upload_script.php'; ?>
                                    </div>

                                    <div class="tab-pane fade" id="settings">
                                        <center>
											<h2>
												Profile Settings
											</h2>
                                        </center>                                      
                                        <hr>
                                        
                                        <div class="col-lg-12">
												<div class="panel panel-default">
													<div class="panel-body">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                                

								
							</div><!-- /#wrapper -->
							
						</div>
					</div>
				</div>
            </div>

            
			<?php include 'includes/footer.php';?>
            
            
        </div>
        <!-- jQuery -->
		<script src="js/jquery.js">
		</script> <!-- Bootstrap Core JavaScript -->
						 
		<script src="js/bootstrap.min.js">
		</script>
	</body>
</html>