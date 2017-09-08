<?php 
	include 'includes/server/connect.php';


	$script_info10 = mysqli_query($conn, "SELECT id FROM script_tb");
	
	if ($script_info10->num_rows > 0) {
		$totalscripts = $script_info10->num_rows;
	echo '<h2 class="pull-right"> ' . $totalscripts . ' Scripts</h2>';
	}
?> 