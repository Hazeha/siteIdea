<?php 

	require_once 'includes/server/loginConfig.php';

	class SCRIPT
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
			$stmt = $this->conn->prepare($sql);
			return $stmt;
		}
		//Script apply, altså at søge om at sælge sit script.
		//Der skal laves en verify, så admins så skal godkende scriptet for at sælge modded.
		//Der mangler stadig nogen ting som skal ind.
		public function scriptApply($scrName, $scrDescription, $scrGame, $scrPrice, $scrFeatures)
		{
			try
			{
				$stmt = $this->conn->prepare("INSERT INTO script_tb (name,description,features,price,game_id) VALUES(:sname, :sdescription, :sfeatures, :sprice, :sgame)");

				$stmt->bindparam(':sname', $scrName);
				$stmt->bindparam(':sdescription', $scrDescription);
				$stmt->bindparam(':sfeatures', $scrFeatures);
				$stmt->bindparam(':sprice', $scrPrice);
				$stmt->bindparam(':sgame', $scrGame);

				$stmt->execute();

				return $stmt;
			}
			catch(PDOException $e)
			{
			echo $e->getMessage();
			}
		}
		//Funktion der poster scripts på index siden.
		//Der skal alves en search engine udfra dette.
		public function scriptPost()
		{
			$getMods = $this->conn->prepare("SELECT * FROM script_tb ORDER BY upload_date ASC");
			$getMods->execute();
			$mod = $getMods->fetchAll();


			foreach($mod as $post)//Mangler jobCat
			{
				echo '
				<div class="col-md-3 portfolio-item col-md-4">
                	    <div class="thumbnail">
                    	<img href="item.php?scriptId=' .$post["id"]. '" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '">
                        <div class="caption">
                           	<h4 class="pull-right">' . $post["price"] . '$</h4>
                           	<h4><a href="item.php?scriptId=' .$post["id"]. '">' . $post["name"] . '</a></h4>
                           	<h5>' . $post["game_id"] . ' - ' . $post["categori"] . '</h5>
                        </div>
                        <div class="ratings">
                           	<p class="pull-right">' . $post["review_count"] . ' Reviews</p>                          
                          	<p>'. $post["review_rating"] . '</p>                            
                        </div>
                    </div>
                </div>
          ';		
			}
		
		}
		//Funktion der giver admins lov at verify mods, så de kommer på marketplace. 
		public function scriptConfirm()
		{
		
		}
		//Funktion til at download script. 
		//
		public function scriptDownload()
		{
		
		}
		//Funktion der får data til det valgte script. og sendes videre til item.php
		public function getScript($scriptId)
		{
		$getMod = $this->conn->prepare("SELECT * FROM script_tb WHERE id=?");
		$getMod->execute([$scriptId]);
		$ModInfo = $getMod->fetchAll();
		return $ModInfo;
		}
		
	}

?>