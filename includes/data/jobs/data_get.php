<?php

	include 'includes/server/connect.php';

	$job_info = mysqli_query($conn, "SELECT id, name, description, salary_max, salary_min, client_id, upload_date FROM job_tb");
	

	$job_selected = mysqli_query($conn, "SELECT name, description, game, upload_date, salary_max, salary_min, client_id FROM job_tb WHERE id='1' ");

    $job_author = mysqli_query($conn, "SELECT id, username, logo FROM client_tb WHERE id='1'");


    $job_seen = 10;
    $job_comments = 4;  /* Variable til show af tabs i siden */
    $job_apply = 8;

	if ($job_info->num_rows > 0) {
		$total_jobs = $job_info->num_rows;
	}

    while ($post = $job_selected->fetch_assoc()) {
        $job_name = $post["name"];
        $job_description = $post["description"];
        $job_salary_max = $post["salary_max"];
        $job_salary_min = $post["salary_min"];
        $job_upload = $post["upload_date"];
        
        $job_game = $post["game"];
    }

    while ($post_author = $job_author->fetch_assoc()) {
        $author_name = $post_author["username"];
        $author_logo = base64_encode($post_author['logo']);
        $author_id = $post_author["id"];

    }