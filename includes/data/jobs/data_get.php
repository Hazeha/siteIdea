<?php

	include 'includes/server/connect.php';

	$job_info = mysqli_query($conn, "SELECT jobId, jobName, jobDescription, jobSalary_max, jobSalary_min, jobClientId, jobUploadDate FROM job_tb");

    $job_author = mysqli_query($conn, "SELECT user_id, user_name, user_logo FROM users WHERE user_id='1'");




	if ($job_info->num_rows > 0) {
		$total_jobs = $job_info->num_rows;
	}

    while ($post_author = $job_author->fetch_assoc()) {
        $author_name = $post_author["user_name"];
        $author_logo = base64_encode($post_author['user_logo']);
        $author_id = $post_author["user_id"];

    }