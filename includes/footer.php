<?php 
include 'includes/server/connect.php';


    $script_count = mysqli_query($conn, "SELECT id FROM script_tb");
    $job_count = mysqli_query($conn, "SELECT id FROM job_tb");
    $user_count = mysqli_query($conn, "SELECT user_id FROM users");
    $game_count = mysqli_query($conn, "SELECT id FROM game_tb");
    
    if ($script_count->num_rows > 0) {
        $total_script = $script_count->num_rows;
    }
    if ($job_count->num_rows > 0) {
        $total_job = $job_count->num_rows;
    }
    if ($user_count->num_rows > 0) {
        $total_user = $user_count->num_rows;
    }
    if ($game_count->num_rows > 0) {
        $total_game = $game_count->num_rows;
    }
echo '
<div class="panel-footer" id="footer">
    <ul class="menu">
        <li>
            <h3>' . $total_user . ' Registered Users</h3>
        </li>
        <li>
            <h3>'. $total_script .' Scripts for sale </h3>
        </li>
        <li>
            <h3>'. $total_job .' Jobs avaible </h3>
        </li>
        <li>
            <h3>' . $total_game . ' Different Games</a></h3>
        </li>
    </ul>
    <hr>
    <ul class="menu">
        <li>
            <a href="#">FAQ</a>
        </li>
        <li>
            <a href="#">Terms of Use</a>
        </li>
        <li>
            <a href="#">Privacy</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul><span class="copyright">&copy; Copyright. All rights reserved. Modbay 2017</span>
</div>
';?>