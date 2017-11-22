<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Modbay - Help</title>
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
<nav class="navbar navbar-inverse">
<div class="navbar-header">
      <a class="navbar-brand">Help Section</a>
    </div>
  <div class="container-fluid pull-right">
    
    <ul class="nav navbar-nav">
	<li>
	<a data-toggle="tab" href="#selling">Selling Mods</a>
	</li>
	<li>
	<a data-toggle="tab" href="#buying">Buying Mods</a>
	</li>
	<li>
	<a data-toggle="tab" href="#faq">FAQ</a>
	</li>
	<li>
	<a data-toggle="tab" href="#contact">Contact us</a>
	</li>
	<li>
	<a data-toggle="tab" href="#privacy">Privacy Policy</a>
	</li>
	<li>
	<a data-toggle="tab" href="#terms">Terms and Conditions</a>
	</li>
    </ul>
  </div>
</nav>

<div class="page-wrapper">
		<div class="tab-content">

        	<div class="tab-pane fade in active" id="selling">
				<center><h2>Selling Addons</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

        	<div class="tab-pane fade in" id="buying">
				<center><h2>Buying Addons</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

        	<div class="tab-pane fade in" id="faq">
				<center><h2>FAQ</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

        	<div class="tab-pane fade in" id="contact">
				<center><h2>Contact</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

        	<div class="tab-pane fade in" id="privacy">
				<center><h2>Privacy Policy</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

        	<div class="tab-pane fade in" id="terms">
				<center><h2>Terms and Conditions</h2></center>
					<div class="panel panel-default">
					<div class="panel-body">
					</div>
				</div>
				<hr>
			</div>	<!-- Tab SLut -->

		</div>	<!-- Tab content Slut -->
</div>	<!-- Page wrapper slut -->
	
</div>
<footer id="footer">
    <?php include 'includes/footer.php';?>
</footer>
</body>
</html>