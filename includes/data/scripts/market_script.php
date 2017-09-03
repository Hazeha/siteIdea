<?php
	include 'includes/server/connect.php';

	$script_info1 = mysqli_query($conn, "SELECT id, name, description, price, logo_link, script_link, review_count, review_rating FROM script_tb");
	
	if ($script_info1->num_rows > 0) {
		while ($post = $script_info1->fetch_assoc()) {
	
			echo '
				<div class="col-md-3 portfolio-item col-md-4">
                	    <div class="thumbnail">
                    	<img href="' . $post["script_link"] . '" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '">
                        <div class="caption">
                           	<h4 class="pull-right">' . $post["price"] . '$</h4>
                           	<h4><a href="' . $post["script_link"] . '">' . $post["name"] . '</a></h4>
                           	<p>' . $post["description"] . '</p>
                        </div>
                        <div class="ratings">
                           	<p class="pull-right">' . $post["review_count"] . ' Reviews</p>                          
                          	<p><span class="glyphicon glyphicon-star"></p>                            
                        </div>
                    </div>
                </div>
          ';
		}
	}
?>