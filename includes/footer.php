<?php 
/*
	Ved ikke om det er bedst at have det som function, men havde problemer 
	med at "parse" data from function til her.
	Så midlertidig er footer som function.
*/
	require_once("class/userClass.php");
	$user = NEW USER();
	$user->footerData();
?>