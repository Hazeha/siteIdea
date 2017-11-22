<?php session_start(); 
// OHH YEAH! THE PDO BEAR IS HERE!

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
                </li>                                <!-- OBS NÆSTEN OK -->
        <?php include 'includes/data/scripts/game_sidenav.php'; ?>
        </ul> 
         </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php include 'includes/script_count.php';?>
                    <h1 class="page-header"><strong>Marketplace</strong></h1>                    
                </div>
            </div>
        </div>  

        <div class="container-fluid">           
            <?php include 'includes/data/scripts/market_script.php';?>        
        </div>
        
        
        
    </div><!-- /#wrapper -->
    <?php include 'includes/footer.php';?>  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->     
    <script src="js/bootstrap.min.js"></script>

</body>
</html>