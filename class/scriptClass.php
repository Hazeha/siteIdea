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
		/*
		Script apply, altså at søge om at sælge sit script.
		Der skal laves en verify, så admins så skal godkende scriptet for at sælge modded.
		Der mangler stadig nogen ting som skal ind.
		*/
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
		/*
		Funktion der poster scripts på index siden.
		Der skal alves en search engine udfra dette.
		*/
		public function scriptPost()
		{
			$getMods = $this->conn->prepare("SELECT * FROM script_tb ORDER BY upload_date ASC");
			$getMods->execute();
			$mod = $getMods->fetchAll();


			foreach($mod as $post)//Mangler jobCat
			{
				$modRating = $this->avgRating($post["id"]);
				$reviewCount = $this->reviewCount($post["id"]);
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
                           	<p class="pull-right">' . $reviewCount . ' Reviews</p>                          
                          	<p>'. $modRating . '</p>                            
                        </div>
                    </div>
                </div>
				';		
			}
		}
		/*
		Poster mods til on sale ved dashboard 
		*/
		public function userScriptPost($userID)
		{
			$getMods = $this->conn->prepare("SELECT * FROM script_tb WHERE user_id=?");
			$getMods->execute([$userID]);
			$mod = $getMods->fetchAll();


			foreach($mod as $post)//Mangler jobCat
			{
				$modRating = $this->avgRating($post["id"]);
				$reviewCount = $this->reviewCount($post["id"]);
				$sales = $this->saleCount($post["id"]);
				echo '

				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-heading pull-right  col-lg-5">
								<strong>'. $post["name"] .'</strong>
								<hr>
								<ul>
									<li>Price : '. $post["price"] .'$
									</li>
									<li>Sales : '. $sales .'
									</li>
									<li>Date Added : '.$post["upload_date"].'
									</li>
									<li>Game : '. $post["game_id"] .'
									</li>
									<li>Reviews : ' . $reviewCount . '
									</li>
									<div class="ratings">                       
                          				<p>'. $modRating . '</p>                            
									</div>
									<li>
										<a href="#">Update your script</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-7">
							<img class="img-modDashboard" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '" height="20%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '" width="33%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '" width="33%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $post['logo_link']) . '" width="33%">
							</div>
						</div>											
					</div>
				</div>
				';		
			}
		}
		/*
			Posting bought mod
			Virker sådan ligetil. 
			Søger i "kviteringer" efter user id, og derefter leder efter modded der er på "kvitten"
		*/
		public function userBoughtMod($userID)
		{
			$bong = $this->conn->prepare("SELECT * FROM modsales_tb WHERE user_id=?");
			$bong->execute([$userID]);
			$buy = $bong->fetchAll();

			foreach($buy as $post)
			{
				$getMod = $this->runQuery("SELECT * FROM script_tb WHERE id=?");
				$getMod->execute(array($post["mod_id"]));	
				$modPost=$getMod->fetch(PDO::FETCH_ASSOC);


				echo'
					<div class="panel panel-default">
					<div class="panel-body">
					
						<div class="panel-heading pull-right col-lg-3">
							<strong> '.$modPost["name"].' </strong>
						<hr>
							<ul>
								<li>Price : '. $modPost["price"] .'$
								</li>
								<li>Updated : '.$modPost["update_date"].'
								</li>
								<li>Bought : '. $modPost["upload_date"] .' 
								</li>
								<li>Game : '. $modPost["game_id"] .'
								</li>
								<li><a href="">Update Avaible</a>
								</li>
							</ul>
						</div>
						<div class="panel-body col-lg-3">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $modPost['logo_link']) . '" width="100%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $modPost['logo_link']) . '" width="33%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $modPost['logo_link']) . '" width="33%">
							<img class="img-thumbnail pull-left" src="data:image/jpeg;base64,' . base64_encode( $modPost['logo_link']) . '" width="33%">
						</div>
						<div class="panel-body col-lg-6">
						<p> ' . $modPost["description"] . '</p>
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

		/*
		Game nav.
		ikke done.
		Overvejer at lave søgemaskinen til controller af viste mods.
		*/
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
		Done
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

		/*
		Function der poster reviews. 
		Done
		Måske skal der sales user på.
		*/
		function reviewPost($modId)
		{
			$getRev = $this->conn->prepare("SELECT * FROM review_tb WHERE mod_id=?");
			$getRev->execute([$modId]);
			$reviewData = $getRev->fetchAll();

			foreach($reviewData as $post)
				{
				$userID = $post["user_id"];
				$getUser = $this->conn->prepare("SELECT user_id, user_name, user_logo FROM users WHERE user_id=?");
				$getUser->execute([$userID]);
				$userInfo = $getUser->fetchAll();
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

				foreach($userInfo as $userPost)
				{
				echo '
				<div class="media">
                    <a class="pull-left" href="#">
					<img alt="" class="img-thumbnail" height="100px" width="100px" src="data:image/jpeg;base64,'. base64_encode($userPost["user_logo"]) .'">
					</a>
                    
                    <div class="media-body">
                    	<div class="pull-right">'.$rating.'</div>
                        <h4 class="media-heading">'.$userPost["user_name"].' <small>'.$post["time_stamp"].'</small></h4>'.$post["review_text"].'


                    </div>
                </div><!-- Comment -->                                        
                <hr>
				';
				}
				}
		}
		/*
		Function der udregner avg rating.
		Done
		*/
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
			if($review_count > 0)
			{
				$rounded_review = round($review_rating / $review_count);
			}
			else
			{
				$rounded_review = 0;
			}
			

			if ($rounded_review >= 0) {       
                $avg_rating = '<i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i> 
                                <i class="fa fa-star-o fa-2x"></i>
                                <i class="fa fa-star-o fa-2x"></i>';
			}
            if ($rounded_review > 1.4) {        
                $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>';
			}
            if ($rounded_review > 2.4) {
 
                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                         <i class="fa fa-star fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>
                         <i class="fa fa-star-o fa-2x"></i>';
             }
             if ($rounded_review > 3.4) {

                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star fa-2x"></i>
                     <i class="fa fa-star-o fa-2x"></i>
                     <i class="fa fa-star-o fa-2x"></i>'; 
             }  
             if ($rounded_review > 4) {

                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star-o fa-2x"></i>';
             }
             
             if ($rounded_review >= 4.5) {
                 
                 $avg_rating = '<i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>
                 <i class="fa fa-star fa-2x"></i>';                                                   
             }
			return $avg_rating;
		}
		/*
		Counts review for det enkelte mod.
		*/
		function reviewCount($modID)
		{
			$revCount = $this->conn->query("SELECT count(*) FROM review_tb WHERE mod_id=$modID")->fetchColumn();
			return $revCount;
		}
		public function saleCount($modID)
		{
			$sales = $this->conn->query("SELECT count(*) FROM modsales_tb WHERE mod_id=$modID")->fetchColumn();
			return $sales;
		}

		//////////////////////DashBoard
		public function modCount($userID)
		{
			$mods = $this->conn->query("SELECT count(*) FROM script_tb WHERE user_id=$userID")->fetchColumn();
			return $mods;
		}
		public function buyCount($userID)
		{
			$buys = $this->conn->query("SELECT count(*) FROM modsales_tb WHERE user_id=$userID")->fetchColumn();
			return $buys;
		}
		public function totalSale($userID)
		{
			$totalSales = 0;
			$totalIncome = 0;
			$mods = $this->conn->prepare("SELECT * FROM script_tb WHERE user_id=?");
			$mods->execute([$userID]);
			$mod = $mods->fetchAll();

			foreach($mod as $post)
			{
				$modSales = $this->saleCount($post["id"]);
				$totalSales = $totalSales + $modSales;
				$totalIncome = $totalIncome + ($modSales * $post["price"]);
			}
			$sales = array($totalIncome, $totalSales);
			return $sales;
		}
		/*
		Get user details.
		*/
		function getUser($userID)
		{
			$getUser = $this->conn->prepare("SELECT user_id, user_name, user_logo FROM users WHERE id=?");
			$getUser->execute([$userID]);
			$userInfo = $getUser->fetchAll();
			return $userInfo;
		}


	}
?>