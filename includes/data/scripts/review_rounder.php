<?php     
    include 'includes/server/connect.php';
    $script_review_sum = mysqli_query($conn, "SELECT rating FROM review_tb WHERE product_id='1'");
    $review_count = 0;
    $review_rating = 0;
    if ($script_review_sum->num_rows > 0) {
		while ($post = $script_review_sum->fetch_assoc()) {
            $review_count = $review_count + 1;
            $review_rating = $review_rating + $post["rating"];
        }
        $rounded_review = round($review_rating / $review_count);
   }

    if ($rounded_review == 0) {
        
                $avg_rating = '<i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
    }
                if ($rounded_review == 1) {
        
                    $avg_rating = '<i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
                }
                    if ($rounded_review == 2) {
        
                        $avg_rating = '<i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
                    }
                        if ($rounded_review == 3) {
        
                            $avg_rating = '<i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>'; 
                        }  
                            if ($rounded_review == 4) {
        
                                $avg_rating = '<i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
                            }
                                
                                if ($rounded_review >= 5) {
                                    
                                    $avg_rating = '<i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>';                                                   
                                }
                            
    
    
?>