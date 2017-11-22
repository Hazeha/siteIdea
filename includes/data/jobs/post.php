<?php
    include 'includes/server/connect.php';    

	$job_info = mysqli_query($conn, "SELECT jobId, jobName, jobDescription, jobSalary_max, jobSalary_min, jobClientId, jobUploadDate FROM job_tb");

	if ($job_info->num_rows > 0) {
        $total_jobs = $job_info->num_rows;
		while ($post = $job_info->fetch_assoc()) {
	
			echo '
                <div class="col-md-3 portfolio-item col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="pull-right">' . $post["jobSalary_min"] .'$ - ' . $post["jobSalary_max"] . '$</h4>
                            <h4><a href="job.php?jobId=' .$post["jobId"]. '"> ' . $post["jobName"] . ' </a></h4>
                            <p> ' . $post["jobDescription"] . ' </p>
                        </div>
                        <div class="ratings">
                            <p>Uploaded : '.$post["jobUploadDate"].'</p>
                            <p>Garrys mod - Scripting</p>
                        </div>
                    </div>
                </div>
          ';
		}
	}