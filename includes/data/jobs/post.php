<?php

	include 'includes/server/connect.php';

	$job_info = mysqli_query($conn, "SELECT id, name, description, salary_max, salary_min, client_id, upload_date FROM job_tb");
	
	if ($job_info->num_rows > 0) {
		$total_jobs = $job_info->num_rows;
	}

	if ($job_info->num_rows > 0) {
		while ($post = $job_info->fetch_assoc()) {
	
			echo '
                <div class="col-md-3 portfolio-item col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="pull-right">' . $post["salary_min"] .'$ - ' . $post["salary_max"] . '$</h4>
                            <h4><a href="job.php"> ' . $post["name"] . ' </a></h4>
                            <p> ' . $post["description"] . ' </p>
                        </div>
                        <div class="ratings">
                            <p>Uploaded : '.$post["upload_date"].'</p>
                            <p>Garrys mod - Scripting</p>
                        </div>
                    </div>
                </div>
          ';
		}
	}