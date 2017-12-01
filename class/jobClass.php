<?php
// FUnktioner i denne class
// jobApply - Apply job 
// YAY Første skridt mod en PDO hjemmeside.

require_once('includes/server/loginConfig.php');
$total_jobs = 0;
class JOB
{
	private $conn;



	public function __construct()
	{
		$database = new database();
		$db = $database->dbConnection();
		$this->conn = $db;
	}
	public function runQuery($sql)
	{
		$jobStmt = $this->conn->prepare($sql);
		return $jobStmt;
	}

	//Denne funktion bliver ikke brugt endnu. Men det er til at apply et job. Altså lave jobopslag
	public function jobApply($jname,$jdescription,$jmaxbudget,$jauthor,$jgame)
	{
		try
		{
			$jobStmt = $this->conn->prepare("INSERT INTO job_tb(jobName, jobDescription, jobMaxBudget, jobClientId, jobGame) VALUES(:jname, :jdescription, jmaxbudget, jauthor, jgame)");

			$jobStmt->bindparam(":jname", $jname);
			$jobStmt->bindparam(":jdescription", $jdescription);
			$jobStmt->bindparam(":jmaxbudget", $jmaxbudget);
			$jobStmt->bindparam(":jauthor", $jauthor);
			$jobStmt->bindparam(":jgame", $jgame);

			$jobStmt->execute();

			return $jobStmt;
		}
		catch(PDOExeption $e)
		{
			echo $e->getMessage();
		}
	
	}

	// Function til at poste jobs på den overordnede side. 
	// Herfra kunne man lave søge kreterier. 
	public function jobPost()
	{
		$getJobs = $this->conn->prepare("SELECT * FROM job_tb ORDER BY jobUploadDate ASC");
		$getJobs->execute();
		$jobs = $getJobs->fetchAll();


		foreach($jobs as $post)
		{
			echo '
                <div class="col-md-3 portfolio-item col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="pull-right">' . $post["jobMaxBudget"] . '$</h4>
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
}
?>