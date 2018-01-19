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

		public function scriptPost()
		{
		
		}

		public function scriptConfirm()
		{
		
		}

		public function scriptDownload()
		{
		
		}
	}

?>