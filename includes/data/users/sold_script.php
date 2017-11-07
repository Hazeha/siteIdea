<?php

include 'includes/server/connect.php';
	
	$scripts_view = mysqli_query($conn, "SELECT id, name, description, game_id, price, logo_link, script_link, upload_date, update_date FROM script_tb WHERE id=$user_id");
			if($scripts_view->num_rows > 0) {
				while($script_post = $scripts_view->fetch_assoc())
				{
				echo '
											<div class="col-lg-6">
												<div class="panel panel-default">
													<div class="panel-body">
														<div class="panel-heading pull-right  col-lg-5">
															<strong>Script Name</strong>
															<hr>
															<ul>
																<li>Price : '. $script_post["price"] .'
																</li>
																<li>Sales : 123
																</li>
																<li>Date Added : '.$script_post["upload_date"].'
																</li>
																<li>Game : '. $script_post["game_id"] .'
																</li>
																<li>
																	<a href="#">Update your script</a>
																</li>
															</ul>
														</div>
														<div class="col-lg-7">
														<img class="img-thumbnail" src="data:image/jpeg;base64,' . base64_encode( $script_post['logo_link']) . '">
														</div>
													</div>											
												</div>
											</div>
				  ';
				} 
			}
			else
			{
				echo '
				
				';

			}

?>

