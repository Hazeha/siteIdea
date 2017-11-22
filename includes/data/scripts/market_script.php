<?php

	// Skal lavet om til PDO istedet for alm. mySQL
	include 'includes/server/connect.php';
	include 'includes/data/scripts/data_get.php';
	include 'includes/data/scripts/review_rounder.php';
	$script_info1 = mysqli_query($conn, "SELECT id, name, description, price, logo_link, script_link, review_count, review_rating FROM script_tb");
	
	if ($script_info1->num_rows > 0) {
		while ($post = $script_info1->fetch_assoc()) {
	
			echo '
				<div class="col-md-3 portfolio-item col-md-4">
                	    <div class="thumbnail">
                    	<img href="item.php?scriptId=' .$post["id"]. '" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '">
                        <div class="caption">
                           	<h4 class="pull-right">' . $post["price"] . '$</h4>
                           	<h4><a href="item.php?scriptId=' .$post["id"]. '">' . $post["name"] . '</a></h4>
                           	<p>' . $post["description"] . '</p>
                        </div>
                        <div class="ratings">
                           	<p class="pull-right">' . $review_count . ' Reviews</p>                          
                          	<p>'. $avg_rating . '</p>                            
                        </div>
                    </div>
                </div>
          ';
		}
	}
?>