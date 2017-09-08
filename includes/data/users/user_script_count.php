<?php 
    include 'includes/server/connect.php';
    $user_scripts = mysqli_query($conn, "SELECT id FROM script_tb WHERE id='1'");
	
	if ($user_scripts->num_rows > 0) {
		$user_totalscripts = $user_scripts->num_rows;
	}
?>