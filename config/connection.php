<?php

function connect()
{
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "curso_php";
	$mysqli = new mysqli($host, $user, $password, $db);
	if ($mysqli->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	    exit;
	}

	return $mysqli;
}