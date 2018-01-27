<?php
// FUnktioner i denne class
//  
$total_jobs = 0; //Skal lave en funktion som tæller hvor mange jobs der er.
				// Det kan måske sættes ned i postJob, men skal undersøge hvad der er smartest.
require_once('includes/server/loginConfig.php');

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

	// det er til at apply et job. Alts� lave jobopslag.
	public function jobApply($jobName, $jobClientId, $jobDescription, $jobBudgetMax, $jobBudgetMin, $jobGame, $jobCat)
	{
		try
		{
			$jobStmt = $this->conn->prepare("INSERT INTO job_tb (jobName,jobClientId,jobDescription,jobMaxBudget,jobMinBudget,jobGame,jobCat) VALUES(:jname, :jclient, :jdescription, :jmaxbudget, :jminbudget, :jgame, :jcat)");

			$jobStmt->bindparam(":jname", $jobName);
			$jobStmt->bindparam(":jclient", $jobClientId);
			$jobStmt->bindparam(":jdescription", $jobDescription);
			$jobStmt->bindparam(":jmaxbudget", $jobBudgetMax);
			$jobStmt->bindparam(":jminbudget", $jobBudgetMin);
			$jobStmt->bindparam(":jgame", $jobGame);
			$jobStmt->bindparam(":jcat", $jobCat);
			$jobStmt->execute();

			return $jobStmt;
		}
		catch(PDOExeption $e)
		{
			echo $e->getMessage();
		}
	
	}

	// Function til at poste jobs p� den overordnede side. 
	// Herfra kunne man lave s�ge kreterier.
	//ved dog ikke lige hvordan pt.
	public function jobPost()
	{
		$getJobs = $this->conn->prepare("SELECT * FROM job_tb ORDER BY jobUploadDate ASC"); // Måske lave en ORDER BY seach engine.
		$getJobs->execute();
		$jobs = $getJobs->fetchAll();


		foreach($jobs as $post)
		{
			echo '
                <div class="col-md-3 portfolio-item col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="pull-right">' . $post["jobMinBudget"] . ' - ' . $post["jobMaxBudget"] . '$</h4>
                            <h4><a href="job.php?jobId=' .$post["id"]. '"> ' . $post["jobName"] . ' </a></h4>
                            <p> ' . $post["jobDescription"] . ' </p>
                        </div>
						<div class="ratings">
						<p>'.$post["jobGame"].' - '.$post["jobCat"].'</p> 
                            <p>Uploaded : '.$post["jobUploadDate"].'</p>
                            
                        </div>
                    </div>
                </div>
			';

		}
	}
	//Her skal der laves en funktion der gør det muligt for content creators at ansøge om jobbet.
	//Der skal også laves en funktion der fortæller om hvor mange der har ansøgt om jobbet.
	public function jobRequest()
	{

	}
	//Her skal der laves en function til at post jobbet når man har valgt et.
	public function jobGet($jobId)
	{
		$getJob = $this->conn->prepare("SELECT * FROM job_tb WHERE id=?");
		$getJob->execute([$jobId]);
		$jobInfo = $getJob->fetchAll();
		return $jobInfo;		
	}
	//Game select, inde i jobPost. altså når man vælger hvilket game der er tale om når man poster sit job.
	public function jobGameSelect()
	{
		$getGames = $this->conn->prepare("SELECT * FROM game_tb");
		$getGames->execute();
		$games = $getGames->fetchAll();

		foreach($games as $row)
		{
			echo '
				<option value=" ' .$row["name"] .' ">
					' .$row["name"] .'
                <option>
			';
		}
	}
	//Til Post af comment til job
	public function jobCommentPost()
	{

	}
	//Skal bruges til at post comments til valgt job.
	//
	public function jobCommentShow($jobId)
	{
		
		foreach ($comment as $post)
		{
		echo' 
			<div class="media">
				<a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
				<div class="media-body">
					<h4 class="media-heading">Dr. Carsten <small>August 25, 2017 at 9:30 PM</small></h4>Good working meth system and really easy to use. Uses a more modern approach and realistic than the other competitors.
				</div>
			</div>
			';
		}
	}
}
?>