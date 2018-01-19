<?php 
// Der skal laves en form app, der kan v�lge s�ge kreterier for forskellige jobs.
// Der skal laves en form app til at apply for jobs. Jeg har allerede lavet funktonen (jobApply)
// Skal ha ryddet op i koden.
	session_start(); 
    require_once("class/jobClass.php");
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
                    <h2><strong>Fixe med pdo: Jobs</strong></h2>
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
                <div class="popup">
                    
                    <button type="submit" class="btn"  onclick="jobPostFunction()">Post Job
                    </button>

                    <span class="popuptext" id="myPopup">Post Job
                    <form method="post" class="form">
                    <div class="form-group-jobpost">
                        Job Name
                        <input type="text_job" class="form-control" name="txt_jobName" placeholder="Name your job">

                        Game
                        <input type="text_job" class="form-control" name="txt_jobGame" placeholder="What game are we talking about">

                        Description
                        <textarea type="text_job" class="form-control" name="txt_jobDescription" rows="2" placeholder="Max 250 chars"></textarea>

                        <label for="txt_jobBudget">Budget</label>
                        <input type="text_job" class="form-control" name="txt_jobBudget" placeholder="What is your maximum budget">

                        <button type="submit" class="btn btn-primary" name="btn-postJob">Post Your Job!</button>
                    </div>
                    </form> 
                    </span>

                </div>
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

    <script>
// When the user clicks on div, open the popup
function jobPostFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
</body>
</html>