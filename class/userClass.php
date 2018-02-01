<?php
// Funktioner i denne class
// register		-  Done
// runQuery		-  Done
// doLogin		-  Done
// is_loggedin	-  Done
// doLogout		-  Done
// redirect		-  Done
// 
require_once('includes/server/loginConfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	// Register funktion. Mangler lidt mere info på users, altså skal der laves flere kriterier, som password og email verify.
	// Skal ligges ind i separat side, så det ikke længere er popup fra Header. så det også er mere overskueligt og man kan få flere oplysninger ind, ved registrering.
	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_password) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	// Skal finde en mere secure måde at lave login system.
	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_password']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	//Tjekker om user er logged ind.
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	//redirect user, hvis de prøver at tilgå en side, som man skal værre logget på for at vise.
	public function redirect($url)
	{
		header("Location: $url");		
	}
	// Siger sig selv, logger ud.
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
	// dogtag vises inde på jobs og mods. Altså den lille rubrik der viser hvem der har lavet / postet indholdet.
	public function dogtag($clientId)
	{
		$getClient = $this->conn->prepare("SELECT * FROM users WHERE user_id=?");
		$getClient->execute([$clientId]);
		$client = $getClient->fetchAll();
		foreach($client as $tag)
		echo '
			<h4 class="fa fa-gear"> '. $tag["user_name"] .'</h4><img alt="" class="media-object" src="http://placehold.it/64x64"> <a href="#">
            <div class="panel-footer">
				<button class="btn btn-primary btn-sm btn-block" type="button">Go to profile</button>
             </div></a>
			';
	}
	/* 
	En funktion til at få en users information når man tilgår deres side. 
	Der er ikke lavet et "other users dashboard/profile" html side.
	*/
	public function GetData($userId)
	{
	}
	/*
	Function til at hente row count for hver table til footer.
	Ville gerne have data'en som enkelt funcion der kan bruges flere steder
	men midlertidig bruges det til footer'
	*/
	public function footerData()
	{
		$dataMod = $this->conn->query("SELECT count(*) FROM script_tb")->fetchColumn();

		$dataJob = $this->conn->query("SELECT count(*) FROM job_tb")->fetchColumn();

		$dataUser = $this->conn->query("SELECT count(*) FROM users")->fetchColumn();

		$dataGame = $this->conn->query("SELECT count(*) FROM game_tb")->fetchColumn();

		echo
		'
			<div class="panel-footer" id="footer">
			    <ul class="menu">
					<li>
			            <h3>' . $dataUser . ' Registered Users</h3>
			        </li>
			        <li>
			            <h3>'. $dataMod .' Scripts for sale </h3>
			        </li>
			        <li>
			            <h3>'. $dataJob .' Jobs avaible </h3>
			        </li>
			        <li>
			            <h3>' . $dataGame . ' Different Games</a></h3>
			        </li>
			    </ul>
			    <hr>
			    <ul class="menu">
			        <li>
			            <a href="help.php">FAQ</a>
			        </li>
			        <li>
			            <a href="help.php">Terms of Use</a>
			        </li>
			        <li>
			            <a href="help.php">Privacy</a>
			        </li>
			        <li>
			            <a href="help.php">Contact</a>
			        </li>
			    </ul><span class="copyright">&copy; Copyright. All rights reserved. Modbay 2017</span>
			</div>
		';
	}

}
?>