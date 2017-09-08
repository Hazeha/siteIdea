<?php
	include 'includes/server/connect.php';
	$bought_scripts = mysqli_query($conn, "SELECT id, script_id, timestamp_id, payment_id, price FROM bought_script WHERE client_id='1'");
	
	if ($bought_scripts->num_rows > 0) {
		
		while ($post = $bought_scripts->fetch_assoc()) {
			$script_id = $post["script_id"];
			
		}
	}
	$scripts_view = mysqli_query($conn, "SELECT id, name, description, game_id price, logo_link, script_link, upload_date, update_date FROM script_tb WHERE id=$script_id");
			if($scripts_view->num_rows > 0) {
				while($script_post = $scripts_view->fetch_assoc())
				{
				echo '
				<div class="panel panel-default">
					<div class="panel-body">
					
						<div class="panel-heading pull-right">
							<strong> '.$script_post["name"].' </strong>
						<hr>
							<ul>
								<li>Price : '. $script_post["price"] .'$
								</li>
								<li>Update Date : '.$script_post["update_date"].'
								</li>
								<li>Date Added : '. $script_post["upload_date"] .'
								</li>
								<li>Game : Warcraft
								</li>
								<li><a href="">Update Avaible</a>
								</li>
							</ul>
						</div>
						<div class="panel-body">
						<img class="img-thumbnail pull-left" height="200px" src="data:image/jpeg;base64,' . base64_encode( $script_post['logo_link']) . '" width="200px">
						<p> ' . $script_post["description"] . '</p>
						</div>
					</div><!-- /.panel-body -->
				</div>
				  ';
				} 
			}
			
?>