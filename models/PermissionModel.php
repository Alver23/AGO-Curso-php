<?php

require_once "../config/connection.php";

function save ($data) {
	$con = connect();
	$SQL = sprintf("INSERT INTO permissions (name, display_name, description) 
		VALUES ('%s', '%s', '%s')", $data['name'], $data['display_name'], $data['description']);
	$con->query($SQL);
}