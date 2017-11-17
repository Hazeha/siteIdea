    <?php   
    require_once("class/userClass.php");
    $login = new USER();
    $failure ="";
    
    
    if(isset($_POST['btn-login']))
    {
        $uname = strip_tags($_POST['txt_uname_email']);
        $umail = strip_tags($_POST['txt_uname_email']);
        $upass = strip_tags($_POST['txt_password']);
            
        if($login->doLogin($uname,$umail,$upass))
        {
            $login->redirect('dashboard.php');
            $username = $uname;
        }
        else
        {
            $error = "Wrong Details !";
        }	
    }
    if(isset($error))
    {
        $failure ='
        <div class="alert alert-danger">
           <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;' . $error . '
        </div>';
        
    }

    if($login->is_loggedin()!="")
    
    {
        $user_id = $_SESSION['user_session'];
        
        $stmt = $login->runQuery("SELECT * FROM users WHERE user_id=:user_id");
        $stmt->execute(array(":user_id"=>$user_id));
        
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        $logindd = '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> ' . $userRow['user_name'] . '<b class="caret"></b></a>
        <div class="dropdown-menu" style="margin-left: 2em">
            <div class="panel-body">
              <h3 class="form-signin-heading">Logged In.</h3>
              <ul>
              <li>
              <a href="dashboard.php">Dashboard</a>
              </li>
              <li>
              <a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout Out</a>
              </li>
              </ul>
            </div>
        </div>
    </li>';
    }
    else
    {
        $logindd = '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Login<b class="caret"></b></a>
        <div class="dropdown-menu" style="margin-left: 2em">
            <div class="panel-body">
            
    
            <form class="form-signin" method="post" id="login-form">
            
              <h3 class="form-signin-heading">Log In.</h3><hr />
              
              <div id="error">
              '. $failure .'
              </div>
              
              <div class="form-group">
              <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" required />
              <span id="check-e"></span>
              </div>
              
              <div class="form-group">
              <input type="password" class="form-control" name="txt_password" placeholder="Your Password" />
              </div>
             
               <hr />
              
              <div class="form-group">
                  <button type="submit" name="btn-login" class="btn btn-default">
                          <i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
                  </button>
              </div>  
                <br />
                  <label>Dont have account yet ! <a href="register.php">Sign Up</a></label>
            </form>
    
    
            </div>
        </div>
    </li>';
    }
    
    echo '
    
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><strong>Modbay.com</strong> make your gaming unique</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Marketplace</a>
                </li>
                <li>
                    <a href="jobs.php"><i class="fa fa-fw fa-table"></i> Jobs</a>
                </li>
                ' . $logindd . '
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="help.php">Selling Mods</a>
                        </li>
                        <li>
                            <a href="help.php">Buying Mods</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="help.php">FAQ</a>
                        </li>
                        <li>
                            <a href="help.php">Contact us</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="help.php">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="help.php">Tearms and Conditions</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </nav>';?>