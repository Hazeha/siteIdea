<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Modbay - Register</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
	<link href="css/mb-market.css" rel="stylesheet"><!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.js">
	</script>
	<script src="js/bootstrap.min.js">
	</script>
</head><!-- Bootstrap Core JavaScript -->
<body>	
	<?php include 'includes/header.php';?>
	<div class="wrapper">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input autofocus="" class="form-control" name="email" placeholder="E-mail" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" placeholder="Password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label class="pull-right"><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>

                                    <a href="register.php">Register</a>
                                    </div><a class="btn btn-lg btn-success btn-block" href="dashboard.php">Login</a>
                                </fieldset>
                            </form>
                        
	</div>

	<footer id="footer">
            <?php include 'includes/footer.php';?>
        </footer>

</body>
</html>