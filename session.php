<?php

	session_start();
	
	require_once 'class/userClass.php';
	$session = new USER();
	
	if(!$session->is_loggedin())
	{
		// session set redirects to login page
		$session->redirect('index.php');
	}