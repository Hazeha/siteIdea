<?php
	session_start();	
	require_once 'class/userClass.php';
	$session = new USER();
	if(!$session->is_loggedin())
	{
		$session->redirect('index.php');
	}