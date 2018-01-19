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
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}

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

	public function GetData($userId)
	{
		
	}
}
?>