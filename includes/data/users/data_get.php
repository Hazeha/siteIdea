<?php 
    include 'includes/server/connect.php';

    $user_select = mysqli_query($conn, "SELECT username, logo, email, name, phone, biography, join_date FROM client_tb WHERE id='1'");

    while ($post = $user_select->fetch_assoc()) {
        $user_name = $post["name"];
        $user_biography = $post["biography"];
        $user_username = $post["username"];
        $user_email = $post["email"];
        $user_phone = $post["phone"];
        $user_logo = $post['logo'];
        $user_join_date = $post["join_date"];
    }

    
?>