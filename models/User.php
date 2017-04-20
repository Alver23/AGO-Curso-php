<?php
require_once "../config/connection.php";

function login($email, $password)
{
	$con = connect();
	$sql = sprintf("SELECT * FROM users WHERE email = '%s' AND password = '%s'", $email, $password);
	// print $sql."<br>";
	$result = $con->query($sql);
	return $result;
}

// %s => Variable string
// %d => Variable entera