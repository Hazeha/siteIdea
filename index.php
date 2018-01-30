<?php session_start(); 

	require_once("class/scriptClass.php");
	$mod = NEW SCRIPT;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Modbay - Marketplace</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/css_new.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        
        <?php include 'includes/header.php';?>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-sitepage">
                    <h3><strong>Games</strong></h3>
                </li>                                <!-- OBS NÆSTEN OK -- Not at all - Skal laves til PDO-->
        <?php $mod->modGameNav(); ?>
        </ul> 
         </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Marketplace</strong></h1>                    
                </div>
            </div>
        </div>  

        <div class="container-fluid">           
            <?php $mod->scriptPost();?>        
        </div>
        
        
        
    </div><!-- /#wrapper -->
    <?php include 'includes/footer.php';?>  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->     
    <script src="js/bootstrap.min.js"></script>

</body>
</html>