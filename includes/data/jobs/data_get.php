<?php
// Kan smides ud, når jeg har sat en tæller op et andet sted.
// Men den bruges ikke på nuværende tidspunkt.
	include 'includes/server/connect.php';

	$job_info = mysqli_query($conn, "SELECT jobId, jobName, jobDescription, jobSalary_max, jobSalary_min, jobClientId, jobUploadDate FROM job_tb");

	if ($job_info->num_rows > 0) {
		$total_jobs = $job_info->num_rows;
	}
?>