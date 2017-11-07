<?php 
    include 'includes/server/connect.php';

    $user_select = mysqli_query($conn, "SELECT username, logo, email, name, phone, biography, join_date FROM users WHERE user_id='1'");

    while ($post = $user_select->fetch_assoc()) {
        $user_name = $post["user_name"];
        $user_biography = $post["user_biography"];
        $user_username = $post["username"];
        $user_email = $post["user_email"];
        $user_phone = $post["user_phone"];
        $user_logo = $post['user_logo'];
        $user_join_date = $post["joining_date"];
    }

    
?>