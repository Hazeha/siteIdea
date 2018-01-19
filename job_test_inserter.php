<?php 
	require_once("session.php");
	require_once('class/jobClass.php');	
	require_once("class/userClass.php");
    $jobs = new JOB();
    $auth_user = new USER();

    if(isset($_POST['btn-postJob']))
    {
        $jobName		= strip_tags($_POST['txt_jobName']);
        $jobDescription	= strip_tags($_POST['txt_jobDescription']);	
        $jobBudget		= strip_tags($_POST['txt_jobBudget']);    
        $jobGame        = strip_tags($_POST['txt_jobGame']);
    
        if($jobName=="")	{
            $error[] = "provide name !";	
        }
        else{
            try
            {
                if($jobs->jobApply($jobName,$jobDescription,$jobBudget,$jobGame))
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
  				<label>Job Name</label>
  				<input name="txt_jobName" type="text" class="form-control" placeholder="Example : Taxi Mod">

  				<label>Short Description</label>
  				<textarea name="txt_jobDescription" type="text" class="form-control" rows="2" placeholder="Max 250"></textarea>

                  <label>Game</label>
  				<select name="txt_jobGame" class="form-control">
      			<option>GTA</option>
      			<option>Arma I</option>
      			<option>Arma II</option>
                  </select>
                  
  				<label>Price</label>
  				<input name="txt_jobBudget" type="double" class="form-control" placeholder="Example : 12.5">
                
                
                <button type="submit" class="btn btn-default" name="btn-postJob">Submit Button</button>
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