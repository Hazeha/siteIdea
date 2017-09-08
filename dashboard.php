<?php include 'includes/data/users/data_get.php'; ?>
<?php include 'includes/data/users/user_script_count.php';?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>
			Modbay - Profile
		</title>
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
						<h2>
							<strong>Profile</strong>
						</h2>
					</li>
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
					<li>
						<a href="#">Logout</a>
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
												<?php echo $user_username; ?> - Legend Content Creator
											</h2>
										</center>
										<hr>
										<!-- Post Content -->
										<div class="col-lg-9">
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="col-sm-3">
														<div class="panel panel-default">
                                                        
														<?php echo '	<img class="img-thumbnail" src="data:image/jpeg;base64, '. base64_encode($user_logo) . '"> <button class="btn btn-default">Change Picture</button>';?>
														</div>
														<ul>
															<li>Nickname : <?php echo $user_name; ?>
															</li>
															<li>Join Date : <?php echo $user_join_date; ?>
															</li>
															<li>Reputation : rep
															</li>
															<li>Scripts : <?php echo $user_totalscripts;?>
															</li>
															<li>Rating : 10/10
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
																				<?php echo $user_biography; ?>
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
														<a class="list-group-item" href="#"><i class="fa fa-comment fa-fw"></i> Scripts for sale <span class="pull-right text-muted small"><em>4</em></span></a> <a class="list-group-item" href="#"><i class="fa fa-twitter fa-fw"></i> Updated scripts <span class="pull-right text-muted small"><em>9001</em></span></a> <a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Brought Scripts <span class="pull-right text-muted small"><em>9</em></span></a> <a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sold Scripts <span class="pull-right text-muted small"><em>9</em></span></a> <a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Payments <span class="pull-right text-muted small"><em>1337</em></span></a>
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
																<p>
																	Harro!
																</p>
															</div>
														</li>
													</ul>
												</div><!-- /.panel-body -->
												<div class="panel-footer">
													<div class="input-group">
														<input class="form-control input-sm" id="btn-input" placeholder="Type your message here..." type="text"> <span class="input-group-btn"><button class="btn btn-warning btn-sm" id="btn-chat"><span class="input-group-btn"><span class="input-group-btn"><span class="input-group-btn"><span class="input-group-btn">Send</span></span></span></span></button></span>
													</div>
												</div><!-- /.panel-footer -->
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
										<div>
											<div class="col-lg-9">
												<div class="panel panel-default">
													<div class="panel-body">
														<div class="panel-heading pull-right">
															<strong>Script Name</strong>
															<hr>
															<ul>
																<li>Price :
																</li>
																<li>Sales :
																</li>
																<li>Date Added :
																</li>
																<li>Game :
																</li>
																<li>
																	<a href="#">Put on Sale</a>
																</li>
															</ul>
														</div><img class="img-thumbnail" height="150px" src="img/fallout-logo.jpg" width="300px">
													</div><!-- /.panel-body -->
													<div class="panel panel-default">
														<div class="panel-body">
															<div class="panel-heading pull-right">
																<strong>Script Name</strong>
																<hr>
																<ul>
																	<li>Price :
																	</li>
																	<li>Sales :
																	</li>
																	<li>Date Added :
																	</li>
																	<li>Game :
																	</li>
																	<li>
																		<a href="#">Put on Sale</a>
																	</li>
																</ul>
															</div><img class="img-thumbnail" height="150px" src="img/fallout-logo.jpg" width="300px">
														</div><!-- /.panel-body -->
													</div>
												</div>
                                            </div>
                                            <div class="col-lg-3 pull-right">
                                            <div class="panel panel-default">
														<div class="panel-body">
															<div class="panel-heading">
																<strong>Script Name</strong>
																<hr>
																<ul>
																	<li>Price :
																	</li>
																	<li>Sales :
																	</li>
																	<li>Date Added :
																	</li>
																	<li>Game :
																	</li>
																	<li>
																		<a href="#">Put on Sale</a>
																	</li>
																</ul>
															</div>
														</div><!-- /.panel-body -->
													</div>
                                            </div>
										</div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="bought_scripts">
										<center>
											<h2>
												Bought Scripts
											</h2>
										</center>
										<hr>																					
											<div class="col-lg-9">
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
                                        
                                        <div class="col-lg-9">
												<div class="panel panel-default">
													<div class="panel-body">
                                                    </div>
                                                </div>
                                        </div>
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

            <footer id="footer">
			<?php include 'includes/footer.php';?>
            </footer> <!-- footer slut -->
            
        </div>
        <!-- jQuery -->
		<script src="js/jquery.js">
		</script> <!-- Bootstrap Core JavaScript -->
						 
		<script src="js/bootstrap.min.js">
		</script>
	</body>
</html>