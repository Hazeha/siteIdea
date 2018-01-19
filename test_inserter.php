<?php 
	require_once("session.php");
	require_once('class/scriptClass.php');
	require_once("class/userClass.php");
	$auth_user = new USER();
	$script = new SCRIPT();
	
	$user_id = $_SESSION['user_session'];

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
			if($script->scriptApply($scrName,$scrDescription,$scrFeatures,$scrGame,$scrPrice))
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
	<title>Tester</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
	<link href="css/css_new.css" rel="stylesheet"><!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.js">
	</script>
	<script src="js/bootstrap.min.js">
	</script>
</head><!-- Bootstrap Core JavaScript -->
<body>	
<?php include 'includes/header.php';?>
<div class="wrapper">
<div class="page-wrapper">
		<div class="tab-content">

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
    </form>

		</div>	<!-- Tab content Slut -->
</div>	<!-- Page wrapper slut -->
	
</div>
<footer id="footer">
    <?php include 'includes/footer.php';?>
</footer>
</body>
</html>