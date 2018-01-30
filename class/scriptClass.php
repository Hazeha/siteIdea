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
				$modRating = $this->avgRating($post["id"]);
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
                          	<p>'. $modRating . '</p>                            
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

		//Sidenav
		public function modGameNav()
		{
			$getGames = $this->conn->prepare("SELECT * FROM game_tb");
			$getGames->execute();
			$game = $getGames->fetchAll();

			foreach($game as $post)
			{
				echo '            
                <li> 
                    <a href=" ' . $post["game_link"] . ' "> ' . $post["name"] . ' </a>
                </li>
                ';
			}
			echo '
			<li><center> 
			<a href="dashboard.php"> Apply Game </a></center>
			</li>';
		}
		/*
		Function til at lave reviews. 
		Har problemer med at indsætte Rating og review
		ModID og userID virker fint. Men det er nok $_POST der er problemet
		*/
		public function createReview($modID, $userID, $reviewTxt, $userRating)
		{
			try
			{
				$review = $this->conn->prepare("INSERT INTO review_tb (mod_id,user_id,review_text,rating) VALUES(:modID, :userID, :reviewTxt, :userRating)");
				$review->bindparam(":modID", $modID);
				$review->bindparam(":userID", $userID);
				$review->bindparam(":reviewTxt", $reviewTxt);
				$review->bindparam(":userRating", $userRating);
				$review->execute();
				return $review;
			}
			catch(PDOExeption $e)
			{
				echo $e->getMessage();
			}
		}

		function reviewPost($modId)
		{
			$getRev = $this->conn->prepare("SELECT * FROM review_tb WHERE mod_id=?");
			$getRev->execute([$modId]);
			$reviewData = $getRev->fetchAll();

			foreach($reviewData as $post)
				{
					switch ($post["rating"]) {
					case '1':
						$rating = '<i class="fa fa-star fa-2x"></i> 
									<i class="fa fa-star-o fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i> 
									<i class="fa fa-star-o fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>';
						break;
					case '2':
						$rating = '<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>';
						break;
					case '3':
						$rating = '<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>';
						break;
					case '4':
						$rating = '<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star fa-2x"></i>
									<i class="fa fa-star-o fa-2x"></i>';
						break;
					case '5':
						$rating = '<i class="fa fa-star fa-2x"></i>
						<i class="fa fa-star fa-2x"></i>
						<i class="fa fa-star fa-2x"></i>
						<i class="fa fa-star fa-2x"></i>
						<i class="fa fa-star fa-2x"></i>';
						break;
					default:
		
					break;
			}
				echo '
				<div class="media">

                    <a class="pull-left" href="#"><img alt="" class="media-object" src="http://placehold.it/64x64"></a>
                    
                    <div class="media-body">
                    	<div class="pull-right">'.$rating.'</div>
                        <h4 class="media-heading">'.$post["user_id"].' <small>'.$post["time_stamp"].'</small></h4>'.$post["review_text"].'


                    </div>
                </div><!-- Comment -->                                        
                <hr>
				';
				}
		}
		public function avgRating($modId)
		{
			$getRev = $this->conn->prepare("SELECT * FROM review_tb WHERE mod_id=?");
			$getRev->execute([$modId]);
			$reviewData = $getRev->fetchAll();

			$review_count = 0;
			$review_rating = 0;

			foreach($reviewData as $post)
			{
				$review_count = $review_count + 1;
				$review_rating = $review_rating + $post["rating"];
			}
			$rounded_review = round($review_rating / $review_count);

			if ($rounded_review == 0) {       
                $avg_rating = '<i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
			}
            if ($rounded_review == 1) {        
                $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>';
			}
            if ($rounded_review == 2) {
 
                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                         <i class="fa fa-star fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>';
             }
             if ($rounded_review == 3) {

                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star-o fa-2x"></i>
                     <i class="fa fa-star-o fa-2x"></i>'; 
             }  
             if ($rounded_review == 4) {

                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>';
             }
             
             if ($rounded_review >= 5) {
                 
                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>';                                                   
             }
			return $avg_rating;
		}

	}
?>