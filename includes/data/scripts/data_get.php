<?php

/* code for getting data from db */
    include 'includes/server/connect.php';
    $script_selected = mysqli_query($conn, "SELECT name, description, features, game_id, price, sales, logo_link, script_link, review_count, review_rating, upload_date, update_date FROM script_tb WHERE id='1' ");

    $script_author = mysqli_query($conn, "SELECT user_id, username, user_logo FROM users WHERE user_id='1' ");

    # mysqli_query($conn, "UPDATE script_tb SET review_rating=2 WHERE id='1' ");

    while ($post = $script_selected->fetch_assoc()) {
        $script_name = $post["name"];
        $script_description = $post["description"];
        $script_feature = $post["features"];
        $script_price = $post["price"];
        $script_review_count = count($post["review_count"]);
        $script_rating = $post["review_rating"];
        $script_sales = $post["sales"];
        $script_link = $post["script_link"];
        $script_logo = $post['logo_link'];
        $script_upload = $post["upload_date"];
        $script_update = $post["update_date"];
        $script_game = $post["game_id"];
    }

    while ($post_author = $script_author->fetch_assoc()) {
        $author_name = $post_author["username"];
        $author_logo = base64_encode($post_author['user_logo']);
        $author_id = $post_author["user_id"];
    }

    
    
?>	