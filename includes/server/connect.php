<?php
$servername = "localhost";
	$username = "modbay_db_user";
	$password = "modbay_password";
	$database = "modbay_test";

	$conn = new mysqli($servername , $username , $password , $database);

	if (!$conn) {
		die("Connection Failed : " . mysqli_connect_error());
	}
