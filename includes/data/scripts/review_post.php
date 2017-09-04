<?php  
	include 'includes/server/connect.php';

	$review_select = mysqli_query($conn, "SELECT id, client_name, review_text, rating, time_stamp FROM review_tb WHERE product_id='1'");
	if ($review_select->num_rows > 0) {

		while ($post = $review_select->fetch_assoc()) {
		//	$client_select = mysqli_query($conn, "SELECT id, name FROM review_tb WHERE id="$post["client_id"]"");
		//	$client_id = $post["client_id"];
		switch ($post["rating"]) {
			case '1':
				$rating = '<i class="fa fa-star fa-2x"></i> 
							<i class="fa fa-star-o fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i> 
							<i class="fa fa-star-o fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>';
				break;
			case '2':
				$rating = '<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>';
				break;
			case '3':
				$rating = '<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>';
				break;
			case '4':
				$rating = '<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star-o fa-2x"></i>';
				break;
			case '5':
				$rating = '<i class="fa fa-star fa-2x"></i>
				<i class="fa fa-star fa-2x"></i>
				<i class="fa fa-star fa-2x"></i>
				<i class="fa fa-star fa-2x"></i>
				<i class="fa fa-star fa-2x"></i>';
				break;
			default:
				# code...
				break;
		}
			echo '
				<div class="media">

                    <a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
                    
                    <div class="media-body">
                    	<div class="pull-right">'.$rating.'</div>
                        <h4 class="media-heading">'.$post["client_name"].' <small>'.$post["time_stamp"].'</small></h4>'.$post["review_text"].'


                    </div>
                </div><!-- Comment -->                                        
                <hr>
          ';
		}
	}

?>