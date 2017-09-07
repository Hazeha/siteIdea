<?php
    include 'includes/server/connect.php';


    $games_info = mysqli_query($conn, "SELECT id, name, game_link FROM game_tb");
    
    if ($games_info->num_rows > 0) {
        while ($game_post = $games_info->fetch_assoc()) {
    
            echo '            
                <li> 
                    <a href=" ' . $game_post["game_link"] . ' "> ' . $game_post["name"] . ' </a>
                </li>
                '
            ;
        }
    }
?>