<?php
	require_once("session.php");
	require_once('class/scriptClass.php');
	require_once("class/userClass.php");
	$user = new USER();
	$mod = new SCRIPT();
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

	$userScripts = $mod->modCount($user_id);
	$userBoughtScripts = $mod->buyCount($user_id);
	$userSoldScripts = $mod->totalSale($user_id);

	$userRating = 4;
	$userReputation = 10;
	$userMsg = 10;

	// Form ting til apply Script

	if(isset($_POST['btn-script-apply']))
	{
		$scrName		= strip_tags($_POST['name_input']);
		$scrDescription = strip_tags($_POST['description_input']);
		$scrFeatures	= strip_tags($_POST['features_input']);	
		$scrGame		= strip_tags($_POST['game_input']);	
		$scrPrice		= strip_tags($_POST['price_input']);	
	
	
		if($scrName=="")	{
			$error[] = "provide name !";	
		}
		else if($scrDescription=="")	{
			$error[] = "provide description !";	
		}
		else if($scrFeatures=="")	{
			$error[] = "provide feature !";
		}
		else if($scrPrice=="")	{
			$error[] = "provide price !";
		}
		else if($scrGame=="")	{
			$error[] = "provide game !";
		}
		else{
			try
			{
				if($mod->scriptApply($scrName,$scrDescription,$scrFeatures,$scrGame,$scrPrice))
				{
	
				}
	
				
			}
			catch(PDOException $e)
			{
			echo $e->getMessage();
			}
		}
	}
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
                                                        
														<img class="img-thumbnail" src="data:image/jpeg;base64,<?php base64_encode($userRow["user_logo"]);?>">
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
														<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Scripts for sale <span class="pull-right text-muted small"><em><?php print($userScripts);?></em></span>
														</a> 
														
														<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Brought Scripts <span class="pull-right text-muted small"><em><?php print($userBoughtScripts);?></em></span>
														</a> 
														<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sold Scripts <span class="pull-right text-muted small"><em><?php print($userSoldScripts[1]);?></em></span></a> 
														<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i> Payments <span class="pull-right text-muted small"><em><?php print($userSoldScripts[0]);?>  <i class="fa fa-usd fa-fw"></i> </em></span>
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
										<?php $mod->userScriptPost($user_id); ?>	
										
                    					

									</div>
                                    
                                    <div class="tab-pane fade" id="bought_scripts">
										<center>
											<h2>
												Bought Scripts
											</h2>
										</center>
										<hr>																					
											<div class="col-lg-12">
												<?php $mod->userBoughtMod($user_id);?>
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
                                        <div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-body">
        <form class="form" method="post">
			<div class="form-group">
  				<label>Script Name</label>
  				<input name="name_input" type="text" class="form-control" placeholder="Example : Taxi Mod">

  				<label>Short Description</label>
  				<textarea name="description_input" type="text" class="form-control" rows="2" placeholder="Max 250"></textarea>

  				<label>Features</label>
  				<textarea name="features_input" type="text" class="form-control" rows="5" placeholder="Long description"></textarea>

  				<label>Price</label>
  				<input name="price_input" type="double" class="form-control" placeholder="Example : 12.5">

  				<label>Game</label>
  				<select name="game_input" class="form-control">
      			<option>GTA</option>
      			<option>Arma I</option>
      			<option>Arma II</option>
  				</select>
	    
              <label>Category</label><p> Try to select the categories that match your script the most</p>
		        <div class="form-group col-lg-6">                                                                                                   					
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="">Weapons
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="">Maps
                      </label>
                  </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Model
                        </label>
                    </div>
                </div>
               </div>
                <hr>
                
                <label>Mod Upload</label><p>We only accept zip compressed files</p>
                <input type="file">
                
                <button type="submit" class="btn btn-default" name="btn-script-apply">Submit Button</button>
            </div>
        </div>
	</div>
	</form>
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